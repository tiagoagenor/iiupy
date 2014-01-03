<?php
namespace Core;

class Controller
{	

	/* Array responsável pelo armazenamento das variáveis do controller */
	private static $SetVar = array();
	
	/*  */
	private static $render = '';


	/**
	 *  Inicia o Controller
	 *  @Author Team Dev Harmony
	 *  @method __construct
	 *  @return Object
	 */
	public function __construct(){
		$this->request = new \Library\Request();
		$this->session = new \Library\Session();

		$this->post = $this->request->post;
		$this->get = $this->request->get;
		return $this;
	}
	
	/**
	 *  Método responsável por armazenar as variáveis do Controller
	 *  @Author Team Dev Harmony
	 *  @method Set
	 *  @param  string $name  Nome da Variável
	 *          array  $value Valor da Variável
	 *  @return Object  
	 */
	public function Set($name, $value=""){
		if ( ! empty($name))
			Controller::$SetVar[$name] = $value;
	}

	/**
	 *  Método responsável por armazenar as variáveis Flash
	 *  @Author Team Dev Harmony
	 *  @method setFlash
	 *  @param  array  $value Valor da Variável
	 *  @return Object  
	 */
	public function setFlash($value){
		$this->session->set_flash($value);
		
		return $this;
	}


	/**
	 *  Método responsável por retornar as variáveis do Controller
	 *  @Author Team Dev Harmony
	 *  @method getVar
	 *  @return Array
	 */
	public static function getVar(){
		return Controller::$SetVar;
	}

	public static function render($setRender){
		Controller::$render = $setRender;
	}

	public static function getRender(){
		return Controller::$render;
	}

	/**
	 *  Carrega o Model
	 *  @Author Team Dev Harmony
	 *  @method loadModel
	 */
	public static function loadModel($model, $error = false){
		$nameModel = STORE_MODEL . $model . '.php';
		
		if(file_exists($nameModel)){
			require VQMod::modCheck($nameModel);
		}elseif($error || !file_exists($nameModel)){
			trigger_error('Model Not Found.');
		}else{
			return false;
		}
	}

	/**
	 *  Carrega o arquivo de linguagem
	 *  @Author Team Dev Harmony
	 *  @method loadLanguage
	 */
	public static function loadLanguage($language,$error = false){
		$nameLanguage = $language . '.php';
		
		if(file_exists($nameLanguage)){
			require VQMod::modCheck($nameLanguage);
		}elseif($error and !file_exists($nameLanguage)){
			trigger_error('Language Not Found.');
		}else{
			return false;
		}
	}
}
