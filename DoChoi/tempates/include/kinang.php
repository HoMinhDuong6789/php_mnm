<?php ob_start();
if(isset($_GET['maldc']) && isset($_GET['matuoi']) && isset($_GET['magt']) && isset($_GET['ten_ldc'])){
$maldc=$_GET['maldc'];
$matuoi=$_GET['matuoi'];
$magt=$_GET['magt'];
$tenldc2=$_GET['ten_ldc'];
}
?>
	<div class="phai2">
		<div class="phai">
			<div class="tieude4">
				<div class="tren">
					<p>Loại đồ chơi</p>
				</div>
				<h4><?php echo $tenldc2;?></h4>
			</div>
			<div class="noidung">
				
				<div class="noidung2">
					<div class="dinhnghia">
						<?php
							$select="SELECT * FROM loaidochoi WHERE MaLDC='$maldc'";
							$result= $mysqli->query($select);
							$ar_ldc = mysqli_fetch_assoc($result);
							$dinh_nghia=$ar_ldc['DinhNghia'];
						?>
					<p><span style="text-decoration:underline;">Định nghĩa</span> : <?php echo $dinh_nghia?></p>
						
					</div>
					<!--Kĩ Năng -->
					<div class="KN">
						<h4>Kĩ năng </h4>
						<ul>
							<?php
								$query="SELECT * FROM phanloai WHERE MaLDC='$maldc'";
								$kq= $mysqli->query($query);
								while($ar_kn = mysqli_fetch_assoc($kq)){
									$makn=$ar_kn['MaKN'];
									$query2="SELECT * FROM kinang WHERE MaKN='$makn'";
									$kq2= $mysqli->query($query2);
									while($ar_kn2 = mysqli_fetch_assoc($kq2)){
										$makn=$ar_kn2['MaKN'];
										$ten_kn=$ar_kn2['TenKN'];
									
							?>
							<li class=""><a href="dochoi.php?makn=<?php echo $makn;?>&tenkn=<?php echo $ten_kn?>&maldc=<?php echo $maldc;?>"><?php echo $ten_kn;?></a></li>
							<?php
									}
								}
							?>
						</ul>
						<div class="clr"></div>
					</div>	
					<div class="ldc_khac">
					<h4>Loại đồ chơi khác</h4>
					<ul>
					<?php
					
						//Lấy mã ldc khác
						$query3="SELECT *
						FROM yeucau1 LEFT OUTER JOIN yeucau2 
						ON yeucau1.MaLDC=yeucau2.MaLDC
						WHERE MaTuoi='$matuoi' AND MaGT='$magt' AND yeucau1.MaLDC!='$maldc'";
						$kq3= $mysqli->query($query3);
						while($ar_kn3 = mysqli_fetch_assoc($kq3)){
							$maldc2=$ar_kn3['MaLDC'];
							
							//Hiển thị tên loại đồ chơi khác
							
							$query4="SELECT * FROM loaidochoi
							WHERE MaLDC='$maldc2'";
							$kq4= $mysqli->query($query4);
							while($ar_kn4 = mysqli_fetch_assoc($kq4)){
								$tenldc2=$ar_kn4['TenLDC'];
								
					?>
					<li><a href="kinang.php?maldc=<?php echo $maldc2;?>&magt=<?php echo $magt;?>&matuoi=<?php echo $matuoi?>&ten_ldc=<?php echo $tenldc2?>"><?php echo $tenldc2?></a></li>
					<?php
								}
							}
					?>
					</ul>
				</div>
				</div>
			</div>
			<!--End -->
		</div>
		<div class="background-bottom2">
		</div>
	</div>
	<div class="clr"></div>	
<?php ob_end_flush();?>
    	
   
            
       