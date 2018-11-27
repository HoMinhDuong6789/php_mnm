<?php ob_start();
if(isset($_GET['madc'])&&isset($_GET['ten_dc'])){
$madc=$_GET['madc'];
$tendc2=$_GET['ten_dc'];
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
							
							<p><span style="font-weight:bold;">Mã đồ chơi : </span> <?php echo $madc?> </p><br/>
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
						
					</div>
				</div>
			</div>
			
		</div>
		<div class="clr"></div>
<?php ob_end_flush();?>
    	
   
            
       
