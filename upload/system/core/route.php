<?php
namespace Core;

class Route
{
	/* Nome da Class */
	private static $Class;

	/* Arquivo da Class */
	private static $File;

	/* Arquivo da Model */
	private static $Model;

	/* Arquivo da Language */
	private static $Language;
	
	/* Método do Controller */
	private static $Method;

	/* path */
	private static $Path;

	/* Argumentos */
	private static $Args;
	

	/**
	 *  Captura o nome da class e o caminho do controller
	 *  @Author Team Dev Harmony
	 *  @method forge
	 *  @param  string $route
	 *          array  $args 
	 *  @return bool
	 */
	public static function forge($parts, $args = array())
	{
		if(count($parts) > 0){
			if(ADMIN_NAME == $parts[0]){

				$path_controller = ADMIN_CONTROLLER;

				$path_model = ADMIN_MODEL;
				$path_language = ADMIN_LANGUAGE;

				array_shift($parts);
			}else{

				$path_controller = STORE_CONTROLLER;

				$path_model = STORE_MODEL;

				$path_language = STORE_LANGUAGE;
			}

			$path = '';
			foreach($parts as $part){
				$path .= ucfirst($part);
				
				if (is_dir($path_controller . $path)){
					$path .= '/';
				}

				array_shift($parts);

				if (is_file($path_controller . $path . '.php')){

					static::$File = $path_controller . $path . '.php';

					if(file_exists($path_language . '/english/' . $path . '.php')){
						static::$Language = $path_language . '/english/' . $path . '.php';
					}else{
						static::$Language = false;
					}

					if(file_exists($path_model . $path . '.php')){
						static::$Model = $path_model . $path . '.php';
					}else{
						static::$Model = false;
					}

					static::$Class = 'Controller' . preg_replace('/[^a-zA-Z0-9]/', '', $path);

					break;
				}

			}
		}else{
			$parts = array();
			
			static::$File 		= STORE_CONTROLLER . 'common/home.php';

			static::$Language 	= STORE_LANGUAGE . 'common/home.php';
			static::$Model 		= STORE_MODEL . 'common/home.php';

			if(!file_exists(static::$Language)){
				static::$Language = false;
			}

			if(!file_exists(static::$Model)){
				static::$Model = false;
			}

			static::$Class 		= 'ControllerCommonHome';
			$path = "common";
		}
		static::$Path = $path;

		if($parts){
			$first_method = current($parts);

			if(!empty($first_method)){
				static::$Method = $first_method;
			}else{
				static::$Method = 'index';	
			}
		}else{
			static::$Method = 'index';
		}


	}
	
	/**
	 *  Captura o nome do arquivo do controller
	 *  @Author Team Dev Harmony
	 *  @method getFile
	 *  @return string
	 */
	public static function getFile(){
		return static::$File;
	}

	/**
	 *  Captura o nome da Class
	 *  @Author Team Dev Harmony
	 *  @return string
	 */
	public static function getClass(){
		return static::$Class;
	}

	/**
	 *  Captura o nome do Método
	 *  @Author Team Dev Harmony
	 *  @return string
	 */
	public static function getMethod(){
		return static::$Method;
	}

	/**
	 *  Define o Path
	 *  @Author Team Dev Harmony
	 *  @return string
	 */
	public static function setPath($setPath){
		static::$Path = $setPath;
	}
	
	/**
	 *  Captura o Path
	 *  @Author Team Dev Harmony
	 *  @return string
	 */
	public static function getPath(){
		return static::$Path;
	}

	/**
	 *  Captura o nome do arquivo da linguagem
	 *  @Author Team Dev Harmony
	 *  @return string
	 */
	public static function getLanguage(){
		return static::$Language;
	}

	/**
	 *  Define o nome do arquivo de linguagem
	 *  @Author Team Dev Harmony
	 *  @return string
	 */
	public static function setLanguage($setLanguage){
		static::$Language = $setLanguage;
	}

	/**
	 *  Captura o nome do arquivo model
	 *  @Author Team Dev Harmony
	 *  @return string
	 */
	public static function getModel(){
		return static::$Model;
	}

	/**
	 *  Define o nome do arquivo do model
	 *  @Author Team Dev Harmony
	 *  @return string
	 */
	public static function setModel($setModel){
		static::$Model = $setModel;
	}

	public static function connect($router,$default){

	}

	public static function redirect($router,$parameters){

	}
	
}