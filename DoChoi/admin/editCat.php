<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/dbconnect.php';
$id_kn=$_GET['id_kn'];

 ?>
 <?php ob_start();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/header.php';?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/checkSession.php';?>
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>SỬA TIN TỨC</span></h2>
                      <?php
						//Hiển thị lại tin tức được chọn
						$sql1= "SELECT TenKN FROM kinang WHERE MaKN='$id_kn'";
						$result1= $mysqli->query($sql1);
						$ar_KN= mysqli_fetch_assoc($result1);
						$tenkn=$ar_KN['TenKN'];
						
						?>			 
                     <div class="module-body">
                        <form action="" method="post"  enctype="multipart/form-data" id="frmCat">
							
							 <?php
								//-----Lưu lại những chỉnh sửa
								if(isset($_POST['Sua'])){
									$ten_kn=$_POST['ten_kn'];
									$sql2= "UPDATE kinang SET TenKN = '$ten_kn' WHERE MaKN='$id_kn'";
									$result2= $mysqli->query($sql2);
									if($result2){
										header("location:indexCat.php");
										exit();
										//echo "Sửa thành công";
									}
									else{
										echo "Có lỗi khi sửa danh mục tin";
									}
								}
							?>
							 <p>
                                <label>Tên kĩ năng</label>
                                <input type="text" class="input-medium" name="ten_kn" value="<?php echo $tenkn ; ?>" />
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
			$("#frmCat").validate({//frmLogin : class or id của form
				rules: {
					ten_kn:{
						required:true,
					},
				},
				messages: {
					ten_kn :"Vui lòng nhập tên kĩ năng ",
					
				}
			});
		});
</script>		
<?php ob_end_flush();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/JaVi/tempates/admin/inc/footer.php' ;?> 
