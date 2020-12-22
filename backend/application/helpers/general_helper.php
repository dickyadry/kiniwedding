<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    exit;
}

function gen_page()
{
    $ci =& get_instance();
    $page = 1;
    if ($ci->input->get('page')) {
        $page = $ci->input->get('page');
    }
    return $page;
}
function gen_limit($limit = 10)
{
    $ci =& get_instance();
    if ($ci->input->get('limit')) {
        $limit = $ci->input->get('limit');
    }
    return $limit;
}
function gen_offset($page, $limit)
{
    return ($page-1) * $limit;
}

function get_query_string($remove = '')
{
    $query_string = $_GET;
    if ($remove) {
        if (is_array($remove)) {
            foreach ($remove as $key => $value) {
                unset($query_string[$value]);
            }
        } else {
            unset($query_string[$remove]);
        }
    }
    if ($query_string) {
        return '?'.http_build_query($query_string);
    }
    return '';
}

function cek_acccess($module_feature_id)
{
    $ci =& get_instance();
    $userData = $ci->session->userdata("adminData"); 
    $mf = explode(',', $userData['module_feature']);

   if(!in_array($module_feature_id, $mf)){ 
        redirect(base_url('logout'));
   }

}

function gen_slug($text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    $ci =& get_instance(); 
    $ci->load->database();
    $ci->product_model = new GeneralModel("product");

    $query = $ci->product_model->source();
    $query->where('slug',$text);
    $total_data = $query->count_all_results();

    if (empty($text)) {
        return 'n-a';
    }

    if($total_data>0){
        return $text.'-'.($total_data+1); 
    }

    return $text;
}

function rupiah($harga){
    $harga = intval($harga);
    $rupiah=number_format($harga,0,',','.');
    return "Rp. " . $rupiah;
}

function convert_date($start_date,$end_date){
    if (date('Y', strtotime($start_date)) == date('Y', strtotime($end_date))) {
        if (date('m', strtotime($start_date)) == date('m', strtotime($end_date))) {
            if (date('d', strtotime($start_date)) == date('d', strtotime($end_date))) {
                $date = date('d F Y', strtotime($start_date));
            }
            else{
                $date = date('d', strtotime($start_date)) . '-' . date('d', strtotime($end_date)) . ' ' . date('F Y', strtotime($start_date));
            }
        }
        else{
            $date = date('d F', strtotime($start_date)) . '-' . date('d F', strtotime($end_date)) . ' ' . date('Y', strtotime($start_date));
        }
    }
    else{
        $date = date('d F Y', strtotime($start_date)) . '-' . date('d F Y', strtotime($end_date));
    }

    return $date .' '.convert_time($start_date,$end_date);
}

function convert_time($start_date,$end_date){

    if(date('Y-m-d',strtotime($start_date))==date('Y-m-d',strtotime($end_date))){
        return '<br>Pukul: '. date('H:i',strtotime($start_date)) .' s/d '.date('H:i',strtotime($end_date));
    }else{
        return '<br>Pukul: '. date('H:i',strtotime($start_date)) .' s/d selesai.';
    }
}

function gen_code_peserta(){

    $ci =& get_instance(); 
    $ci->load->database();
    $ci->peserta_model = new GeneralModel("peserta");

    $permitted_chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $input_length = strlen($permitted_chars);

    $random_string = "";
    for($i=0; $i<10; $i++){
        $random_character = $permitted_chars[mt_rand(0,$input_length-1)];
        $random_string .=$random_character;
    }

    $peserta = $ci->peserta_model->find($random_string,'code');
    if(isset($peserta->code)){
        gen_code_peserta();
    }else{
        return $random_string;
    }

}

function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'Kiniwedding!@#$';
    $secret_iv = 'login';
    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ($action == 'encrypt'){
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if($action == 'decrypt') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}


