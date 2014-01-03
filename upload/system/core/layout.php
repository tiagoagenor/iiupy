<?php

class HarmonyCartViewLayout{

	/**
	 *  Método responsável por carregar um script javascript
	 *  @Author Team Dev Harmony
	 *  @method js
	 *  @param  string $pathJs
	 */
	public static function js($pathJs,$out = false){
		if($out){
			return '<script type="text/javascript" src="'.$pathJs.'.js"></script>' . PHP_EOL;
		}
		if(!$out){
			return '<script type="text/javascript" src="app/store/view/default/js/'.$pathJs.'.js"></script>' . PHP_EOL;	
		}
	}

	/**
	 *  Método responsável por carregar um script stylesheet
	 *  @Author Team Dev Harmony
	 *  @method js
	 *  @param  string $pathJs
	 */
	public static function css($pathCss,$out = false){
		if($out){
			return '<link rel="stylesheet" type="text/css" href="'.$pathCss.'.css">' . PHP_EOL;
		}

		if(!$out){
			return '<link rel="stylesheet" type="text/css" href="app/store/view/default/css/'.$pathCss.'.css">' . PHP_EOL;	
		}
	}

	/**
	 *  Método responsável por incluir um determinado módulo conforme sua posição
	 *  @Author Team Dev Harmony
	 *  @method position
	 *  @param  string $position
	 */
	public function position($position){
		
	}

	/**
	 *  Método responsável por carregar a view
	 *  @Author Team Dev Harmony
	 *  @param  string $position
	 */
	public function content(){
		extract(Core\Controller::getVar());
		$fileName = "app/store/view/default/template/" . Core\Route::getPath() . "/" .Core\Controller::getRender() . ".tpl";
		require_once VQMod::modCheck($fileName);
	}

	/**
	 *  Método responsável por executar o código do layout
	 *  @Author Team Dev Harmony
	 *  @param  string $position
	 */
	public function execute(){
		extract(Core\Controller::getVar());

		$title_for_layout = isset($title_for_layout) ? $title_for_layout : Core\Route::getMethod();
		
		require_once VQMod::modCheck("template/default.php");
	}
}