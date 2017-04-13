<?
	/**
	* 
	*/
	class Model
	{
		
		function __construct()
		{
			# code...
		}
	}

	/**
	* 
	*/
	class ModelProduct extends Model
	{
		
		
		/**
		*trả về  một mang chứa các thuoc tính sp có name và img_url
		**/	
		function getProduct($id){

			global $sql;

			$sql ="SELECT * FROM sanpham WHERE idsp = $id ";
  			
  			$kq = mysql_query($sql);
  			if ($kq) {
  				$sp = mysql_fetch_array($kq);	
  			}else
  				$sp=array();
  			
  			return $sp;
		}
	}
?>