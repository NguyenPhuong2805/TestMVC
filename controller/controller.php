<?php
	/**
	* 
	*/
	class Controller 
	{
		function __construct()
		{
			
		}
		function doTask(){
			// thuc hien 1 cog viec dc yeu cau

		}

		function render(){
			// hien thi view

		}


	}

	/**
	* 
	*/
	class ControllerProduct extends Controller
	{
		
		

		function doTask(){
			// thuc hien 1 cog viec dc yeu cau

		}

		function render($layout){
			// hien thi view
			$view = new ViewProduct();
			$view->display($layout);


		}
	}
?>