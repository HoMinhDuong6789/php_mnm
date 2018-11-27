<?php ob_start();
if(isset($_GET['maldc']) && isset($_GET['ten_ldc']) ){
$maldc=$_GET['maldc'];
$ten_ldc=$_GET['ten_ldc'];

}
?>
			<div class="phai2">
				<div class="phai">
					<div class="tieude4">
						<div class="tren">
							<p>Loại đồ chơi</p>
						</div>
						<h4><?php echo $ten_ldc;?></h4>
					</div>
					<div class="noidung">
						<div class="noidung2">
							<h4>Đồ chơi </h4>
							<!--Đồ chơi -->
							<div class="dochoi dochoi2">
								<!--Lấy tên hình ảnh-->
								
								<?php
									//Lấy mã của đồ chơi
										$query="SELECT * 
										FROM phattrien INNER JOIN phanloai
										ON phattrien.MaKN=phanloai.MaKN
										WHERE phanloai.MaLDC='$maldc'";
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
							
									<div class="dc dc2">
											<a class="item1" href="chitiet2.php?madc=<?php echo $madc;?>&ten_dc=<?php echo $ten_dc?>"><img alt="" src="/Theme/DoChoi/file/images/<?php echo $hinhanh;?>"></a><br/>
										<a class="item2" href="chitiet2.php?madc=<?php echo $madc;?>&ten_dc=<?php echo $ten_dc?>"><?php echo $ten_dc;?></a>
									</div>
									<?php
											}
										}
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
    	
   
            
       
