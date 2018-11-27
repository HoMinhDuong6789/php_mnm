<?php ob_start();
if(isset($_GET['madc'])&&isset($_GET['ten_dc']) &&isset($_GET['makn'])){
$madc=$_GET['madc'];
$tendc2=$_GET['ten_dc'];
$makn=$_GET['makn'];
}
?>	
	
		<div class="phai2">
			<div class="phai">
				<div class="tieude2">
					<h3>Chi tiết đồ chơi</h3>
				</div>
				<!--Chi tiết của đồ chơi -->
				<div class="noidung">
					<div class="noidung2">
						<div class="tieude3">
							<h4>Tên: <?php echo $tendc2;?></h4>
						</div>
						<!--Ảnh của đồ chơi-->
						<div class="dc">
							<?php
								$query="SELECT * FROM dochoi WHERE MaDC='$madc'";
								$kq= $mysqli->query($query);
								$ar_dc = mysqli_fetch_assoc($kq);
								$hinhanh=$ar_dc['HinhAnh'];
							?>
							<a href="#" class="item1"><img alt="<?php echo $tendc2;?>" src="/Theme/DoChoi/file/images/<?php echo $hinhanh;?>"/></a><br/>
						</div>
						<div class="CT">
							<?php
							//Lấy mã của nhà sản xuất và nhà phân phối theo mã đồ chơi
								$query="SELECT * FROM chitiet WHERE MaDC='$madc'";
								$kq= $mysqli->query($query);
								$ar_dc = mysqli_fetch_assoc($kq);
								$mansx=$ar_dc['MaNSX'];
								$tien=$ar_dc['SoTien'];
							?>
							
							<p>
								<span style="font-weight:bold;">Mã đồ chơi : </span> <?php echo $madc?> 
								<br/>
							</p>
							<p><span style="font-weight:bold;">Giá : </span> <?php echo $tien?> đ</p><br/>
							<?php	
								//Hiển thị Nhà sản xuất theo đồ chơi
								$query2="SELECT * FROM nhasx WHERE MaNSX='$mansx'";
								$kq2= $mysqli->query($query2);
								$ar_dc2 = mysqli_fetch_assoc($kq2);
								$ten_nsx=$ar_dc2['TenNSX'];
							?>
							
							<p> <span style="font-weight:bold;">Nhà sản xuất : </span><?php echo $ten_nsx?> 
								<a id="chitiet" href="ctnsx.php?mansx=<?php echo $mansx;?>&tennsx=<?php echo $ten_nsx;?>">Chi tiết</a><br/>
							</p>	
								<?php
									//Lấy mã của nhà phân phối qua nhà sản xuất
									$query3="SELECT * FROM phanphoi WHERE MaNSX='$mansx'";
									$kq3= $mysqli->query($query3);
									$ar_dc3 = mysqli_fetch_assoc($kq3);
									$manpp=$ar_dc3['MaNPP'];
									//Hiển thị Nhà phân phối theo nhà sản xuất
									$query4="SELECT * FROM nhapp WHERE MaNPP='$manpp'";
									$kq4= $mysqli->query($query4);
									$ar_dc4 = mysqli_fetch_assoc($kq4);
									$ten_npp=$ar_dc4['TenNPP'];
									
								?>
							<p><span style="font-weight:bold;">Nhà phân phối : </span><?php echo $ten_npp;?>
								<a id="chitiet"href="ctnpp.php?manpp=<?php echo $manpp;?>&tennpp=<?php echo $ten_npp;?>">Chi tiết</a>
							</p>
							<div class="clr"></div>
						</div>	
						<!--End -->
						<!--Đồ chơi khác -->
						<div class="dc_khac">
						<h4>Đồ chơi khác</h4>
							<?php
							//Lấy mã của đồ chơi
							
								$query="SELECT * FROM phattrien WHERE MaKN='$makn' AND MaDC!='$madc'";
								$kq= $mysqli->query($query);
								while($ar_dc = mysqli_fetch_assoc($kq)){
									$madc=$ar_dc['MaDC'];
									//Hiển thị đồ chơi theo kĩ năng
									$query2="SELECT * FROM dochoi WHERE MaDC='$madc'";
									$kq2= $mysqli->query($query2);
									while($ar_dc2 = mysqli_fetch_assoc($kq2)){
										$ten_dc=$ar_dc2['TenDC'];
										$hinhanh=$ar_dc2['HinhAnh'];
							?>
							<div class="dc">
								<a class="item1" href="chitiet.php?madc=<?php echo $madc;?>&ten_dc=<?php echo $ten_dc?>&makn=<?php echo $makn?>" title=""><img alt="" src="/Theme/DoChoi/file/images/<?php echo $hinhanh;?>"></a><br/>
								<a class="item2" href="chitiet.php?madc=<?php echo $madc;?>&ten_dc=<?php echo $ten_dc?>&makn=<?php echo $makn?>"><?php echo $ten_dc;?></a>
							</div>
							<?php
									}
								}
							?>
							<div class="clr"></div>
					</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="clr"></div>
<?php ob_end_flush();?>
    	
   
            
       
