<?php ob_start();
if(isset($_GET['matuoi']) && isset($_GET['magt']) ){
$matuoi=$_GET['matuoi'];
$magt=$_GET['magt'];
}
?>
	<div class="phai2">
		<div class="phai">
			<!--TITTLE -->
			<div class="tieude2">
					<?php
						//Lấy tuổi và giới tính
						$select1="SELECT *FROM tuoi WHERE MaTuoi='$matuoi'";
							$result= $mysqli->query($select1);
							$ar_tuoi = mysqli_fetch_assoc($result);
							$tuoi=$ar_tuoi['Tuoi'];
						$select2="SELECT *FROM gioitinh WHERE MaGT='$magt'";
							$result2= $mysqli->query($select2);
							$ar_gt= mysqli_fetch_assoc($result2);
							$gt=$ar_gt['GioiTinh'];
						
					?>
				<h3>Tuổi: <?php echo $tuoi ?> và Giới tính: <?php echo $gt;?></h3>
			</div>
			<!--LOẠI ĐỒ CHƠI -->
			<div class="noidung">
				<div class="noidung2">
					<h4>Loại đồ chơi</h4>
					<ul>
						<?php
						//Lấy mã loại đồ chơi theo tuổi vs giới tính
							$query="SELECT *
									FROM yeucau1 LEFT OUTER JOIN yeucau2 
									ON yeucau1.MaLDC=yeucau2.MaLDC
									WHERE MaTuoi='$matuoi' AND MaGT='$magt'";
							$kq= $mysqli->query($query);
							while($ar_ldc = mysqli_fetch_assoc($kq)){
								$maldc=$ar_ldc['MaLDC'];
								//Lấy tên loại đồ chơi
								$query2="SELECT * FROM loaidochoi WHERE MaLDC='$maldc'";
								$kq2= $mysqli->query($query2);
								while($ar_ldc2 = mysqli_fetch_assoc($kq2)){
								$ten_ldc=$ar_ldc2['TenLDC'];
								$dinh_nghia=$ar_ldc2['DinhNghia'];
						?>
						<li class=""><a href="kinang.php?maldc=<?php echo $maldc;?>&magt=<?php echo $magt;?>&matuoi=<?php echo $matuoi?>&ten_ldc=<?php echo $ten_ldc?>"><?php echo $ten_ldc;?></a></li>
						<?php
								}
							}
						?>
					</ul>
					<div class="clr"></div>
					<!--End -->	
				</div>
			</div>			
		</div>	
		
		
	</div>
		<div class="clr"></div>	
	

<?php ob_end_flush();?>
    	
   
            
       