<?php
if ( ! defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Redis config
 */

class Lib_redis{
	
	function __construct() {
        require 'predis/Autoloader.php';
		Predis\Autoloader::register();
    }

    /**
     * Function to set the client host also database index,
	 * Assign db to :
	 *       0 --> cache
	 *       1 --> Analytics
	 *       2 --> player | playlist | ads
	 *       3 --> 
	 *       4 --> ivs/ucast uploader
	 *       5 --> queue api youtube_uploader
	 *       6 --> login | accout | token_api
	 *       7 --> Token
	 *       8 --> 
	 *       9 --> dailymotion | video schedule
	 *       10 --> youtube download error 						* single
	 *       11 --> archiver cloudkilat							* single
	 *       12 --> youtube 									* single
	 *       13 --> foto | todaysphoto | photo_library
	 *       14 --> threesixty | photoslide
	 *       15 --> Error
     */
	  
	function set_client($db=0) {
		try {
			$CI =& get_instance();
			$conf = array(
				"scheme" => "tcp",
				"host" => "127.0.0.1",
				// "host" => 'kompastv-redist01.d5docp.ng.0001.apse1.cache.amazonaws.com',
				"port" => 6379
			);

			if(is_numeric($db)) if($db > 0) $conf['database'] = $db;

			$redis = new Predis\Client($conf);
			
			return $redis;
		}
		catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function add($db=0,$key="",$data="")
	{
		$config = $this->set_client($db);
		$redis = $config->set($data['type'].':'.$key,json_encode($data));
		if($redis){
			return true;
		}
		return false;
	}

	public function add_wp($db=0,$key="",$data="")
	{
		$config = $this->set_client($db);
		$redis = $config->set($key,json_encode($data));
		if($redis){
			return true;
		}
		return false;
	}

}