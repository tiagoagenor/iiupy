<?php


	/* Folder Application */
	if(!defined('DIR_APP'))
		define('DIR_APP', DIR_ROOT . 'app/');
	
	/* Folder System */
	if(!defined('DIR_SYSTEM'))
		define('DIR_SYSTEM', DIR_ROOT.'system/');

	/* Folder Image */
	if(!defined('DIR_IMAGE'))
		define('DIR_IMAGE', DIR_ROOT.'image/');
	
	/* Folder Download */
	if(!defined('DIR_DOWNLOAD'))
		define('DIR_DOWNLOAD', DIR_ROOT.'download/');

	/* Folder System */
	if(!defined('DIR_LIBRARY'))
		define('DIR_LIBRARY', DIR_SYSTEM . 'library/');
	
	/* Folder Core */
	if(!defined('DIR_CORE'))
		define('DIR_CORE', DIR_SYSTEM.'core/');

	/* Folder Cache */
	if(!defined('DIR_CACHE'))
		define('DIR_CACHE', DIR_SYSTEM . 'cache/');
	
	/* Folder Log */
	if(!defined('DIR_LOG'))
		define('DIR_LOG', DIR_SYSTEM . 'logs/');

	/* Folder Config */
	if(!defined('DIR_CONFIG'))
		define('DIR_CONFIG', DIR_SYSTEM . 'config/');

	
	/* Cache */
	if(!defined('CACHE_CACHING'))
		define('CACHE_CACHING', true);
		
	if(!defined('CACHE_LIFE_TIME'))
		define('CACHE_LIFE_TIME', 3600);
	
	/* Cookie */
	if(!defined('COOKIE_EXPIRATION'))
		define('COOKIE_EXPIRATION', 0);
		
	if(!defined('COOKIE_PATH'))
		define('COOKIE_PATH', '/');
		
	if(!defined('COOKIE_DOMAIN'))
		define('COOKIE_DOMAIN', false);


	/*
		Settings Admin
	*/
	
	/* Folder Application */
	if(!defined('ADMIN_CONTROLLER'))
		define('ADMIN_CONTROLLER', DIR_ROOT.'app/admin/controller/');

	/* Folder Admin Language */
	if(!defined('ADMIN_LANGUAGE'))
		define('ADMIN_LANGUAGE', DIR_ROOT.'app/admin/language/');

	/* Folder Store Model */
	if(!defined('ADMIN_MODEL'))
		define('ADMIN_MODEL', DIR_ROOT . 'app/admin/model/');

	/*
		Settings Store
	*/

	/* Folder Application */
	if(!defined('STORE_CONTROLLER'))
		define('STORE_CONTROLLER', DIR_ROOT.'app/store/controller/');

	/* Folder Store Language */
	if(!defined('STORE_LANGUAGE'))
		define('STORE_LANGUAGE', DIR_ROOT . 'app/store/language/');

	/* Folder Store Model */
	if(!defined('STORE_MODEL'))
		define('STORE_MODEL', DIR_ROOT . 'app/store/model/');

	/* Folder Store Theme */
	if(!defined('STORE_THEME'))
		define('STORE_THEME', DIR_ROOT . 'app/store/theme/');

	/* Store path Image */
	if(!defined('STORE_PATH_IMAGE'))
		define('STORE_PATH_IMAGE',  STORE_PATH . 'image/');