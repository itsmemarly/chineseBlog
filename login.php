<?php  include('serverSide/config.php'); ?>
<?php  include('sorted/registration_login.php'); ?>
<?php  include('headers/head.php'); ?>
	<title>Chinese Blog | Sign in </title>
</head>
<body>
<div class="container">
	<!-- Navbar -->
	<?php include('headers/navigator.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Login</h2>
			<?php include('sorted/errors.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" class="btn" name="login_btn">Login</button>
			<p>
				Not yet a member? <a href="registration.php">Sign up</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->

<!-- Footer -->
	<?php include('footers/mainFooter.php'); ?>
<!-- // Footer -->