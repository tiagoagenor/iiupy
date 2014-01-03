<?php

/* Carrega o autoload */
//require_once DIR_LIBRARY . "autoload.php";

function __autoload($file){
	$path = strtolower(DIR_SYSTEM.$file.".php");

	if(!file_exists(DIR_SYSTEM.$path.".php")){
		import($path);
	}else{
		exit('Error:' . $path);
	}
}


/* Carrega os arquivos do Core */
use Core\Controller;
use Core\Route;
use Core\Model;
use Library\Security;
use Library\Request;
use Library\Session;


$model = new Core\Model();
$model->arquivo()->asdfad();

/* Captura todos os Request */
$request = new Request();

/* Captura a Rota informatada */
Route::forge(Request::getParams());

/* Chama o arquivo, class e método informado na rota */
$Controller = new Core\Controller();

/* Inicia a Session */
Session::start();

/* Define o layout */
$Controller->render(Route::getPath()."_". Route::getMethod());

/* Carrega o arquivo de Model */
if(Route::getModel())
	import(Route::getModel());

/* Carrega o arquivo de linguagem */
if(Route::getLanguage())
	import(Route::getLanguage());

/* Carrega o arquivo do Controller */
import(Route::getFile());

/* Inicia Método do Controller */
$harmonyCartControllerClassVal = Route::getClass();
$harmonyCartControllerClass = new $harmonyCartControllerClassVal();

$harmonyCartControllerMethodVal = Route::getMethod();
$harmonyCartControllerClass->$harmonyCartControllerMethodVal();

/* Carrega arquivo layout */
import(DIR_CORE . "layout.php");

$HarmonyCartViewLayout = new HarmonyCartViewLayout();

$HarmonyCartViewLayout->execute();