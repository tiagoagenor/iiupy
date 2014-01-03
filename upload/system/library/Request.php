<?php
namespace Library;

class Request
{

	/* Armaneza os dados das requisições via Post */
	public $post;
	
	/* Armaneza os dados das requisições via Get */
	public $get;
	
	/* Armaneza os dados das requisições via Request */
	public $request;
	
	/* Armaneza os dados dos Cookies */
	public $cookie;
	
	/* Armaneza os dados das requisições via File */
	public $files;
	
	/* Armaneza os dados do Server */
	public $server;
	
	/* Parâmetros da URL */
	private static $params = array();
	
	/* Métodos de Requisições */
	protected static $method = array('POST', 'GET', 'PUT');

	/**
	 *  Métdo responsável pelo armazenamento dos dados enviados por requisição
	 *  @Author Team Dev Harmony
	 *  @method __construct
	 *  @return object  
	 */
	public function __construct()
	{
		$this->post = $_POST;
		$this->get     = $_GET;
		$this->request = $_REQUEST;
		$this->cookie  = $_COOKIE;
		$this->files   = $_FILES;
		$this->server  = $_SERVER;

		if(isset($this->get['router'])){
			static::$params = explode('/', $this->get['router']);
			unset($this->get['router']);
		}
		
		return $this;
	}

	/**
	 *  Métdo responsável por capturar os parâmetros
	 *  @Author Team Dev Harmony
	 *  @method getParams
	 *  @return string  
	 */
	public static function getParams(){
		return static::$params;
	}


	/**
	 *  Verifica se é GET ou POST
	 *  @Author Team Dev Harmony
	 *  @method isRequest
	 *  @return bool
	 */
	public static function isRequest($type){
		$type = strtoupper($type);

		if(in_array($type,static::$method)){
			if($type == static::$server['REQUEST_METHOD']){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

}