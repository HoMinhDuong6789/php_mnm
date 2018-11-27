<?php ob_start();
$mansx=$_GET['mansx'];
$tennsx=$_GET['tennsx'];
?>
	<div class="phai2">
		<div class="phai">
			<div class="tieude2">
				<h3>Chi tiết NSX</h3>
			</div>
			<div class="noidung">
				<div class="noidung2">
					<div class="tieude3">
						<h4>Tên NSX: <?php echo $tennsx;?></h4>
					</div>
					<!--Chi tiết của đồ chơi -->
					<div class="KN">
						
							<?php
							//Hiển thị Nhà sản xuất
							$query4="SELECT * FROM nhasx WHERE MaNSX='$mansx'";
							$kq4= $mysqli->query($query4);
							$ar_dc4 = mysqli_fetch_assoc($kq4);
							$ten_nsx=$ar_dc4['TenNSX'];
							$web=$ar_dc4['Web'];
							$sdt=$ar_dc4['Sdt'];
							$dia_chi=$ar_dc4['DiaChi'];
							echo '<span style="font-weight:bold;">Website : </span>' .$web .'<br/>';
							echo '<span style="font-weight:bold;">Số điện thoại : </span>' .$sdt .'<br/>';
							echo '<span style="font-weight:bold;">Địa chỉ : </span>'. $dia_chi .'<br/>';
						?>
					<div class="clr"></div>
					</div>			
					<!--End -->
				</div>
			</div>
		</div>
		
	</div>
	<div class="clr"></div>	
<?php ob_end_flush();?>
    	
   
            
       
