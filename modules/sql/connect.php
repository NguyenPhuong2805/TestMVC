<?
	$tenmaychu ="localhost";
	$taikhoan ="root";
	$matkhau = "12345678";
	$csdl ="testmvc";
	
	$con = mysql_connect($tenmaychu,$taikhoan,$matkhau);
	
	mysql_select_db($csdl,$con);
?>