<?
	/**
	* 
	*/
	class View 
	{
		
		function __construct()		{
			# code...
		}

		function display(){

		}

		function getData(){
			// có thẻ use model đẻ lay data
		}
	}

	/**
	* 
	*/
	class ViewProduct extends View
	{
		

		function getData(){
			// có thẻ use model đẻ lay data
		}
		function display($layout='Product'){
			$model  = new ModelProduct(); 
			$arrProduct = $model->getProduct($_REQUEST["id"]);
			if($layout==""){
				$layout='Product';
			}
			?>
				<? include("Layout/$layout.php");?>
			<?

		}
	}

?>