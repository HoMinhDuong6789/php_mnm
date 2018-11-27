<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Quản lí</title>
        <link rel="stylesheet" type="text/css" href="/Theme/DoChoi/tempates/css/style.css" />
		<script type="text/javascript" src="/Theme/DoChoi/libraries/jquery/jquery.js"></script>
		<script type="text/javascript" src="/Theme/DoChoi/libraries/jquery/jquery.validate.js"></script>
	</head>
	<body>
			
			<div class="wrapper">
				 <!--Header -->
			 
				<div class="header">
					<div class="img">
						<img src="/Theme/DoChoi/file/images/logo.png"/>
					</div>
					<div class="menu">
						<img src="/Theme/DoChoi/file/images/eco_House_icon1.jpg"/>
						<ul>
								<li><a href="#">TRANG CHỦ</a></li>
								<li><a href="#">TƯ VẤN</a></li>
								
						</ul>
						<div class="clr"></div>
					</div>
					
				</div>	
				
				<!--End Header -->
				<!--BODY-->
				<div class="body">
					<!--Khối trái - Yêu cầu -->
					<div class="trai">
						
							<div class="tieude">
								TÌM KIẾM
							</div>
							<div class="yeucau">
									<form method="post">
										<?php
											if(isset($_POST['submit'])){
												if($_POST['tuoi'] && $_POST['gioi_tinh']){
													$matuoi2=$_POST['tuoi'];
													$magt2=$_POST['gioi_tinh'];
													//echo "Có giá trị 1 và 2";
													header("location:loaidochoi.php?matuoi=$matuoi2&magt=$magt2");
													exit();
												}
												else
													echo " Mời bạn chọn tuổi và giới tính";
											}
											
										?>
										<!--Hộp chọn tuổi-->
										<p>
											<label>Tuổi (*)</label>
												<select class="" name="tuoi">
													<option value="">[Chọn] </option>
													<?php
														
														$query= "SELECT * FROM tuoi ";
														$kq= $mysqli->query($query);
														while($ar_tuoi=mysqli_fetch_assoc($kq)){
														$matuoi=$ar_tuoi['MaTuoi'];
														$tuoi=$ar_tuoi['Tuoi'];
														if($_POST['tuoi']==$matuoi){
															$selected= ' Selected="Selected" ';
														}
														else
															$selected='';	
														
													?>
													<option <?php echo $selected;?> value="<?php echo $matuoi;?>"><?php echo $tuoi;?> </option>
													<?php
														}
													?>
												</select>
											
										</p>
										<!--Hộp chọn giới tính-->
										<p>
											<label>Giới tính (*)</label>
												<select class="" name="gioi_tinh">
													<option value="">[Chọn] </option>
													<?php
														$query2= "SELECT * FROM gioitinh ";
														$kq2= $mysqli->query($query2);
														while($ar_gt=mysqli_fetch_assoc($kq2)){
														$magt=$ar_gt['MaGT'];
														$gioi_tinh=$ar_gt['GioiTinh'];
														if($_POST['gioi_tinh']==$magt){
															$selected= ' Selected="Selected" ';
														}
														else
															$selected='';	
													?>
													<option <?php echo $selected;?> value="<?php echo $magt;?>"><?php echo $gioi_tinh;?> </option>
													<?php
														
														}
													?>
												</select>
												<?php
												/*echo '<pre>';
													print_r($_POST);
												echo '</pre>';*/
											
												?>
										</p>
										<!--Nút Tìm-->
										<p>
											 <input class="submit-green" name="submit" type="submit" value="Tìm" /> 
										</p>
										<div class="clr"></div>
									</form>
							
							</div>
					<!--End -->
					</div>
					<!--Khối phải-->
					<div class="phai">
						<!--LOẠI ĐỒ CHƠI -->
						<?php
						echo 'Loại đồ chơi';
						
						?>
						<div class="LDC">
							<ul>
								<?php
								//Lấy mã loại đồ chơi theo tuổi vs giới tính
									$query="SELECT *
											FROM yeucau3 LEFT OUTER JOIN yeucau4 
											ON yeucau3.MaLDC=yeucau4.MaLDC
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
						</div>			
						<!--End -->	
					</div>		
					<div class="clr"></div>	
				</div>
			
				<!--END wrapper -->
				
				<!--Footer -->
				<div class="footer">
					<p>@CODE BY GROUP 2</p>
				</div> 
				<!-- End Footer -->
			</div>
		
	</body>
</html> 
		
    	
   
            
       
