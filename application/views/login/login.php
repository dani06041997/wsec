<!DOCTYPE html>
<html>
	<head>
		<title>Login Administrator</title>
	<link href="<?php echo base_url() ?>login/css/bootstrap.min.css" rel="stylesheet" media="screen" />
	<link href="<?php echo base_url() ?>login/css/style_admin.css" rel="stylesheet" media="screen" />
	<script src="<?php echo base_url() ?>login/js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>login/js/jquery.placeholder.js" type="text/javascript"></script>
	</head>
<body>

<div id="wrap">
	<div class="header">
		<h3></h3>
	</div>

	<div class="container">
		<div class="login">
			<?php if($alert == 'on') { ?>
			<?php echo $alert_msg; ?>
			<div class='alert alert-danger'>Login Gagal</div>
			<?php } ?>
			<form method="post" action="<?php echo base_url()?>index.php/welcome/proses_login">
				<input type="text" name="username" id="username" class="input" placeholder="Username" />
				<input type="password" name="password" id="password" class="input" placeholder="Password" />
				<input type="submit" class="button" value="Log In" />
			</form>
		</div>
		<div id="login_response"></div>
	</div>
</div>
<div id="footer">
	
</div>
</body>
</html>