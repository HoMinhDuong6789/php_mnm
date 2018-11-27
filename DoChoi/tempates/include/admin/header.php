

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="/Theme/DoChoi/tempates/css/styles1.css" media="screen" />
		<script type="text/javascript" src="/Theme/DoChoi/libraries/jquery/jquery.js"></script>
		<script type="text/javascript" src="/Theme/DoChoi/libraries/jquery/jquery.validate.js"></script>
		<script type="text/javascript" src="/Theme/DoChoi/libraries/ckeditor/ckeditor.js"></script>
	</head>
	<body>

    	<!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_4">
                    	<ul class="user-pro">
							<?php
								if(isset($_SESSION['user_info'])){
									$fullname=$_SESSION['user_info']['fullname'];
									$id= $_SESSION['user_info']['id'] ;
									
							?>
							<li><a href="logout.php">Logout</a></li>
							<li>Chào, <a href="#"><?php echo $fullname ;?></a></li>
							<?php
								} else{
							?>
							<li><a href="logout.php">Login</a></li>
							<li>Chào, <a href="#">Khách</a></li>
							<?php		
								}
							?>
                    	</ul>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
                                <li id="current"><a href="index.php">Quản trị</a></li>
                                <li><a href="editUser.php?id_user=<?php echo $id ;?>">Tài khoản</a></li>
								<li><a href="indexUser.php">Người dùng</a></li>
                            </ul>
                        </div><!-- End. #Logo -->
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                            <li><a href="indexNews.php">Sản phẩm</a></li><!--/admin/tin-tuc-->
							<li><a href="indexCat.php">Kĩ Năng</a></li>
						</ul>
                        
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">
