<?php
namespace Core;


// em contrução
class Model
{
	private $paste = "";
	private $file = "";
	private $method = "";
	public function __call($name, $arguments){

		if(empty($this->paste)){
			$this->paste = $name;
		}		
		
		if(!empty($this->paste)){
			$this->file = $name;
		}

		if(!empty($this->file)){
			$this->method = $name;
		}

		return $this;
    }
    private function clean(){
    	$this->paste = "";
    	$this->file = "";
    	$this->method = "";
    }


    public function method(){

    }
}