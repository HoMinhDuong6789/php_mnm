<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/JaVi/functions/dbconnect.php';?>
<?php ob_start();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/JaVi/tempates/admin/inc/header2.php';?>
<?php
	if(isset($_SESSION['user_info'])){
		unset($_SESSION['user_info']);
	}
	//Nếu để header trong if thì khi ta gõ logout.php nó sẽ hiển thị trang logout lên
	header("location:login.php");
	exit();
?>
<?php ob_end_flush();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/JaVi/tempates/admin/inc/footer.php' ;?> 
