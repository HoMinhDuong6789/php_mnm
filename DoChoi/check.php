<?php
	require_once $_SERVER["DOCUMENT_ROOT"] .'/Theme/DoChoi/tempates/include/header.php';
?>
<?php 
	require_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/dbconnect.php'; 
?>
<?php ob_start();
$manpp=$_GET['manpp'];
$ten_npp=$_GET['tennpp'];
?>
<?php
echo '<pre>';
	print_r($_POST);
echo '</pre>';
if(isset($_POST['submit'])){
	if($_POST['khu_vuc']){
	$makv2=$_POST['khu_vuc'];
	header("location:ctnpp.php?manpp=$manpp&tennpp=$ten_npp&makv=$makv2");
	exit();
	}
	else{
	header("location:ctnpp.php?manpp=$manpp&tennpp=$ten_npp");
	exit();
	}
}
?>
<?php ob_end_flush();?>
