<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WEB</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php ini_set('display_errors', '1'); ?>
	<?php include("controller/controller.php"); ?>
	<?php include("view/view.php"); ?>
	<?php include("model/model.php"); ?>
	<?php include("modules/sql/connect.php"); ?> 

	<div id="wrapper">
		<!-- start header -->
		<?php 
			include("modules/header.php");
		?>
		<!-- end header -->
		<div id="main">
			<?php 
			//include("controller/controller.php");
			?>
			<?
			$page = $_GET["page"];
			switch ($page) {
				case 'sanpham':
					$product = new ControllerProduct();
					$product -> render($_REQUEST['layout']);
					//include("modules/frontend/gioithieu.php");
					break;
				case 'sanpham':
					include("modules/frontend/sanpham.php");
					break;
				case 'lienhe':
					include("modules/frontend/lienhe.php");
					break;
				default:
					include("modules/frontend/trangchu.php");
					break;
				}
			?>
			
		</div>
	</div>
</body>
</html>