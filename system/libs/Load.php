 <?php 

class Load{
	

	public function __construct(){
		
	}
/* load view thay vì include từng file sử dụng tham số để lấy*/
	public function view($fileName, $data = false){
		if($data == true){
			extract($data);
		}
		include 'app/views/'.$fileName.'.php';
	}

/* load model */
	public function model($fileName){
		include 'app/models/'.$fileName.'.php';
		return new $fileName();
	}
	
}



?>