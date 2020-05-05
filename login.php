<?php  include('serverSide/config.php'); ?>
<?php  include('sorted/registration_login.php'); ?>
<?php  include('headers/head.php'); ?>
	<title>Chinese Blog | Sign in </title>
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
	
	<!-- Styling for public pages -->
	<link rel="stylesheet" type="text/css" href="styles/basic.css">
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
				Not yet an admin or user? <a href="registration.php">Sign up as an user</a>
			</p>
		</form>
	</div>
</div>
<!-- // container -->

<!-- Footer -->
	<?php include('footers/mainFooter.php'); ?>
<!-- // Footer -->