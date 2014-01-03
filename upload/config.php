<?php

	define('v', 0.1);

	/* Store Data Base */
	define('STORE_DB_HOST', 'localhost');
	define('STORE_DB_USER', 'root');
	define('STORE_DB_PASSWORD', '');
	define('STORE_DB_NAME', 'teste_loja');
	define('STORE_DB_PREFIX', 'iy_');

	/* admin Data Base */
	define('ADMIN_DB_HOST', 'localhost');
	define('ADMIN_DB_USER', 'root');
	define('ADMIN_DB_PASSWORD', '');
	define('ADMIN_DB_NAME', 'teste_loja');
	define('ADMIN_DB_PREFIX', 'iy_');

	/* Directory name admin */
	define('ADMIN_DIRECTORY_NAME', 'admin');
	/* Path Store */
	define('STORE_PATH', 'localhost/github/iyupy/upload/');

	
	define('DIR_ROOT', realpath(__DIR__) . '/');
	require_once VQMod::modCheck(DIR_ROOT . "system/paths.php");