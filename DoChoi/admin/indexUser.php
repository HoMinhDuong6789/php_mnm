<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/dbconnect.php'; ?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/header.php';?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/checkSession.php';?>
			<div class="add">
				<a class="button" href="addUser.php">
					<span>
						Thêm
						<img alt="Thêm" src="/JaVi/tempates/admin/images/plus-small.gif">
					</span>
				</a>
			</div>
            <div class="grid_12">
                <!-- Example table -->
                <div class="module">
                	<h2><span>Danh sách danh người dùng</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="text-align: center;">ID User</th>
                                    <th style="text-align: center;">User Name</th>
									<th style="text-align: center;">Full Name</th>
                                    <th style="text-align: center;">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php 
								//$_SESSION['user_info']['user_name']!="admin"
									$sql= "SELECT * FROM user ";
									$result= $mysqli->query($sql);
									while($ar_DM=mysqli_fetch_assoc($result)){
										$id_user=$ar_DM['ID_User'];
										$user_name=$ar_DM['UserName'];
										$full_name=$ar_DM['FullName'];
																				
								?>
                                <tr>
                                    <td class="align-center"><?php echo $id_user;?></td>
                                    <td class="align-center"><?php echo $user_name;?></td>
                                    <td class="align-center"><?php echo $full_name;?></td>
                                    
                                    <td align="center">
									<?php 
										if($_SESSION['user_info']['user_name']=="admin"){//Nếu tên đăng nhập = admin thì hiển thị xóa + sửa của các tên còn lại + admin
									?>
                                        <a href="editUser.php?id_user=<?php echo $id_user ;?>">Sửa <img src="/JaVi/tempates/admin/images/pencil.gif" alt="edit" /></a>
									<?php	
										if($user_name!='admin'){
									?>
										<a href="delUser.php?id_user=<?php echo $id_user ;?>">Xóa <img src="/JaVi/tempates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
									<?php
										}	
									}else{//Nếu tên đăng nhập k phải admin thì hiển thị các tên còn lại trừ admin
											if($user_name!='admin'){
										?>
										<a href="editUser.php?id_user=<?php echo $id_user ;?>">Sửa <img src="/JaVi/tempates/admin/images/pencil.gif" alt="edit" /></a>
										<a href="delUser.php?id_user=<?php echo $id_user ;?>">Xóa <img src="/JaVi/tempates/admin/images/bin.gif" width="16" height="16" alt="delete" /></a>
										<?php
											}
											else{
												echo ".....";
											}
										}
										?>
									</td>
                                </tr>
								<?php
									}
								?>
                               
                            </tbody>
                        </table>
                        </form>
                     </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
          </div> <!-- End .grid_12 -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/footer.php' ;?> 
