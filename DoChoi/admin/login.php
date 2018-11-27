<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/dbconnect.php';?>
<?php ob_start();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/header.php';?>
            <div class="grid_12">
				<div class="module">
                    <h2><span>Login vào quản trị</span></h2>
						<div class="module-body">
							<form action="" method="post"  enctype="multipart/form-data">
								<?php
									$_SESSION['username'] = 'admin';
									
									if(isset($_POST['login'])){
										$ten_dn=$_POST['ten_dn'];
										$mat_khau=$_POST['mat_khau'];
										//Hiển thị bảng user
										$sql1= "SELECT * FROM user WHERE UserName= '$ten_dn' AND Password='$mat_khau'";
										$result1= $mysqli->query($sql1);
										$ar_user1=mysqli_fetch_assoc($result1);//mảng user 1 chứa select
										
										$count=count($ar_user1);
										//Nếu count > 0 ( ở đây là đếm số cột - tức là nếu count > 0 thì có mảng user1 =>đăng nhập đúng , count <=0 là mảng rỗng => đăng nhập sai)
										if($count>0){
										
											//Tạo mảng user 2 chứa username và fullname
											$ar_user2=array(
												'user_name'=>$ar_user1['UserName'],
												'fullname'=>$ar_user1['FullName'],
												'id'=>$ar_user1['ID_User']
											);
											$_SESSION['user_info']=$ar_user2;
											header("location:index.php");
											exit();
										}	
										else{
											echo "Tên đăng nhập và mật khẩu không đúng";
										}
									}
								?>
								
								 <p>
									<label>Tên đăng nhập</label>
									<input type="text" class="input-medium" name="ten_dn" value="" />
								</p>
								 <p>
									<label>Mật khẩu</label>
									<input type="password" class="input-medium" name="mat_khau" value="" />
								</p>
											
								<fieldset>
									<input class="submit-green" name ="login" type="submit" value="Đăng nhập" /> 
									<input class="submit-gray" name ="Nhaplai" type="reset" value="Nhập lại" />
								</fieldset>
							</form>
						</div> <!-- End .module-body -->
                  </div>  <!-- End .module -->
        	<div style="clear:both;"></div>
           </div> <!-- End .grid_12 -->

<?php ob_end_flush();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/footer.php' ;?> 
                   
