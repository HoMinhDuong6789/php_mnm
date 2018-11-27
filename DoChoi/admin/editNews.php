<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/dbconnect.php';
$id_dc=$_GET['id_dc'];
//$id_kn=$_GET['id_kn'];
?>
 <?php ob_start();?>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/header.php';?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/checkSession.php';?>
            <div class="grid_12">
            
                <div class="module">
                     <h2><span>SỬA TIN TỨC</span></h2>
                      <?php
								$ten_dc2='';
								
								//Hiển thị lại tin tức được chọn
								$sql= "SELECT * FROM dochoi
										WHERE MaDC='$id_dc'";
									$result= $mysqli->query($sql);
									$ar_dc=mysqli_fetch_assoc($result);//????
										$ten_dc2=  htmlspecialchars ($ar_dc['TenDC']);
										$hinhanh2= $ar_dc['HinhAnh'];
						?>			 
                     <div class="module-body">
                        <form action="" method="post"  enctype="multipart/form-data" id="frmNews">
							
							 <?php
								$path1="/Theme/DoChoi/file/images/";
								
								//-----Nút xóa hình chỉ có chức năng : Xóa hình ảnh rồi cập nhật lại tên hình ảnh = null
								if(isset($_POST['xoahinh'])){
									
									//Bước 1: xóa hình khỏi thư mục
									$xoa = $_SERVER["DOCUMENT_ROOT"] .$path1 .$hinhanh2 ;
									$kq_xoa= unlink("$xoa");//unlike dùng để xóa 1 file khỏi thư mục
									
									//Bước 2: update lại hình ảnh = null
									if($kq_xoa){ //Nếu xóa thành công thì thực hiện update ảnh về giá trị null(rỗng)
										
										$up_hinh = "UPDATE dochoi SET HinhAnh='' WHERE MaDC=$id_dc";
										$kq_up = $mysqli->query($up_hinh);
										if($kq_up){
											header("location:editNews.php?id_dc=$id_dc");//Khi cập nhật hình thì load lại trang edit vì thế ta phải  truyền $id_tintuc nếu k sẽ mất 
											exit();
											echo "Update thành công";
										}
										else {
											echo "Có lỗi ";
										}
									}
									else{
										echo "Có lỗi khi xóa thư mục";
									}
								} 
								//-----Lưu lại những chỉnh sửa
								if(isset($_POST['Sua'])){
									$ten_dc=$_POST['ten_dc'];
									
									$tenhinh=$_FILES['hinhanh']['name'];
									//----Trường hợp sau khi sửa "k post ảnh" thì ta cập nhật các phần còn lại trừ phần ảnh ra
									if($tenhinh == NULL){
										$query1 = "UPDATE dochoi SET TenDC='$ten_dc'
													WHERE MaDC=$id_dc";
										$kq1 = $mysqli->query($query1);
										if($kq1){
											header("location:indexNews.php?page=1");
											exit();
											echo "Đăng tin thành công <br/>";
										}
										else {
											echo "Có lỗi ";
										}
									}
									// ----Trường hợp sau khi sửa "có post ảnh" thì ta vừa cập nhật các phần thử còn lại vừa cập nhật ảnh
									else{
										//Trường có sẵn hình từ trước( tức là có hình hiện ở input)
										if($hinhanh2){
											//Xóa ảnh
											//Bước 1: xóa hình khỏi thư mục
											$xoa2 = $_SERVER["DOCUMENT_ROOT"] .$path1 .$hinhanh2 ;
											$kq_xoa2= unlink("$xoa2");//unlike dùng để xóa 1 file khỏi thư mục
											//Bước 2: update lại hình ảnh
											if($kq_xoa2){ 
												$up_hinh2 = "UPDATE dochoi SET HinhAnh='' WHERE MaDC=$id_dc";
												$kq_up2 = $mysqli->query($up_hinh2);
												if($kq_up2){
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
													echo $tenhinh .'<br/>';
													//Dẫn file vào thư mục
													$tmp_name = $_FILES["hinhanh"]["tmp_name"];
													$path = $_SERVER["DOCUMENT_ROOT"]; // $_SERVER["DOCUMENT_ROOT"] : là đường truyền vật lí
													$path_uploadfile = $path .$path1 .$tenhinh;
													
													$result1 = move_uploaded_file($tmp_name, $path_uploadfile);
													//Upload ảnh thành công thì ta thêm ảnh + thông tin khác vào
													if ($result1){ //ĐÚNG
															$query2 = "UPDATE dochoi SET TenDC='$ten_dc',HinhAnh='$tenhinh'
																WHERE MaDC=$id_dc";
															$kq2 = $mysqli->query($query2);
															if($kq2){
																header("location:indexNews.php?page=1");
																exit();
																echo "thành công!!!!";
															}
															else {
																echo "Có lỗi trong quá trình đăng tải thông tin <br/>";
															}
													}
													else{
														echo "Có lỗi trong quá trình upload hình";
													}
												}
											}
											else{
												echo "Có lỗi khi xóa thư mục";
											} 
										}
										//Trường hợp không có sẵn hình ( tức là k có hình hiện ở input)
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
													echo $tenhinh .'<br/>';
													//Dẫn file vào thư mục
													$tmp_name = $_FILES["hinhanh"]["tmp_name"];
													$path = $_SERVER["DOCUMENT_ROOT"]; // $_SERVER["DOCUMENT_ROOT"] : là đường truyền vật lí
													$path_uploadfile = $path .$path1 .$tenhinh;
													
													$result1 = move_uploaded_file($tmp_name, $path_uploadfile);
													//Upload ảnh thành công thì ta thêm ảnh + thông tin khác vào
													if ($result1){ //ĐÚNG
															$query2 = "UPDATE dochoi SET TenDC='$ten_dc',HinhAnh='$tenhinh'
																WHERE MaDC=$id_dc";
															$kq2 = $mysqli->query($query2);
															if($kq2){
																header("location:indexNews.php?page=1");
																exit();
																//echo "thành công!!!!";
															}
															else {
																echo "Có lỗi trong quá trình đăng tải thông tin <br/>";
															}
													}
													else{
														echo "Có lỗi trong quá trình upload hình";
													}
												}
										}
										
								}
								/*
								echo "Mảng File là";
								echo '<pre>';
									print_r($_FILES);
								echo '</pre>';
								echo "Mảng post là";
								echo '<pre>';
									print_r($_POST);
								echo '</pre>'; */
							?>
							
										
							
                            <p>
                                <label> Tên sản phẩm(*)</label>
                                <input type="text" class="input-medium" name="ten_dc" value="<?php echo $ten_dc2;?>" />
                            </p>
							<!-- <p>
                                <label>2/ Kĩ năng (*)</label>
                                <select class="input-medium" name="id_kn"> <!--Lấy name = id_kn theo value-->
									
									<?php 
										//Hiển thị hộp select danh mục tin
										/*$query3= "SELECT * FROM kinang";
										$kq3= $mysqli->query($query3);
										
										while($ar_kn=mysqli_fetch_assoc($kq3)){
										$ID_kn=$ar_kn['MaKN'];
										$Ten_kn=$ar_kn['TenKN'];
										if($id_kn2==$ID_kn){ //Nếu id danh mục tin trong hộp trùng vs id danh mục tin đã có sẵn (trong lệnh select:hiển thị lại)thì ta lưu lại bằng biến select
											$select= 'selected= "selected" ';
										}
										else{ //Ngược lại thì ta để rỗng
											$select="";
										}*/
										
									?>
								<!--	<option <?php //echo $select; ?> value="<?php //echo $ID_kn; ?>"><?php// echo  $Ten_kn; ?> </option><!--Ở đây ta cho value là id_dmt nên name của select ta lấy id_dmt-->
									<?php 
										//}
									?>
								  <!--</select>-->
                           <!-- </p>-->
                            
							<p>
								<label> Hình ảnh</label> <br />
								<?php
									//Nếu có hình ảnh từ select thì mới hiển thị ảnh ra và có nút xóa hình
									if($hinhanh2!=NULL){
								?>
                                <img src="<?php echo $path1 .$hinhanh2;?>" alt="" width="100px" /><br />
								<input class="submit-green" name ="xoahinh" type="submit" value="Xóa hình" />
                                
								<?php
									}
								?>
								<!--Nút chọn ảnh-->
                                <input type="file" name="hinhanh" value="" />
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
