<?php

	function v_php(){
		if ( compare_version(PHP_VERSION, '5.3.0', '<=')){
			return false;
		}else{
			return true;
		}
	}

	/*
		Verifica se um arquivo ou diretório é gravável
		@Author: 	Team Dev Harmony
		@Paramets 	$file	String
		@Return 	Bool
	*/
	function is_really_writable($datas){
		if ( is_array($datas) ){
			foreach($datas as $data){
				if ( ! is_writable($data)){
					return false;
				}
			}
		}else{
			if ( ! is_writable($datas)){
				return false;
			}
		}
		
		return true;
	}

	/*
		Seta o status do Header
		@Author: 	Team Dev Harmony
		@Paramets 	$code		Number
                    $message	String
		@Return 	Bool
	*/
	function set_status_header($code = 200, $message = ''){
		
		$stati = array(
				200	=> 'OK',
				201	=> 'Created',
				202	=> 'Accepted',
				203	=> 'Non-Authoritative Information',
				204	=> 'No Content',
				205	=> 'Reset Content',
				206	=> 'Partial Content',

				300	=> 'Multiple Choices',
				301	=> 'Moved Permanently',
				302	=> 'Found',
				303	=> 'See Other',
				304	=> 'Not Modified',
				305	=> 'Use Proxy',
				307	=> 'Temporary Redirect',

				400	=> 'Bad Request',
				401	=> 'Unauthorized',
				403	=> 'Forbidden',
				404	=> 'Not Found',
				405	=> 'Method Not Allowed',
				406	=> 'Not Acceptable',
				407	=> 'Proxy Authentication Required',
				408	=> 'Request Timeout',
				409	=> 'Conflict',
				410	=> 'Gone',
				411	=> 'Length Required',
				412	=> 'Precondition Failed',
				413	=> 'Request Entity Too Large',
				414	=> 'Request-URI Too Long',
				415	=> 'Unsupported Media Type',
				416	=> 'Requested Range Not Satisfiable',
				417	=> 'Expectation Failed',
				422	=> 'Unprocessable Entity',

				500	=> 'Internal Server Error',
				501	=> 'Not Implemented',
				502	=> 'Bad Gateway',
				503	=> 'Service Unavailable',
				504	=> 'Gateway Timeout',
				505	=> 'HTTP Version Not Supported'
			);
			
			if ( ! empty($code) && ! is_numeric($code)){
				return false;
			}
			
			if (strpos(php_sapi_name(), 'cgi') === 0){
				header('Status: '.$code.' '.$text, TRUE);
			}
			else{
				header($_SERVER['SERVER_PROTOCOL'] . '/1.1 ' . $code . ' ' . $message . ' !');
			}
			
			return true;
		
	}


	/*
		Coloca a primeira da palavra em maísculo
		@Author		Team Dev Harmony
		@Paramets	$word		String
		            $separator	String
		@Return		String
	*/
	function words_to_upper($Word, $Separator = '_'){
		$Words = explode($Separator, $Word);
		
		$NewWord = '';
		
		foreach($Words as $Word){
			$NewWord .= $Separator . ucfirst($Word);
		}
		
		return substr($NewWord, 1);
	}


	/* Redirect to phpinfo */
	if(!function_exists('info')){
		function info(){
			phpinfo();
		}
	}


	/* Debug array with print_r */
	if(!function_exists('pr')){
		function pr($data){
			echo '<pre>';
			print_r($data);
			echo '</pre>';
		}
	}

	/* Debug array with print_r */
	if(!function_exists('p')){
		function p($data){
			echo '<pre>';
			print_r($data);
			echo '</pre>';
		}
	}


	/* You can choose how to debug print_r or var_dump */
	if(!function_exists('debug')){
		function debug($data,$type = true){
			if($type){
				echo '<pre>';
				var_dump($data);
				echo '</pre>';
			}
			if(!$type){
				echo '<pre>';
				print_r($data);
				echo '</pre>';
			}

		}
	}


if(!function_exists('url')){
	function url($type = 0,$url = ""){	
		return $type ? 'https://'.$url : 'http://'.$url ;
	}
}

if(!function_exists('i')){
	function i(&$var){
		if(isset($var)){
			return true;
		}else{
			return false;
		}
	}
}

if(!function_exists('e')){
	function e(&$var){
		if(empty($var)){
			return true;
		}else{
			return false;
		}
	}
}

if(!function_exists('db_pre')){
	function db_pre($pre){
		//,return 
	}
}