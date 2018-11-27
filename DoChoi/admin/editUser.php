<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/dbconnect.php';
$id_user=$_GET['id_user'];
?>
<?php ob_start();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/header.php';?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/checkSession.php';?>
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>SỬA</span></h2>
                      <?php
						//Hiển thị lại thông tin người dùng được chọn
						$sql= "SELECT * FROM user WHERE ID_User=$id_user";
						$result= $mysqli->query($sql);
						$ar_DM=mysqli_fetch_assoc($result);
						$id_user=$ar_DM['ID_User'];
						$user_name=$ar_DM['UserName'];
						$full_name=$ar_DM['FullName'];
						
						?>			 
                     <div class="module-body">
                        <form action="" method="post"  enctype="multipart/form-data"id="frmUser">
						<?php
						//-----Lưu lại những chỉnh sửa
						if(isset($_POST['Sua'])){
							
							$pass_new2=$_POST['pass_new'];
							
							$full_name2=$_POST['full_name'];
							//Nếu mật khẩu khác null (có nghĩa là đã thay đổi mật khẩu) thì lưu lại pass và fullname
							if($pass_new2!=NULL){
								$sql2= "UPDATE user SET FullName = '$full_name2',PassWord = '$pass_new2' WHERE ID_User=$id_user";
								$result2= $mysqli->query($sql2);
								if($result2){
									header("location:indexUser.php");
									exit();
									//echo "Thành công !!!";
								}
								else{
									echo "Có lỗi xảy ra !!!";
								}
							}
							//Nếu mật khẩu null (có nghĩa là không thay đổi mật khẩu) thì chỉ lưu lại fullname
							else{
								$sql3= "UPDATE user SET FullName = '$full_name2' WHERE ID_User=$id_user";
								$result3= $mysqli->query($sql3);
								if($result3){
									header("location:indexUser.php");
									exit();
									//echo "Thành công !!!";
								}
								else{
									echo "Có lỗi xảy ra---- !!!";
								}
							}
						} 		
						?>	
							  <p>
                                <label><strong>Tên tài khoản : <?php echo $_SESSION['user_info']['user_name'] ;?></br></label>
								
                            </p>
							 <p>
                                <label>Mật khẩu mới</label>
                                <input type="password" class="input-medium" name="pass_new" value="" id="pass_new"/>
                            </p>
							 
							 <p>
                                <label>Xác nhận lại mật khẩu</label>
                                <input type="password" class="input-medium" name="re_pass" value="" />
                            </p> 
							 <p>
                                <label>Họ và tên</label>
                                <input type="text" class="input-medium" name="full_name" value="<?php echo $full_name ; ?>" />
                            </p>
										
							<fieldset>
                                <input class="submit-green" name ="Sua" type="submit" value="Sửa" /> 
                                <input class="submit-gray" name ="Nhaplai" type="reset" value="Nhập lại" />
                            </fieldset>
                        </form>
						
                     </div> <!-- End .module-body -->
					

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
<script>
			$().ready(function(){
			$("#frmUser").validate({//frmLogin : class or id của form
				rules: {
					pass_new:{
						minlength: 5,
					},
					re_pass:{
						minlength: 5,
						equalTo: "#pass_new"//Lấy id
					},
					full_name:{
						required:true,
					},
				},
				messages: {
					
					pass_new: {
						minlength: "Mật khẩu phải có ít nhất 5 ký tự",
					},
					re_pass: {
						minlength: "Mật khẩu phải có ít nhất 5 ký tự",
						equalTo :"Mật khẩu phải trùng với mật khẩu trên"
					},
					full_name :"Vui lòng nhập tên đầy đủ ",
					
				}
			});
		});
</script>		
<?php ob_end_flush();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/footer.php' ;?> 
