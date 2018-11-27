<?php
		//khoi tao doi tuong ket noi
			$mysqli = new mysqli('localhost','root','','qldochoi');
			
		//tạo font chữ tiếng việt
			$mysqli -> set_charset("utf8");
			
			
			if(mysqli_connect_errno()){
				echo 'Không thể kết nối đến database' .mysqli_connect_error();
				exit();
			}
?>
