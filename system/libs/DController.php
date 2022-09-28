<?php 

class DController{
	
	protected $load = array();

	public function __construct(){

		/* sử dụng biến trong chính nó */
		$this->load = new Load();
	}
	
}


?>