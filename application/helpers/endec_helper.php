<?php
	$encrypt_method = "AES-256-CBC";
	$secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);


	function encrypt($value){
		$encrypt_method = "AES-256-CBC";
		$secret_key = 'This is my secret key';
	    $secret_iv = 'This is my secret iv';
	    $key = hash('sha256', $secret_key);
	    $iv = substr(hash('sha256', $secret_iv), 0, 16);
		$enc = base64_encode(openssl_encrypt($value, $encrypt_method, $key,0,$iv));
		return $enc;
	}

	function decrypt($value){
		$encrypt_method = "AES-256-CBC";
		$secret_key = 'This is my secret key';
	    $secret_iv = 'This is my secret iv';
	    $key = hash('sha256', $secret_key);
	    $iv = substr(hash('sha256', $secret_iv), 0, 16);
		$dec = openssl_decrypt(base64_decode($value), $encrypt_method, $key, 0, $iv);

		return $dec;
	}
?>