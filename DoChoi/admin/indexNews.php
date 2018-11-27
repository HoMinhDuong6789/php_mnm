<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/dbconnect.php'; ?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/header.php';?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/checkSession.php';?>
<?php
//Chia số trang
/*$query= "SELECT count(ID_TinTuc) as tong_tin FROM tintuc ";
$kq= $mysqli->query($query);
$ar_Query=mysqli_fetch_assoc($kq);
$tong_tin = $ar_Query['tong_tin'];
$row_count= 4;
$so_trang= ceil($tong_tin/$row_count);
//Tính offset
$current_page = 1;
if(isset($_GET['page'])){

$current_page=$_GET['page'];
}
$offset=($current_page-1)*$row_count;*/
?>		
			<div class="add">
				<a class="button" href="addNews.php">
					<span>
						Thêm
						<img alt="Thêm" src="/Theme/DoChoi/file/images/admin/plus-small.gif">
					</span>
				</a>
			</div>
            <div class="grid_12">
                <!-- Example table -->
                <div class="module">
                	<h2><span>Danh sách đồ chơi</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:4%; text-align: center;">ID</th>
                                    <th>Tên</th>
									<th style="width:16%; text-align: center;">Hình ảnh</th>
									<th style="width:16%; text-align: center;">Kĩ Năng</th>
                                    <th style="width:11%; text-align: center;">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php 
										
									
									//Hiển thị đồ chơi ra ngoài
									//Lấy mã đồ chơi và loại đồ chơi
									/*$sql= "SELECT *
										FROM phattrien INNER JOIN phanloai
										ON phattrien.MaKN=phanloai.MaKN";
									$result= $mysqli->query($sql);
									while($ar_DC=mysqli_fetch_assoc($result)){
										$id_dc=$ar_DC['MaDC'];
										$id_ldc=$ar_DC['MaLDC'];
										//Thông tin đồ chơi
										$sql2="SELECT * FROM `dochoi`WHERE MaDC='$id_dc'";
										$result2= $mysqli->query($sql2);
										while($ar_DC2=mysqli_fetch_assoc($result2)){
											$ten_dc=$ar_DC2['TenDC'];
											$hinhanh=$ar_DC2['HinhAnh'];
											//Thông tin loại đồ chơi
											$sql3="SELECT * FROM `loaidochoi`WHERE MaLDC='$id_ldc'";
											$result3= $mysqli->query($sql3);
											while($ar_DC3=mysqli_fetch_assoc($result3)){
												$ten_ldc=$ar_DC3['TenLDC'];*/
										//Lấy mã đồ chơi và kĩ năng
										$sql= "SELECT * FROM phattrien" ;
										$result= $mysqli->query($sql);
										while($ar_DC=mysqli_fetch_assoc($result)){
											$id_dc=$ar_DC['MaDC'];
											$id_kn=$ar_DC['MaKN'];
											//Thông tin đồ chơi
											$sql2="SELECT * FROM `dochoi`WHERE MaDC='$id_dc'";
											$result2= $mysqli->query($sql2);
											while($ar_DC2=mysqli_fetch_assoc($result2)){
												$ten_dc=$ar_DC2['TenDC'];
												$hinhanh=$ar_DC2['HinhAnh'];
												//Thông tin kĩ năng
												$sql3="SELECT * FROM kinang WHERE MaKN='$id_kn'";
												$result3= $mysqli->query($sql3);
												while($ar_DC3=mysqli_fetch_assoc($result3)){
													$ten_kn=$ar_DC3['TenKN'];
								?>
                                <tr>
                                    <td class="align-center"><?php echo $id_dc;?></td>
                                    <td><a href="editNews.php?id_dc=<?php echo $id_dc ;?>"><?php echo $ten_dc;?></a></td>
                                    
									
                                    <td align="center">
									<!--Nếu có tên hình thì đăng ảnh lên-->
									<?php 
										if($hinhanh!=NULL){
									?>
									<img src="/Theme/DoChoi/file/images/<?php echo $hinhanh;?>" class="tintuc" />
									<!--Nếu không có tên hình thì echo : không có hình -->
									<?php
										}
										else{
											echo '<strong>Không có hình</strong>';
										}
									?>
									</td>
									 <td class="align-center"><?php echo $ten_kn;?></td>
                                    <td align="center">
                                        <a href="editNews.php?id_dc=<?php echo $id_dc ;?>&id_kn=<?php echo $id_kn ;?>&ten_dc=<?php echo $ten_dc;?>">Sửa <img src="/Theme/DoChoi/file/images/admin/pencil.gif" alt="edit" /></a>
                                        <a href="delNews.php?id_dc=<?php echo $id_dc ;?>">Xóa <img src="/Theme/DoChoi/file/images/admin/bin.gif" width="16" height="16" alt="delete" /></a>
                                    </td>
                                </tr>
								<?php
											}
										}	
									}
								?>
                               
                            </tbody>
                        </table>
                        </form>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
                
                
                     <div class="pagination">           
                        <div class="numbers">
						<span>Trang : </span>
						<?php
							/*for($i=1;$i<=$so_trang;$i++){
							if($current_page==$i){
								$current=' class="current" ';
							}
							else{
								$current=NULL;
							}*/
						?>
                        <!--   <a <?php //echo $current;?> href="indexNews.php?page=<?php// echo $i;?>"> <?php //echo $i;?> </a><span>|</span> -->
                        <?php   
							//}
                        ?>    
                           
                            <!--<span class="current">3</span>--> 
                            
                        </div> 
                        <div style="clear: both;"></div> 
                     </div>
                
			</div> <!-- End .grid_12 -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/footer.php' ;?> 
