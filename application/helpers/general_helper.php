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

    return $text;
}

function gen_random_string(){

    $permitted_chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $input_length = strlen($permitted_chars);

    $random_string = "";
    for($i=0; $i<10; $i++){
        $random_character = $permitted_chars[mt_rand(0,$input_length-1)];
        $random_string .=$random_character;
    }

    return $random_string;

}

function gen_field($text)
{
    $text = preg_replace('~[^\pL\d]+~u', '_', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '_');
    $text = preg_replace('~-+~', '_', $text);
    $text = strtolower($text);
    return $text.'_'.time(); 

}

function gen_field_mf()
{

    $text = gen_code_peserta();
    $text = preg_replace('~[^\pL\d]+~u', '_', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '_');
    $text = preg_replace('~-+~', '_', $text);
    $text = strtolower($text);
    return $text.'_'.time(); 

}

function gen_code_event(){

    $ci =& get_instance(); 
    $ci->load->database();
    $ci->product_model = new GeneralModel("product");

    $permitted_chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $input_length = strlen($permitted_chars);

    $random_string = "";
    for($i=0; $i<10; $i++){
        $random_character = $permitted_chars[mt_rand(0,$input_length-1)];
        $random_string .=$random_character;
    }

    $product = $ci->product_model->find($random_string,'code');
    if(isset($product->code)){
        gen_code_event();
    }else{
        return $random_string;
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

function get_barcode($id)
{

    $ci =& get_instance(); 
    $ci->load->database();
    $ci->peserta_model = new GeneralModel("peserta");
    $ci->product_model = new GeneralModel("product");

    $product = $ci->product_model->find($id);

    $query = $ci->peserta_model->source();
    $query->where('product_id',$id);
    $query->limit(1,0);
    $peserta = $query->get()->result();

    $intial = $product['code'];
    $length = 5;

    if($structure['running_number'] >= 1){
        $number = intval($structure['running_number']);
    }else{
        $number = 0;
    }

    $number++;
    $tmp= "";
    for ($i=0; $i < ($length-strlen($number)) ; $i++)
    {
        $tmp = $tmp."0";
    }

    return strval($intial.$tmp.$number);

}

function gen_vanumber(){

    $ci =& get_instance(); 
    $ci->load->database();
    $ci->product_model = new GeneralModel("product");

    $permitted_chars = "1234567890";
    $input_length = strlen($permitted_chars);

    $random_string = "";
    for($i=0; $i<11; $i++){
        $random_character = $permitted_chars[mt_rand(0,$input_length-1)];
        $random_string .=$random_character;
    }

    $product = $ci->product_model->find($random_string,'code');
    if(isset($product->code)){
        gen_code_event();
    }else{
        return $random_string;
    }

}

function iso8601() {
    $current_date_time = date('Y-m-d H:i:s');
    $time = strtotime("+60 minutes", strtotime($current_date_time));
    return date("Y-m-d") . 'T' . date("H:i:s",$time).'.000Z';
}

function rupiah($harga){
    $harga = intval($harga);
    $rupiah=number_format($harga,0,',','.');
    return "Rp. " . $rupiah;
}

function number_rupiah($harga){
    $harga = intval($harga);
    $rupiah=number_format($harga,0,',','.');
    return $rupiah;
}

function permalink($nama){
    // $nama = intval($nama);
    return url_title($nama, "dash", true);
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
        return '<br/>Pukul: '. date('H:i',strtotime($start_date)) .' s/d '.date('H:i',strtotime($end_date));
    }else{
        return '<br/>Pukul: '. date('H:i',strtotime($start_date)) .' s/d selesai.';
    }
}

function pending_ticket(){

    $ci =& get_instance(); 
    $ci->load->database();
    $ci->sales_order_model = new GeneralModel("sales_order");

    $ci->userpubliclog = $ci->session->userdata('userpubliclog');

    $query = $ci->sales_order_model->source();
    $query->where('status_order',4);
    $query->where('member_id',$ci->userpubliclog["member_id"]);
    
    $query->where('payment_method IS NOT NULL'); 
    $query->group_start();
        $query->or_group_start();
            $query->where('payment_method','manual_transfer');   
            $query->where('sales_order.created_at >=',expiry_time_format(60));   
        $query->group_end();

        $query->or_group_start();
            $query->where('payment_method','bank_transfer');   
            $query->where('sales_order.created_at >=',expiry_time_format(60));   
        $query->group_end();

        $query->or_group_start();
            $query->where('payment_method','ewallet');   
            $query->where('sales_order.created_at >=',expiry_time_format(5));   
        $query->group_end();

        $query->or_group_start();
            $query->where('payment_method','qris');   
            $query->where('sales_order.created_at >=',expiry_time_format(15));   
        $query->group_end();
    $query->group_end();

    $total_data = $query->count_all_results();
    
    return $total_data;
}

function cart_contents($where=''){

    $ci =& get_instance(); 
    $ci->load->database();
    $ci->cart_model = new GeneralModel("shopping_cart");
    $ci->product_model = new GeneralModel("product");

    $ci->userpubliclog = $ci->session->userdata('userpubliclog');

    $query = $ci->cart_model->source();
    $query->select('shopping_cart.*, p.cover, p.name, p.description, p.price');
    $query->join('product p','p.id=shopping_cart.product_id');
    $query->where('shopping_cart.member_id',$ci->userpubliclog["member_id"]);
    $cart_contents_tiket = $query->get()->result();

    $datas = array();
    $sub_total = 0;
    $grand_total = 0;
    
    $total_tiket = 0;
    $total_tiket_berbayar = 0;

    foreach ($cart_contents_tiket as $key => $value) {


        $detail = array();
        for($i=0; $i<$value->quantity; $i++){ 
            
            $name = ($i==0)?$ci->userpubliclog["name"]:"";
            $email = ($i==0)?$ci->userpubliclog["email"]:"";
            $phone = ($i==0)?$ci->userpubliclog["phone"]:"";

            $detail[] = array(
                'id'=>$value->ticket_id,
                'product_id'=>$value->product_id,
                'product_name'=>$value->name,
                'name'=>$name,
                'email'=>$email,
                'phone'=>$phone,
            );

        }
        $value->detail = $detail;
        $datas[] = $value;

        $total_tiket = $total_tiket + $value->quantity;
        $total_tiket_berbayar = $total_tiket_berbayar + ($value->price>0)?$value->quantity:0;

        $sub_total = $sub_total + $value->total;

    }

    $biaya_layanan = 0;
    $grand_total = $sub_total + ($biaya_layanan);

    $result = array(
        'datas'=>$datas,
        'total_tiket'=>$total_tiket,
        'sub_total'=>$sub_total,
        'grand_total'=>$grand_total,
        'biaya_layanan'=>$biaya_layanan,
    );

    return $result;
}

function get_data_custom($value,$id_peserta){

    $ci =& get_instance(); 
    $ci->load->database();
    $ci->additional_data_model = new GeneralModel("additional_data");

    $query = $ci->additional_data_model->source();
    $query->where('id_peserta',$id_peserta);
    $query->where('custom_form_id',$value->id);
    $data = $query->get()->row();
    return (isset($data->value))?$data->value:'';

}

function get_data_multiple_form($value,$email){

    $ci =& get_instance(); 
    $ci->load->database();
    $ci->multiple_form_data_model = new GeneralModel("multiple_form_data");

    $query = $ci->multiple_form_data_model->source();
    $query->where('email',$email);
    $query->where('multiple_form_question_id',$value->id);
    $data = $query->get()->row();
    return (isset($data->value))?$data->value:'';

}

function convert_start_date($start_date){
    $date = date('d F Y', strtotime($start_date));
    return $date;
}

function expiry_time($times=15){
    $date = date_create(gmdate("Y-m-d H:i:s",time()+60*60*7));
    date_add($date, date_interval_create_from_date_string($times.' minutes'));
    $start_time = date_format($date, 'Y-m-d H:i:s');
    return date('YmdHis',strtotime($start_time));
}

function expiry_time_format($times=60){
    $date = date_create(gmdate("Y-m-d H:i:s",time()+60*60*7));
    date_add($date, date_interval_create_from_date_string("-$times".' minutes'));
    $start_time = date_format($date, 'Y-m-d H:i:s');
    return date('Y-m-d H:i:s',strtotime($start_time));
}


function curl_payment($transaction){

    $transaction = json_encode($transaction);

    $curl = curl_init();

    curl_setopt_array($curl, array(
    // CURLOPT_URL => "https://api.midtrans.com/v2/charge", //PRO
    CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/charge", //DEV
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $transaction,
    CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    // "Authorization: Basic TWlkLXNlcnZlci0zVW5KQ2NGczRSMTBoVm4wc2VkZWFveVo6", // PRO
    "Authorization: Basic U0ItTWlkLXNlcnZlci1uLXRydm50aWVNUFFKcEpqcEdMbUlXQ206", // DEV
    "cache-control: no-cache",
    "content-type: application/json"
    ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return array('status'=>'error','msg'=>"cURL Error #:" . $err);
    } else {
        return array('status'=>'success','data'=>json_decode($response));
    }

}

function curl_xendit_payment($url,$transaction){

    $transaction = json_encode($transaction);

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url, //PRO
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $transaction,
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "Authorization: Basic eG5kX3Byb2R1Y3Rpb25feU9MbklyZlBNNGRwaUFyNDEwbGRCY2NBVlJpM3FLeXVJb1piYktVdkxESURPR3JCNVI2R2pjaEJ6c1R1UzQ6", // PRO
            // "Authorization: Basic eG5kX2RldmVsb3BtZW50X1B5TVJGTEJKUllGS0Q2dkNHQlpoa2pFTkZHT0ZVbWNTYWttQVp3aFB2b3pwQjE3ejBIekRzdjlPbWh2ZVB1V2o6", // DEV
            "cache-control: no-cache",
            "content-type: application/json"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return array('status'=>'error','msg'=>"cURL Error #:" . $err);
    } else {
        $response = json_decode($response,TRUE);
        if(isset($response['error_code'])){
            return array('status'=>'error','msg'=>$response['message']);
        }else{
            return array('status'=>'success','data'=>$response);
        }
    }

}

function tanggal_resepsi($date){

    $day = date('d',strtotime($date));
    $month = date('m',strtotime($date));
    $year = date('Y',strtotime($date));
    if((int)$month==1){
        $month = 'Januari';
    }else if((int)$month==2){
        $month = 'Februari';
    }else if((int)$month==3){
        $month = 'Maret';
    }else if((int)$month==4){
        $month = 'April';
    }else if((int)$month==5){
        $month = 'Mei';
    }else if((int)$month==6){
        $month = 'Juni';
    }else if((int)$month==7){
        $month = 'Juli';
    }else if((int)$month==8){
        $month = 'Agustus';
    }else if((int)$month==9){
        $month = 'September';
    }else if((int)$month==10){
        $month = 'Oktober';
    }else if((int)$month==11){
        $month = 'November';
    }else if((int)$month==12){
        $month = 'Desember';
    }

    return $day.' '.$month.' '.$year;

}

function hari($date){

    $day = date('D',strtotime($date));

    if(strtoupper($day)=='SUN'){
        $day = 'Minggu';
    }else if(strtoupper($day)=='MON'){
        $day = 'Senin';
    }else if(strtoupper($day)=="THU"){
        $day = 'Selasa';
    }else if(strtoupper($day)=="WED"){
        $day = 'Rabu';
    }else if(strtoupper($day)=="TRU"){
        $day = 'Kamis';
    }else if(strtoupper($day)=="FRI"){
        $day = 'Jum`at';
    }else if(strtoupper($day)=="SAT"){
        $day = 'Sabtu';
    }

    return $day;

}

function pukul($date){

    $pukul = date('H:i',strtotime($date));
    return $pukul;

}

function initial($fullname){

    $arr_name = explode(" ", $fullname);
    if(count($arr_name)>1){
        $initial = substr($arr_name[0], 0,1).''.substr($arr_name[1], 0,1);
    }else{
        $initial = substr($arr_name[0], 0,2);
    }

    return $initial;

}

function show_images($images){

    $ci =& get_instance(); 
    $ci->load->library('user_agent');
    if ($ci->agent->is_mobile()){
        $result = $images;
    }else{
        $result = str_replace('thumbs/', '', $images);
        // $result = $images;
    }
    return $result;
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

function barcode( $filepath="", $text="0", $size="20", $orientation="horizontal", $code_type="code128", $print=false, $SizeFactor=1 ) {
    $code_string = "";
    // Translate the $text into barcode the correct $code_type
    if ( in_array(strtolower($code_type), array("code128", "code128b")) ) {
        $chksum = 104;
        // Must not change order of array elements as the checksum depends on the array's key to validate final code
        $code_array = array(" "=>"212222","!"=>"222122","\""=>"222221","#"=>"121223","$"=>"121322","%"=>"131222","&"=>"122213","'"=>"122312","("=>"132212",")"=>"221213","*"=>"221312","+"=>"231212",","=>"112232","-"=>"122132","."=>"122231","/"=>"113222","0"=>"123122","1"=>"123221","2"=>"223211","3"=>"221132","4"=>"221231","5"=>"213212","6"=>"223112","7"=>"312131","8"=>"311222","9"=>"321122",":"=>"321221",";"=>"312212","<"=>"322112","="=>"322211",">"=>"212123","?"=>"212321","@"=>"232121","A"=>"111323","B"=>"131123","C"=>"131321","D"=>"112313","E"=>"132113","F"=>"132311","G"=>"211313","H"=>"231113","I"=>"231311","J"=>"112133","K"=>"112331","L"=>"132131","M"=>"113123","N"=>"113321","O"=>"133121","P"=>"313121","Q"=>"211331","R"=>"231131","S"=>"213113","T"=>"213311","U"=>"213131","V"=>"311123","W"=>"311321","X"=>"331121","Y"=>"312113","Z"=>"312311","["=>"332111","\\"=>"314111","]"=>"221411","^"=>"431111","_"=>"111224","\`"=>"111422","a"=>"121124","b"=>"121421","c"=>"141122","d"=>"141221","e"=>"112214","f"=>"112412","g"=>"122114","h"=>"122411","i"=>"142112","j"=>"142211","k"=>"241211","l"=>"221114","m"=>"413111","n"=>"241112","o"=>"134111","p"=>"111242","q"=>"121142","r"=>"121241","s"=>"114212","t"=>"124112","u"=>"124211","v"=>"411212","w"=>"421112","x"=>"421211","y"=>"212141","z"=>"214121","{"=>"412121","|"=>"111143","}"=>"111341","~"=>"131141","DEL"=>"114113","FNC 3"=>"114311","FNC 2"=>"411113","SHIFT"=>"411311","CODE C"=>"113141","FNC 4"=>"114131","CODE A"=>"311141","FNC 1"=>"411131","Start A"=>"211412","Start B"=>"211214","Start C"=>"211232","Stop"=>"2331112");
        $code_keys = array_keys($code_array);
        $code_values = array_flip($code_keys);
        for ( $X = 1; $X <= strlen($text); $X++ ) {
            $activeKey = substr( $text, ($X-1), 1);
            $code_string .= $code_array[$activeKey];
            $chksum=($chksum + ($code_values[$activeKey] * $X));
        }
        $code_string .= $code_array[$code_keys[($chksum - (intval($chksum / 103) * 103))]];

        $code_string = "211214" . $code_string . "2331112";
    } elseif ( strtolower($code_type) == "code128a" ) {
        $chksum = 103;
        $text = strtoupper($text); // Code 128A doesn't support lower case
        // Must not change order of array elements as the checksum depends on the array's key to validate final code
        $code_array = array(" "=>"212222","!"=>"222122","\""=>"222221","#"=>"121223","$"=>"121322","%"=>"131222","&"=>"122213","'"=>"122312","("=>"132212",")"=>"221213","*"=>"221312","+"=>"231212",","=>"112232","-"=>"122132","."=>"122231","/"=>"113222","0"=>"123122","1"=>"123221","2"=>"223211","3"=>"221132","4"=>"221231","5"=>"213212","6"=>"223112","7"=>"312131","8"=>"311222","9"=>"321122",":"=>"321221",";"=>"312212","<"=>"322112","="=>"322211",">"=>"212123","?"=>"212321","@"=>"232121","A"=>"111323","B"=>"131123","C"=>"131321","D"=>"112313","E"=>"132113","F"=>"132311","G"=>"211313","H"=>"231113","I"=>"231311","J"=>"112133","K"=>"112331","L"=>"132131","M"=>"113123","N"=>"113321","O"=>"133121","P"=>"313121","Q"=>"211331","R"=>"231131","S"=>"213113","T"=>"213311","U"=>"213131","V"=>"311123","W"=>"311321","X"=>"331121","Y"=>"312113","Z"=>"312311","["=>"332111","\\"=>"314111","]"=>"221411","^"=>"431111","_"=>"111224","NUL"=>"111422","SOH"=>"121124","STX"=>"121421","ETX"=>"141122","EOT"=>"141221","ENQ"=>"112214","ACK"=>"112412","BEL"=>"122114","BS"=>"122411","HT"=>"142112","LF"=>"142211","VT"=>"241211","FF"=>"221114","CR"=>"413111","SO"=>"241112","SI"=>"134111","DLE"=>"111242","DC1"=>"121142","DC2"=>"121241","DC3"=>"114212","DC4"=>"124112","NAK"=>"124211","SYN"=>"411212","ETB"=>"421112","CAN"=>"421211","EM"=>"212141","SUB"=>"214121","ESC"=>"412121","FS"=>"111143","GS"=>"111341","RS"=>"131141","US"=>"114113","FNC 3"=>"114311","FNC 2"=>"411113","SHIFT"=>"411311","CODE C"=>"113141","CODE B"=>"114131","FNC 4"=>"311141","FNC 1"=>"411131","Start A"=>"211412","Start B"=>"211214","Start C"=>"211232","Stop"=>"2331112");
        $code_keys = array_keys($code_array);
        $code_values = array_flip($code_keys);
        for ( $X = 1; $X <= strlen($text); $X++ ) {
            $activeKey = substr( $text, ($X-1), 1);
            $code_string .= $code_array[$activeKey];
            $chksum=($chksum + ($code_values[$activeKey] * $X));
        }
        $code_string .= $code_array[$code_keys[($chksum - (intval($chksum / 103) * 103))]];

        $code_string = "211412" . $code_string . "2331112";
    } elseif ( strtolower($code_type) == "code39" ) {
        $code_array = array("0"=>"111221211","1"=>"211211112","2"=>"112211112","3"=>"212211111","4"=>"111221112","5"=>"211221111","6"=>"112221111","7"=>"111211212","8"=>"211211211","9"=>"112211211","A"=>"211112112","B"=>"112112112","C"=>"212112111","D"=>"111122112","E"=>"211122111","F"=>"112122111","G"=>"111112212","H"=>"211112211","I"=>"112112211","J"=>"111122211","K"=>"211111122","L"=>"112111122","M"=>"212111121","N"=>"111121122","O"=>"211121121","P"=>"112121121","Q"=>"111111222","R"=>"211111221","S"=>"112111221","T"=>"111121221","U"=>"221111112","V"=>"122111112","W"=>"222111111","X"=>"121121112","Y"=>"221121111","Z"=>"122121111","-"=>"121111212","."=>"221111211"," "=>"122111211","$"=>"121212111","/"=>"121211121","+"=>"121112121","%"=>"111212121","*"=>"121121211");

        // Convert to uppercase
        $upper_text = strtoupper($text);

        for ( $X = 1; $X<=strlen($upper_text); $X++ ) {
            $code_string .= $code_array[substr( $upper_text, ($X-1), 1)] . "1";
        }

        $code_string = "1211212111" . $code_string . "121121211";
    } elseif ( strtolower($code_type) == "code25" ) {
        $code_array1 = array("1","2","3","4","5","6","7","8","9","0");
        $code_array2 = array("3-1-1-1-3","1-3-1-1-3","3-3-1-1-1","1-1-3-1-3","3-1-3-1-1","1-3-3-1-1","1-1-1-3-3","3-1-1-3-1","1-3-1-3-1","1-1-3-3-1");

        for ( $X = 1; $X <= strlen($text); $X++ ) {
            for ( $Y = 0; $Y < count($code_array1); $Y++ ) {
                if ( substr($text, ($X-1), 1) == $code_array1[$Y] )
                    $temp[$X] = $code_array2[$Y];
            }
        }

        for ( $X=1; $X<=strlen($text); $X+=2 ) {
            if ( isset($temp[$X]) && isset($temp[($X + 1)]) ) {
                $temp1 = explode( "-", $temp[$X] );
                $temp2 = explode( "-", $temp[($X + 1)] );
                for ( $Y = 0; $Y < count($temp1); $Y++ )
                    $code_string .= $temp1[$Y] . $temp2[$Y];
            }
        }

        $code_string = "1111" . $code_string . "311";
    } elseif ( strtolower($code_type) == "codabar" ) {
        $code_array1 = array("1","2","3","4","5","6","7","8","9","0","-","$",":","/",".","+","A","B","C","D");
        $code_array2 = array("1111221","1112112","2211111","1121121","2111121","1211112","1211211","1221111","2112111","1111122","1112211","1122111","2111212","2121112","2121211","1121212","1122121","1212112","1112122","1112221");

        // Convert to uppercase
        $upper_text = strtoupper($text);

        for ( $X = 1; $X<=strlen($upper_text); $X++ ) {
            for ( $Y = 0; $Y<count($code_array1); $Y++ ) {
                if ( substr($upper_text, ($X-1), 1) == $code_array1[$Y] )
                    $code_string .= $code_array2[$Y] . "1";
            }
        }
        $code_string = "11221211" . $code_string . "1122121";
    }

    // Pad the edges of the barcode
    $code_length = 20;
    if ($print) {
        $text_height = 30;
    } else {
        $text_height = 0;
    }
    
    for ( $i=1; $i <= strlen($code_string); $i++ ){
        $code_length = $code_length + (integer)(substr($code_string,($i-1),1));
        }

    if ( strtolower($orientation) == "horizontal" ) {
        $img_width = $code_length*$SizeFactor;
        $img_height = $size;
    } else {
        $img_width = $size;
        $img_height = $code_length*$SizeFactor;
    }

    $image = imagecreate($img_width, $img_height + $text_height);
    $black = imagecolorallocate ($image, 0, 0, 0);
    $white = imagecolorallocate ($image, 255, 255, 255);

    imagefill( $image, 0, 0, $white );
    if ( $print ) {
        imagestring($image, 5, 31, $img_height, $text, $black );
    }

    $location = 10;
    for ( $position = 1 ; $position <= strlen($code_string); $position++ ) {
        $cur_size = $location + ( substr($code_string, ($position-1), 1) );
        if ( strtolower($orientation) == "horizontal" )
            imagefilledrectangle( $image, $location*$SizeFactor, 0, $cur_size*$SizeFactor, $img_height, ($position % 2 == 0 ? $white : $black) );
        else
            imagefilledrectangle( $image, 0, $location*$SizeFactor, $img_width, $cur_size*$SizeFactor, ($position % 2 == 0 ? $white : $black) );
        $location = $cur_size;
    }
    
    // Draw barcode to the screen or save in a file
    if ( $filepath=="" ) {
        header ('Content-type: image/png');
        imagepng($image);
        imagedestroy($image);
    } else {
        imagepng($image,$filepath);
        imagedestroy($image);       
    }
}

