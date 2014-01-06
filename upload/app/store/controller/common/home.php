<?php

class ControllerCommonHome extends Core\Controller
{

	public function index(){

		if(is('get')){
			p(get('jj'));
		}
		

		exit;

		$this->Set('title_for_layout','Harmony Cart - A simple, flexible and elegant cart.');
	}
}
?>