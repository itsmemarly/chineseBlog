<!-- Always include config data first -->
<?php require_once('serverSide/config.php') ?>

<?php require_once('sorted/publicSide.php') ?>
<?php require_once('sorted/registration_login.php') ?>

<!-- Retrieve all $posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<!DOCTYPE html>
<html>
<head>
	<!-- Title of the page -->
	<title>Chinese Blog</title>
	
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">
	
	<!-- Styling for public pages -->
	<link rel="stylesheet" type="text/css" href="styles/basic.css">

</head>
<body>
<div class="container">
<!-- This container wraps the whole page together -->	
	<?php
	include('headers/navigator.php');
	?>

<p>hello testing</p>
 <!-- Closing page content  -->

<!-- Include footer -->
<?php
include('footers/mainFooter.php');
?>
</div>


</body>
</html>