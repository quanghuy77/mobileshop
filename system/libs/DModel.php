<?php 

class DModel{
	/* tương tác với csdl */
	protected $db = array();

	public function __construct(){
		$connect = 'mysql:dbname=pdo_dienthoai; host=localhost; charset=utf8';
		$user='root';
		$pass='';
		$this->db = new Database($connect,$user,$pass);
		/* dmodel kết nói với database */
	}
	
}


?>