<?php
class Images{
	
	var $fullpath;

	public function __construct(){
		// parent::__construct();
		$this->fullpath[0] = APPPATH . "../assets/upload/images/";
		$this->fullpath[1] = APPPATH . "../assets/upload/brand/";
	}
	
	// public function Images(){
	// 	$this->fullpath[0] = ASSETS . "upload/images/";
	// 	$this->fullpath[1] = ASSETS . "upload/brand/";
	// }

	public function remove_ori_images($name="", $id=0){
		if($name != ""){
			$original_path = $this->fullpath[$id] .'original/';
			if(!unlink($original_path . "/" . $name)){
				echo "Failed to remove " . $name;
			};
		}
	}
	
	public function remove_old_images($name="", $id=0){
		if($name != ""){
			$CI =& get_instance();
			$CI->load->config("images");
			$images = $CI->config->item("images");
	
			foreach($images as $k=>$v){
				if(file_exists($this->fullpath[$id] . $v["name"] . "/" . $name)){
					if(!unlink($this->fullpath[$id] . $v["name"] . "/" . $name)){
						echo "Failed to remove " . $name;
					};
				}
			}
	
			$original_path = $this->fullpath[$id] .'original/';
			if(!unlink($original_path . "/" . $name)){
				echo "Failed to remove " . $name;
			};
		}
	}
	
	public function upload_single_images($data, $id=0){
		$original_path = $this->fullpath[$id] .'original/';
		$type = "";
		switch($data["type"]){
			case "image/gif": //GIF
				$type = ".gif";
				break;
			case "image/jpeg": //JPEG
				$type= ".jpeg";
				break;
			case "image/jpg": //JPEG
				$type= ".jpg";
				break;
			case "image/png": //PNG
				$type = ".png";
				break;
			default:
				break;
		}

		if(!move_uploaded_file($data["tmp_name"], $original_path . $data["name"] . $type)){
			echo "Cannot upload images " . $data["name"];
		}
		else{
			return $data["name"] . $type;
		}
	}
	
	public function copyRenameResizeImages($source, $idArticle, $name, $id=0){
		$name = $idArticle . "-" . url_title($name, "dash", true);
		
		$CI =& get_instance();
     	$CI->load->library('SimpleImage');
		$tesimage = new SimpleImage();

		$original_path = $this->fullpath[$id] .'original/';

		$image_file = $this->_isImageFile($original_path . $source);
		
		$imageType = "";
		switch($image_file["mime"]){
			case "image/gif": //GIF
				$imageType = ".gif";
				break;
			case "image/jpeg": //JPEG
				$imageType= ".jpeg";
				break;
			case "image/jpg": //JPEG
				$imageType= ".jpg";
				break;
			case "image/png": //PNG
				$imageType = ".png";
				break;
			default:
				break;
		}

		$CI->load->config("images");
		$images_config = $CI->config->item("images");

		foreach($images_config as $k=>$v){
			$tesimage->load($original_path . $source);
			$tesimage->resizeToWidth($v["maxWidth"]);
			$tesimage->save($this->fullpath[$id] . $v["name"] . "/" . $name . $imageType);
		}
		
		if(!rename($original_path . $source, $original_path . $name . $imageType)){
				echo "Failed to rename " . $original_path . $source;
		}
		else{
			$session_images = $CI->session->userdata("upImages");
			if($session_images != ""){
				$CI->session->unset_userdata("upImages");
			}
		}
		
		return $name . $imageType;
	}
	
	public function _isImageFile($tmp_name_file){
		return getimagesize($tmp_name_file);
	}

}
