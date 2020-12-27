<?php

use Google\Cloud\Storage\StorageClient;

class UploadGS{

	public function __construct(){
		// parent::__construct();

		$this->bucketName = "eventstack-storage";
		
		$this->privateKeyFileContent = '{
		  "type": "service_account",
		  "project_id": "fun-project-277315",
		  "private_key_id": "c5894677754a72079f7a291a4417a4fa4b2447f3",
		  "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQCgcCqhuSJeUbq+\nkhSJDb8Uzt3x0mUYIaWssRIHi8L9NWbJaDNFM2+ChwR4fGROhWS3h6Hs2oA2l21D\n/Z5zT4xpTR58ZoqnU1Ay7LR+/Lklh8hOqeXyfj/pHvkvlSxBYooBvnhsCN89jSr/\n5wTZ7FuC6IZz9xH79vW2kd+bAcMu//0qWstZ05eMh9gauy4kuMiY5ckHAaqhxRLo\nSH04dqFSTXkILLc6+KU8R9yaY1RYRVr4XZ+qFw2/OY8J16wsDG+36GUysJIVsRMv\nSX06dqYW6/A5M4ktDjbYgVYpxOG7d5SRd4RZeKgUFU9Vrw7T7fG19WhCBGrLv01E\nnxQ3xil3AgMBAAECggEABquNz4THkwL0L/Fu0naJ19mfN0CMshYkByv4GJbiQm4H\n70kFE1Qcx2Ee+ctiIt7qMwnRMkGwoZRmFzTiHjUpHJpM3Csp3zmtfzssEzjP5xQ1\nawp75DsEzoevyx9OjwwDuigrEC1w6o7bQiGz/UNrAo7xmBH7jhgpsFocNnDk+9KD\n2cqBe5/Kcbbvb7npKzucmf3BF+WUasVQx6qHM9uPEOXQl/PFQX9eC0K74+WFojeq\nTxhMbSVYgciyHNw9eGvwUj7Fyo45pvWghk9tPlNpTKhxNNf+a17x0GchRldlb0zl\nxj0vvDJSF1QW0XSMUq8frpRgC972neZeEmslNIDj8QKBgQDV17AbA1K1ofbjs0P4\nKtKS0fgtst33sHMXDAdYbwcsr9Js4uS+iSqEo1HEr8qQeENKHm6zrbOEj29IW714\nVk9OpeXhlqYVqugkkPrZ2PuD16tBb74bMPcP2nJUvB5FDP1AZuyLgwyxwHoAnnXX\n+j7pdAXnXQEdDvUV4EH08yurzQKBgQDAET1UP5Vr1AMpBS+YNbUeIyjyraXkpN1l\nD97InFPO6k5PMJWXXJ9BPD9FdRTE5ta7198unzSXHIKQ0nYvo38MUew2MJ2qOB26\nsps5K60nYHmSCm0rBavOK8IN4VeVmca1VexQNmCZB4wysmW1My6nQn5yRuIfXf1E\nyQiIuFlOUwKBgQDUkRTzpTgAaUG8UqSL+jVb0PB8rMLMxk+BZ2md1LAzEYuAxYJQ\njJUBSD+t3njjZ0isUtgEL/S1HsemC9up1VH8ghijSFdMTpl4T82r428RPb90ypkU\n+nV9As6HwH/ub90GuckFXX2u6//awamuyYjkE3sS43aJ5iZmWof18AtHOQKBgQCu\nPXWDvoMRZS7QwdGhped/RapaLco3mJD4o+MZ3yfwqIMOOCcdP3uCNOO5YTPMRRY9\nJuNjai7Nf6G7PBLXuN0DEjbWGliOGYZu3qUOwl69QDpJkIfk5aosyWmsKefI4c5w\np1hQlGQhr8UyIMFAFwSV3C7WARQWHLAs/KtvTL5H3QKBgQCZ+MDz7yWfyW3Q4zkI\n95u93RYgrTYpcauy0snE7MrPDRIV9UYV0iYekrCDMum/4v25BPuGkWCr/YbX8mzb\nylueDI3TYYyMiUUb94d/eqqq1nRaV9glLLh8ppFsHiq5eYxNARScZemY5W4LDwUn\nQvXWYXOcxkkKz2nZE5YJcA6CzA==\n-----END PRIVATE KEY-----\n",
		  "client_email": "eventstack-storage@fun-project-277315.iam.gserviceaccount.com",
		  "client_id": "104736006694591784401",
		  "auth_uri": "https://accounts.google.com/o/oauth2/auth",
		  "token_uri": "https://oauth2.googleapis.com/token",
		  "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
		  "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/eventstack-storage%40fun-project-277315.iam.gserviceaccount.com"
		}';

	}

	public function uploadFile($fileContent, $cloudPath) {
	    // $this->privateKeyFileContent = $GLOBALS['privateKeyFileContent'];
	    // connect to Google Cloud Storage using private key as authentication
	    try {
	        $storage = new StorageClient([
	            'keyFile' => json_decode($this->privateKeyFileContent, true)
	        ]);
	    } catch (Exception $e) {
	        // maybe invalid private key ?
	        print $e;
	        return false;
	    }
	 
	    // set which bucket to work in
	    $bucket = $storage->bucket($this->bucketName);
	 
	    // upload/replace file 
	    $storageObject = $bucket->upload(
	            $fileContent,
	            ['name' => $cloudPath, 'enable_cache' => false]
	            // if $cloudPath is existed then will be overwrite without confirmation
	            // NOTE: 
	            // a. do not put prefix '/', '/' is a separate folder name  !!
	            // b. private key MUST have 'storage.objects.delete' permission if want to replace file !
	    );
	 
	    // is it succeed ?
	    return $storageObject != null;
	}

	public function uploadFileNew($fileContent, $cloudPath) {
	    // $this->privateKeyFileContent = $GLOBALS['privateKeyFileContent'];
	    // connect to Google Cloud Storage using private key as authentication
	    try {
	        $storage = new StorageClient([
	            'keyFile' => json_decode($this->privateKeyFileContent, true)
	        ]);
	    } catch (Exception $e) {
	        // maybe invalid private key ?
	        print $e;
	        return false;
	    }
	 
		$storage->registerStreamWrapper();
		$text = "Contained text: ".date("Y-m-d H:i:s")."\n";

		$options = ['gs' => ['acl' => 'public-read']];
		$context = stream_context_create($options);
		$filepath = "gs://".$this->bucketName."/test.txt";
		$test = file_put_contents($filepath, $text, 0, $context);

		print_r($test);

	}

	public function deleteFile($cloudPath) {
	    // $this->privateKeyFileContent = $GLOBALS['privateKeyFileContent'];
	    // connect to Google Cloud Storage using private key as authentication
	    try {
	        $storage = new StorageClient([
	            'keyFile' => json_decode($this->privateKeyFileContent, true)
	        ]);
	    } catch (Exception $e) {
	        // maybe invalid private key ?
	        print $e;
	        return false;
	    }
	 
	    // set which bucket to work in
	    try {
	    	$bucket = $storage->bucket($this->bucketName);
		    $object = $bucket->object($cloudPath);
		    return $object->delete();
	    } catch(Exception $e){
	    	
		    return "error";
	    }
	    
	}
	 
	public function getFileInfo($cloudPath) {
	    // $this->privateKeyFileContent = $GLOBALS['privateKeyFileContent'];
	    // connect to Google Cloud Storage using private key as authentication
	    try {
	        $storage = new StorageClient([
	            'keyFile' => json_decode($this->privateKeyFileContent, true)
	        ]);
	    } catch (Exception $e) {
	        // maybe invalid private key ?
	        print $e;
	        return false;
	    }
	 
	    // set which bucket to work in
	    $bucket = $storage->bucket($this->bucketName);
	    $object = $bucket->object($cloudPath);
	    return $object->info();
	}

	public function getFile($cloudPath) {
	    // $this->privateKeyFileContent = $GLOBALS['privateKeyFileContent'];
	    // connect to Google Cloud Storage using private key as authentication
	    try {
	        $storage = new StorageClient([
	            'keyFile' => json_decode($this->privateKeyFileContent, true)
	        ]);
	    } catch (Exception $e) {
	        // maybe invalid private key ?
	        print $e;
	        return false;
	    }
	 	
	 	$options = [
		    'gs' => [
		        'enable_cache' => true,
		        'enable_optimistic_cache' => true,
		        'read_cache_expiry_seconds' => 300,
		    ]
		];
		$context = stream_context_create($options);


	    $storage->registerStreamWrapper();
	    $contents = file_get_contents('gs://'.$this->bucketName.'/'.$cloudPath.'');
	    return $contents;
	}

	//this (listFiles) method not used in this example but you may use according to your need 
	public function listFiles($bucket, $directory = null) {
	 
	    if ($directory == null) {
	        // list all files
	        $objects = $bucket->objects();
	    } else {
	        // list all files within a directory (sub-directory)
	        $options = array('prefix' => $directory);
	        $objects = $bucket->objects($options);
	    }
	 
	    foreach ($objects as $object) {
	        print $object->name() . PHP_EOL;
	        // NOTE: if $object->name() ends with '/' then it is a 'folder'
	    }
	}
	

}
