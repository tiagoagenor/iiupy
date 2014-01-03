<?php
namespace Core;

class HarmonyCartViewLayoutv{

	/**
	 *  Método responsável por carregar um script javascript
	 *  @Author Team Dev Harmony
	 *  @method js
	 *  @param  string $pathJs
	 */
	public static function js($pathJs){
		echo '<script type="text/javascript" src="'.$pathJs.'.js"></script>' . PHP_EOL;
	}

	/**
	 *  Método responsável por carregar um script stylesheet
	 *  @Author Team Dev Harmony
	 *  @method js
	 *  @param  string $pathJs
	 */
	public static function css($pathCss){
		echo '<link rel="stylesheet" type="text/css" href="'.$pathCss.'.css">' . PHP_EOL;
	}

	/**
	 *  Método responsável por incluir um determinado módulo conforme sua posição
	 *  @Author Team Dev Harmony
	 *  @method position
	 *  @param  string $position
	 */
	public function position($position){
		require_once VQMod::modCheck("modulos.php");
		$nova = new modulos();
		$nova->findModulos($position);
	}

	/**
	 *  Método responsável por carregar a view
	 *  @Author Team Dev Harmony
	 *  @param  string $position
	 */
	public function content(){
		extract(HarmonyCartVar::getVar());
		require_once VQMod::modCheck("view.php");
	}

	/**
	 *  Método responsável por executar o código do layout
	 *  @Author Team Dev Harmony
	 *  @param  string $position
	 */
	public function execute(){
		extract(HarmonyCartVar::getVar());
		require_once VQMod::modCheck("layout.php");
	}
}
