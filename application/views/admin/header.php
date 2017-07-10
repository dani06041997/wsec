<head>
		<title>Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset="utf-8">
		<!-- Bootstrap -->
		<link href="<?php echo base_url()?>library/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!-- dataTables -->
		<link href="<?php echo base_url()?>library/css/dataTables.bootstrap.min.css" rel="stylesheet" media="screen">
		<!-- Kuta -->		
		<link href="<?php echo base_url()?>library/css/styles.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dropshow1.css">
		<!--modal-->
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href="css/style.css" rel="stylesheet">	

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.form.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="library/bootstrap/assets/js/html5shiv.js"></script>
		<script src="library/bootstrap/assets/js/respond.min.js"></script>
		<![endif]-->

		<?php

			// include "config.php";

			// Fungsi untuk menampilkan progress bar
			function set_progress($val=0){

				$data = "<div class='progress-container' style='display:none'>
						
							<div class='progress'>
								  <div class='progress-bar progress-bar-info progress-bar-striped active' role='progressbar' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100' style='width: ". $val. "%'>
								  </div>
							</div>

						</div>";

				return $data;

			}
		?>

	</head>
	<body>

<nav class="navbar navbar-top-header hidden-xs" role="navigation">
			<div class="navbar-header">
				<img class="logo" src="<?php echo base_url() ?>library/images/logo.png" />
			</div>
			
			
			
			<ul class="nav navbar-nav navbar-left">
				<h3>&nbsp&nbsp&nbsp&nbsp&nbsp;admin website wsec</h3>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url()?>index.php/welcome/admin_pengaturan"><i class="icon-settings-2"></i></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-user-6"></i>
					</a>
					
					<ul class="dropdown-menu dropdown-user-account">
					
						<li class="account-img-container">
							<img class="thumb account-img" src="<?php echo base_url() ?>library/images/logo1.png"
						</li>
						
						<li class="account-info">
							<h3> admin </h3>
							<p>Apakah anda ingin keluar dari halaman admin ini?</p>
							
						</li>
						
						<li class="account-footer">
							
							<a class="btn btn-sm btn-danger btn-flat" href="<?php echo base_url()?>index.php/welcome/login">Logout</a>
						</li>
						
					</ul>
				</li>
			</ul>
		</nav>