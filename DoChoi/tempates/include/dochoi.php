<?php ob_start();
if(isset($_GET['makn']) && isset($_GET['tenkn']) && isset($_GET['maldc'])){
$makn=$_GET['makn'];
$tenkn=$_GET['tenkn'];
$maldc=$_GET['maldc'];
}
?>
			<div class="phai2">
				<div class="phai">
					<div class="tieude4">
						<div class="tren">
							<p>Đồ Chơi phát triển </p>
						</div>
						<h4><?php echo $tenkn;?></h4>
					</div>
					<div class="noidung">
						<div class="noidung2">
							<h4>Đồ chơi </h4>
							<!--Đồ chơi -->
							<div class="dochoi">
								<!--Lấy tên hình ảnh-->
								
								<?php
									//Lấy mã của đồ chơi
										$query="SELECT * FROM phattrien WHERE MaKN='$makn'";
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
							<div class="kn_khac">
								<h4>Kĩ năng khác</h4>
									<ul>
									<?php
									
										//Lấy mã kĩ năng khác
										$query3="SELECT * FROM phanloai WHERE MaKN!='$makn' AND MaLDC='$maldc'";
										$kq3= $mysqli->query($query3);
										while($ar_kn3 = mysqli_fetch_assoc($kq3)){
											$makn2=$ar_kn3['MaKN'];
											$query4="SELECT * FROM kinang WHERE MaKN='$makn2'";
											$kq4= $mysqli->query($query4);
											while($ar_kn4 = mysqli_fetch_assoc($kq4)){
												$tenkn2=$ar_kn4['TenKN'];
												
									?>
									<li><a href="dochoi.php?makn=<?php echo $makn2;?>&tenkn=<?php echo $tenkn2?>&maldc=<?php echo $maldc;?>"><?php echo $tenkn2?></a></li>
									<?php
											}
										}
									?>
									</ul>	
							</div>
							<!--End -->
						</div>
				</div>
				</div>
			</div>
			<div class="clr"></div>
<?php ob_end_flush();?>		
    	
   
            
       
