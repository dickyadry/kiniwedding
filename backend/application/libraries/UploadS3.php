<?php
class UploadS3{

	public function __construct(){
		// parent::__construct();

		$this->key = '';

	}

	public function upload_s3($source, $path){
		
		$key = $this->key.$path;
		$result = s3()->putObject([
			'Bucket' => 'media.kompas.tv',
			'Key'    => $key,
			'ACL'    		=> 'public-read',
			'SourceFile' => $source
		]);
		return $result;

	}
	

}
