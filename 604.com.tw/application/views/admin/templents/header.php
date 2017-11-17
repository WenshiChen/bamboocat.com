<?$asseste=base_url()."assests/admin/"?>
<!doctype html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=$asseste;?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=$asseste;?>vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=$asseste;?>vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?=$asseste;?>vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=$asseste;?>css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?=$asseste;?>css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=$asseste;?>img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=$asseste;?>img/favicon.png">
	<script src="<?=$asseste;?>vendor/jquery/jquery.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="<?=$asseste;?>img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>

				<div id="navbar-menu">

				<ul class="nav navbar-nav navbar-right">
				<li>HI <?=$this->session->userdata('user_name')?></li>

				<?if(!empty($this->session->userdata('user_ischage'))){?>
				<li><a href=<?=base_url()."admin/un_userchange"?>>還原管理者身份</a></li>
				<?}?>
				</ul>
				
				</div>
			 
				<!-- <div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=$asseste;?>img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="#downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> 
					</ul>
				</div> -->
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?=base_url()."admin"?>" class=""><i class="lnr lnr-home"></i> <span>首頁</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> 
							<span>商品</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse">
								<ul class="nav">
									<li><a href="<?=base_url()."admin/product/create"?>" class="">新增商品</a></li>
									<li><a href="<?=base_url()."admin/product/createcategories"?>" class="">類別管理</a></li>
									<li><a href="<?=base_url()."admin/product"?>" class="">商品首頁</a></li>
								</ul>
							</div>
						</li>
					 
						<li>
							<a href="#post" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> 
							<span>文章</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="post" class="collapse">
								<ul class="nav">
									<li><a href="<?=base_url()."admin/createpost"?>" class="">新增文章</a></li>
									<li><a href="<?=base_url()."admin/createpostclass"?>" class="">類別管理</a></li>
									<li><a href="<?=base_url()."admin/postlist"?>" class="">文章管理首頁</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?=base_url()."admin/user"?>" class=""><i class="lnr lnr-dice"></i> <span>使用者</span></a></li>
						<li><a href="<?=base_url()."admin/order"?>" class=""><i class="lnr lnr-dice"></i> <span>訂單</span></a></li>
					<!-- 	<li><a href="typography.html" class="active"><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>

						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> -->
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				
			