<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/dbconnect.php';?>
 <?php ob_start();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/header.php';?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/checkSession.php';?>            
			<div class="grid_12">
            
                <div class="module">
                     <h2><span>Thêm</span></h2>
                        
                     <div class="module-body">
                        <form action="" method="post" enctype="multipart/form-data" id="frmNews">
							<?php
								$id_user=$_SESSION['user_info']['id'];
								$subtime = date("Y/m/d");
								$ten_dc=' ';
								$id_dc=' ';
								if(isset($_POST['submit'])){
									$ten_dc=$mysqli->real_escape_string ($_POST['ten_dc']) ;
									//$ten_kn=$mysqli->real_escape_string ($_POST['ten_kn']);
									$id_dc=$mysqli->real_escape_string ($_POST['id_dc']) ;
									$tenhinh=$_FILES['hinhanh']['name'];
									//Trường hợp k có ảnh thì ta thêm các phần còn lại trừ phần ảnh ra
									if($tenhinh == NULL){
										//Thêm tên đồ chơi vào bảng đồ chơi
										$query1 = "INSERT INTO dochoi(TenDC,MaDC) VALUES('$ten_dc','$id_dc')";
										$kq1 = $mysqli->query($query1);
										if($kq1){
											header("location:indexNews.php");
											exit();
										}
										else {
											echo "Có lỗi ";
										}
										//Thêm mối quan hệ giữa đồ chơi và kĩ năng
										
										
									}
									// Ngược lại thì ta vừa thêm các phần thử còn lại vừa thêm ảnh
									else{ 
										//Tải ảnh
										$arr_tach = explode('.',$tenhinh);
										$count = count($arr_tach);
										$duoifile = $arr_tach[$count-1]; // tìm đuôi file
										
										
										//loại bỏ đuôi file ra khỏi mảng
										unset($arr_tach[$count-1]);
										
										
										$file_moi = "";
										foreach($arr_tach as $key => $name){
											if($key==0){
												$file_moi = $file_moi.$name;
											} else{
												$file_moi = $file_moi."_".$name;
											}
										}
										
										$thoigian = time();
										$tenfile_hoanchinh = $file_moi."_".$thoigian.".".$duoifile;
										$tenhinh=$tenfile_hoanchinh;
										//Dẫn file vào thư mục
										$tmp_name = $_FILES["hinhanh"]["tmp_name"];
										$path = $_SERVER["DOCUMENT_ROOT"]; // $_SERVER["DOCUMENT_ROOT"] : là đường truyền vật lí
										$path_uploadfile = $path. "/DoChoi/file/images/" . $tenhinh;
										
										$result = move_uploaded_file($tmp_name, $path_uploadfile);
										//Upload ảnh thành công thì ta thêm ảnh + thông tin khác vào
										if ($result){
												$query2 = "INSERT INTO INSERT INTO dochoi(TenDC,MaDC,HinhAnh) VALUES('$ten_dc','$id_dc','$tenhinh')";
												$kq2 = $mysqli->query($query2);
												if($kq2){
													header("location:indexNews.php");
													exit();
												}
												else {
													echo "Có lỗi trong quá trình đăng tải thông tin";
												}
										}
										else{
											echo "Có lỗi trong quá trình upload hình";
										}
									
									
									} 
								}
							?>
                            <p>
                                <label>Thêm đồ chơi (*)</label>
                                <input type="text" class="input-medium" name="ten_dc" value="" />
                            </p>
							
							 <!--<p>
                                <label>Kĩ năng (*)</label>
                                <select class="input-medium" name="ten_ldc">
									<option value="">[Chọn kĩ năng] </option>
									<?php 
										/*$query3= "SELECT * FROM danhmuctin";
										$kq3= $mysqli->query($query3);
										
										while($ar_DM=mysqli_fetch_assoc($kq3)){
										$id_dmt=$ar_DM['ID_DanhMucTin'];
										$ten_dmt=$ar_DM['TenDanhMucTin'];*/
										
									?>
									<option  value="<?php //echo $id_dmt; ?>"><?php //echo  $ten_dmt; ?> </option>
									<?php 
										//}
									?>
								</select>
                            </p>-->
                             <p>
                                <label> Mã sản phẩm(*)</label>
                                <input type="text" class="input-medium" name="id_dc" value="<?php echo $id_dc;?>" />
                            </p>
							<p>
                                <label>Hình ảnh</label>
                                <br />
                                <img src="" alt="" width="100px" /><br />
                                 <input type="file" name="hinhanh" value="" />
                            </p>
                            
                           
                            
                            
                                
                            <fieldset>
                                <input class="submit-green" name="submit" type="submit" value="Thêm" /> 
                                <input class="submit-gray" name="reset" type="submit" value="Nhập lại" />
                            </fieldset>
                        </form>
						
                     </div> <!-- End .module-body -->
					

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
<script>
			$().ready(function(){
			$("#frmNews").validate({//frmLogin : class or id của form
				rules: {
					ten_tin:{
						required:true,
					},
					
				},
				messages: {
					ten_tin :"Vui lòng nhập tên tin ",
				}
			});
		});
</script>		   			
<?php ob_end_flush();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/footer.php' ;?> 
