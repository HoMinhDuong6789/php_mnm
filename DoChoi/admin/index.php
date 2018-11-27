<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/header.php';?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/checkSession.php';?>
<!-- Dashboard icons -->
<div class="grid_main_l">
	<a href="addNews.php" class="dashboard-module">
		<img src="/Theme/DoChoi/file/images/admin/Crystal_Clear_write.gif" width="64" height="64" alt="" />
		<span>Thêm sản phẩm</span>
	</a>
	
	<a href="addCat.php" class="dashboard-module">
		<img src="/Theme/DoChoi/file/images/admin/Crystal_Clear_files.gif" width="64" height="64" alt="" />
		<span>Thêm loại đồ chơi</span>
	</a>
	<div style="clear: both"></div>
</div> <!-- End .grid_7 -->

<!-- Account overview -->
<div class="grid_main_r">
	<div class="module">
	
			<h2><span>Quản trị hệ thống</span></h2>
			
			<div class="module-body">
				<p class="p">
					<strong>Phần mềm</strong> được viết trên nền tảng PHP&MySQL <br />
					<strong>Thực hiện: </strong>Nhóm 5<br />
					<strong>Email: </strong>5V@gmail.com<br /> 
					<strong>Phone: </strong>0654736472<br />
				</p>
			</div>
	</div>
	<div style="clear:both;"></div>
	<div class="padding-bottom"></div>
</div> <!-- End .grid_5 -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/footer.php' ;?> 
