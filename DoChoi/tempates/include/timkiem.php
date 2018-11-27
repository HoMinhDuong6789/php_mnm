<div class="body">	
	<!--BACKGROUND TOP -->
		<div class="background-top">
			<?php
			$ngay=date("d");
			$thang=date("m");
			$nam=date("Y");
			?>
			<p style="color:#4b7c1f; font-style:italic; font-weight:bold;">Ngày <?php echo $ngay?> tháng <?php echo $thang?> năm <?php echo $nam?></p>
		</div>
	<!--END -->
	<div class="body2">
		<div class="trai2">
			
			<div class="trai">
				<!--YÊU CẦU-->
				<div class="tieude">
					TÌM KIẾM
				</div>
				<!--HỘP TÌM KIẾM-->
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
								echo " <span style='font-weight:bold;color:red;'>Mời bạn chọn tuổi và giới tính</span>";
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
				<!--End YÊU CẦU-->
			</div>
			<div class="trai">
				<div class="tieude">
					DANH MỤC ĐỒ CHƠI
				</div>
				<div class="danhmuc">
					<ul>
						<?php
							$select="SELECT * FROM loaidochoi";
							$result= $mysqli->query($select);
							while($ar_kn = mysqli_fetch_assoc($result)){
								$maldc=$ar_kn['MaLDC'];
								$ten_ldc=$ar_kn['TenLDC'];
						?>
						<li class=""><a href="dochoi2.php?maldc=<?php echo $maldc;?>&ten_ldc=<?php echo $ten_ldc?>"><?php echo $ten_ldc;?></a></li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
		</div>
		

    	
   
            
       