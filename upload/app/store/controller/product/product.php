<?php

use Core\Controller;

class ControllerProductProduct extends Controller
{
	public function index(){

		pr($this->session->get_flash());
		//echo 'Chegou no Controller Product/Product';
	}
}