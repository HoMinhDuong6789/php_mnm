<?php
	session_start();
?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/dbconnect.php'; ?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/tempates/include/admin/header.php';?>
<?php  include_once $_SERVER['DOCUMENT_ROOT'] .'/Theme/DoChoi/functions/checkSession.php';?>
			
            <div class="grid_12">
                <!-- Example table -->
                <div class="module">
                	<h2><span>Danh sách danh mục tin</span></h2>
                    
                    <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:4%; text-align: center;">ID</th>
                                    <th>Tên</th>
									
                                    <th style="width:11%; text-align: center;">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php 
									$sql= "SELECT * FROM kinang ";
									$result= $mysqli->query($sql);
									while($ar_KN=mysqli_fetch_assoc($result)){
										$ten_kn=$ar_KN['TenKN'];
										$id_kn=$ar_KN['MaKN'];
										//$thaythe=str_replace(' ','-',$ten_kn);
										//$url="/admin/danh-muc-tin/{$thaythe}-{$id_dmt}";
										//$url="/admin/danh-muc-tin-{$id_dmt}";
										
										
																				
								?>
                                <tr>
                                    <td class="align-center"><?php echo $id_kn;?></td>
                                    <td><a href="editCat.php?id_kn=<?php echo $id_kn;?>"><?php echo $ten_kn;?></a></td>
                                    
                                    
                                    <td align="center">
                                        <a href="editCat.php?id_kn=<?php echo $id_kn ;?>">Sửa <img src="/Theme/DoChoi/file/images/admin/pencil.gif" alt="edit" /></a>
                                        <a href="delCat.php?id_kn=<?php echo $id_kn ;?>">Xóa <img src="/Theme/DoChoi/file/images/admin/bin.gif" width="16" height="16" alt="delete" /></a>
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
