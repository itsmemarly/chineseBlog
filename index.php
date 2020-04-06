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

	<?php
	include('sorted/banner.php');
	?>
<!-- All content  -->	
<div class="watchContent">
	<h2 class="contentTitle">Recent Articles:</h2>
	<hr>
<!-- more content still to come here ... -->

<!-- Add this ... -->
<?php foreach ($posts as $post): ?>
	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . 'images/' . $post['image']; ?>" class="post_image" alt="">
		<?php if (isset($post['topic']['name'])): ?>
			<a 
				href="<?php echo BASE_URL . 'filter_posts.php?topic=' . $post['topic']['id'] ?>"
				class="btn category">
				<?php echo $post['topic']['name'] ?>
			</a>
		<?php endif ?>

		<a href="one_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
</div>
<!-- Closing page content  -->

<!-- Include footer -->
<?php
include('footers/mainFooter.php');
?>
</div>


</body>
</html>