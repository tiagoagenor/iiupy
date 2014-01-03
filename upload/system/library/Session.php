<?php
namespace Library;

Class Session
{
	/**
	 *  Inicia a Session
	 *  @Author Team Dev Harmony
	 *  @method start
	 */
	public static function start(){
		session_start();
	}

	/**
	 *  Define valores para Session
	 *  @Author Team Dev Harmony
	 *  @method set
	 *  @return obj
	 */
	public function set($key = "",$value = ""){
		$_SESSION[$key] = $value;
	}

	/**
	 *  Captura valors de uma Session
	 *  @Author Team Dev Harmony
	 *  @method get
	 *  @return Mixed (String, Int, Bool Or Array)
	 */
	public function get($key = false){
		if(!$key){
			return false;
		}
		return isset($_SESSION[$key]) ? $_SESSION[$key] : '';	
	}

	/**
	 *  Deleta uma Session
	 *  @Author Team Dev Harmony
	 *  @method delete
	 *  @return bool
	 */
	public function delete($key = false){
		if(!$key){
			return false;
		}
		if(isset($_SESSION[$key])){
			unset($_SESSION[$key]);
			return true;
		}
	}

	/**
	 *  Define um valor para Session Flash
	 *  @Author Team Dev Harmony
	 *  @method set_flash
	 *  @return bool
	 */
	public function set_flash($value){
		$this->set('HarmonySetFlash',$value);
	}
	
	/**
	 *  Captura o valor da Session Flash
	 *  @Author Team Dev Harmony
	 *  @method get_flash
	 *  @return bool
	 */
	public function get_flash(){
		$return = $this->get('HarmonySetFlash');
		$this->delete('HarmonySetFlash');
		return !empty($return) ? $return : '';
	}

	/**
	 *  Destroi todas as Sessions
	 *  @Author Team Dev Harmony
	 *  @method destroy
	 *  @return obj
	 */
	public function destroy(){
		unset($_SESSION);
	}

	/**
	 *  Retorna o Session ID
	 *  @Author Team Dev Harmony
	 *  @method key
	 *  @return int
	 */
	public function key(){
		return session_id();
	}
}