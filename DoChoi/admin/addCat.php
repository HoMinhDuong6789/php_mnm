<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/dbconnect.php';

 ?>
<?php ob_start();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/header.php';?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/checkSession.php';?>
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>Thêm</span></h2>
                        
                     <div class="module-body">
                        <form action="" method="post" id="frmCat">
							<?php
								/*$sql= "SELECT*FROM tintuc WHERE ID_TinTuc={$id_tintuc}";
								$result= $mysqli->query($sql);
									while($ar_DM = mysqli_fetch_assoc($result)){
										$tentin= $ar_DM['TenTinTuc'];
										$hinhanh= $ar_DM['HinhAnh'];
										$mota=$ar_DM['MoTa'];*/
								$ten_dmt=' ';
								
								if(isset($_POST['submit'])){
								
									$ten_dmt = $_POST['ten_dmt'];
									$query = "INSERT INTO danhmuctin(TenDanhMucTin) VALUES('$ten_dmt')";
									$result = $mysqli->query($query);
									if($result){
										header("location:indexCat.php");
										exit();
										//echo "Thêm danh mục tin thành công";
									}else{
										echo "Thêm danh mục tin thất bại";
									}
								}
							
							
										
										
							?>
                            <p>
                                <label>Tên danh mục tin</label>
                                <input type="text" class="input-medium" name="ten_dmt" value="" />
                            </p>
                                
                            <fieldset>
                                <input class="submit-green" name="submit" type="submit" value="Thêm" /> 
                                <input class="submit-gray" type="submit" value="Nhập lại" />
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
					ten_dmt:{
						required:true,
					},
				},
				messages: {
					ten_dmt :"Vui lòng nhập tên danh mục ",
					
				}
			});
		});
</script>		   	
<?php ob_end_flush();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/footer.php' ;?> 
