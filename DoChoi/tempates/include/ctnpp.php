<?php ob_start();
$manpp=$_GET['manpp'];
$tennpp=$_GET['tennpp'];

?>
	<div class="phai2">
		<div class="phai">
			<div class="tieude2">
				<h3>Chi tiết NPP</h3>
			</div>
			<div class="noidung">
				<div class="noidung2">
					<div class="tieude3">
						<h4>Tên NPP: <?php echo $tennpp;?></h4>
					</div>
					<!--Chi tiết của đồ chơi -->
					<div class="KN">
					<?php
					//Hiển thị Nhà phân phối theo nhà sản xuất
					$query1="SELECT * FROM nhapp WHERE MaNPP='$manpp'";
					$kq1= $mysqli->query($query1);
					$ar_npp = mysqli_fetch_assoc($kq1);
					$ten_npp=$ar_npp['TenNPP'];
					$web=$ar_npp['Web'];
					$sdt=$ar_npp['Sdt'];
					$dia_chi=$ar_npp['DiaChi'];
					echo '<span style="font-weight:bold;">Website : </span>' .$web .'<br/>';
					echo '<span style="font-weight:bold;">Số điện thoại : </span>' .$sdt .'<br/>';
					echo '<span style="font-weight:bold;">Địa chỉ : </span>'. $dia_chi .'<br/>';
					?>
					<div class="clr"></div>
					</div>			
					<!--End -->
				</div>
				<!--Chi tiết NHÀ BÁN LẺ-->
				<div class="noidung3 noidung2">
					<div class="tieude3">
						<h4>Đại lý bán lẻ</h4>
					</div>
					<form method="post" action="check.php?manpp=<?php echo $manpp;?>&tennpp=<?php echo $ten_npp;?>" name="">
					<p>
						<span style="color:#fe8a22;font-weight:bold; font-size: 18px;">Khu vực :</span>
						<select class="" name="khu_vuc">
						<option value="">[Chọn] </option>
						<?php
							$query= "SELECT * FROM khuvuc ";
							$kq= $mysqli->query($query);
							while($ar_kv=mysqli_fetch_assoc($kq)){
								$makv=$ar_kv['MaKV'];
								$tenkv=$ar_kv['TenKV'];
								if($_POST['tenkv']==$tenkv){
									$selected= ' Selected="Selected" ';
								}
								else
									$selected='';	
						?>
							<option <?php echo $selected;?> value="<?php echo $makv;?>"><?php echo $tenkv;?> </option>
							<?php
								}
							?>
						</select>
						<input class="submit-green" name="submit" type="submit" value="Tìm" /> 
					</p>
					 </form>
					<div class="dc nha_bl">
						<?php
						//Nếu đã chọn khu vực thì hiển thị nhà bán lẻ theo khu vực
						if(isset($_GET['makv'])){
						$makv2=$_GET['makv'];
						//Hiển thị Nhà bán lẻ theo nhà phân phối
						//Lấy mã nhà bán lẽ
						$query2="SELECT * FROM banle WHERE MaNPP='$manpp'";
						$kq2= $mysqli->query($query2);
						$ar_nbl = mysqli_fetch_assoc($kq2);
						
						$ma_nbl=$ar_nbl['MaNBL'];
						//Hiển thị tên,...nhà bán lẻ
						$query6="SELECT * FROM nhabl WHERE MaNBL='$ma_nbl' AND MaKV='$makv2'";
						$kq6= $mysqli->query($query6);
						$ar_nbl2 = mysqli_fetch_assoc($kq6);
							if($ar_nbl2!=0){
							$ten_nbl=$ar_nbl2['TenNBL'];
							$web_nbl=$ar_nbl2['Web'];
							$sdt_nbl=$ar_nbl2['Sdt'];
							$dia_chi_nbl=$ar_nbl2['DiaChi'];
					?>
					<p> <span style="font-weight:bold;">Tên :</span> <?php echo $ten_nbl?> </p>
					<p> <span style="font-weight:bold;">Web :</span>  <?php echo $web_nbl?> </p>
					<p> <span style="font-weight:bold;">Sdt :</span>  <?php echo $sdt_nbl?> </p>
					<p> <span style="font-weight:bold;">Địa chỉ :</span>  <?php echo $dia_chi_nbl?> </p>
					
					<?php
							}
							else
								echo "<span style=' color:red;font-weight:bold;font-size: 18px;'>Không có nhà bán lẻ nào ở khu vực này</span>";
						
					}
					//Ngược lại thì in ra "Chọn lại"
						else
							echo "<span style=' color:red;font-weight:bold;font-size: 18px;'>Mời bạn chọn khu vực!</span>";
					?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="clr"></div>	
<?php ob_end_flush();?>
    	
   
            
       