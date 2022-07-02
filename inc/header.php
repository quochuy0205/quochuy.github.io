<?php
include 'connect.php';
session_start();
$cart=(isset($_SESSION['cart']))? $_SESSION ['cart'] :[];
$user=(isset($_SESSION['user']))? $_SESSION ['user'] :[];
 $sql = "SELECT * FROM danhmucsanpham ORDER BY madm ASC"; 
 $result= mysqli_query($conn,$sql);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website HNC</title>	
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/color-01.css">
	<script src="js/jquery-3.1.1.js" type="text/javascript"></script>
    <script src="../js/jquery.jcarousel.pack.js" type="text/javascript"></script>
    <script src="../js/jquery-func.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
    p.gia_sanpham {
        text-align: center;
        color: red;
        font-size: 15px;
        font-weight: bold;
    }
    .list_trang{
        padding:0;
        margin:0;
        list-style:none;
    }

    ul.list_trang li {
       float:left;
       padding:5px;
       margin:5px;
       background:lightblue;
    }
    .chitietsanpham
			{
				height:auto;
				width:90%;
				margin: 0 auto;
			}
		.hinhanh_ctsanpham
			{
				float:left; 
				width:50%;
			}
		.ctsp
			{
				float:right;
				width:45%;
			

			}
    </style>
</head>
<body class="home-page home-01 ">
<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								
								<?php if(isset($user['name'])) { ?> 

									</ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li>
                                <a href="cart.php" class="dropdown-toggle"  role="button"
                                    aria-haspopup="true" aria-expanded="false"> <span
                                        class="glyphicon glyphicon-shopping-cart"></span>
                                    Giỏ Hàng</span></a>
                            </li>

                            
                            <li>
                        
                            <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Tài khoản</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    Họ Tên: <?php echo $user['name'] ?>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="dangxuat.php" >  
                                    Đăng Xuất
                                </a>
                            </div>
                        </li>
                        </li>
                        </ul>
                        
                            <?php } else {?> 

								<li class="menu-item" ><a title="Register or Login" href="dangnhap.php">Đăng Nhập</a></li>
								<li class="menu-item" ><a title="Register or Login" href="dangky.php">Đăng Ký</a></li>
								<?php } ?>
							
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">

						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="#" id="form-search-top" name="form-search-top">
									<input type="text" name="search" value="" placeholder="Search here...">
									<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									<div class="wrap-list-cate">
										<input type="hidden" name="product-cate" value="0" id="product-cate">
										<a href="#" class="link-control">All Category</a>
										<ul class="list-cate">
											<li class="level-0">All Category</li>
											<li class="level-1">-Electronics</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Headphone & Headsets</li>
											<li class="level-2">Mp3 Player & Acessories</li>
											<li class="level-1">-Smartphone & Table</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Mp3 Player & Headphones</li>
											<li class="level-2">Table & Accessories</li>
											<li class="level-1">-Electronics</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Headphone & Headsets</li>
											<li class="level-2">Mp3 Player & Acessories</li>
											<li class="level-1">-Smartphone & Table</li>
											<li class="level-2">Batteries & Chargens</li>
											<li class="level-2">Mp3 Player & Headphones</li>
											<li class="level-2">Table & Accessories</li>
										</ul>
									</div>
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							
							<div class="wrap-icon-section minicart">
								<a href="cart.php" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="title">Giỏ Hàng</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
	
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="trangchu.php" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="sanpham.php" class="link-term mercado-item-title">Chuyến Đi</a>
								</li>
								<li class="menu-item">
									<a href="cart.php" class="link-term mercado-item-title">Giỏ Hàng</a>
								</li>
		
																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    <script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.flexslider.js"></script>
	<script src="assets/js/chosen.jquery.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/functions.js"></script>
    </body>
</html>