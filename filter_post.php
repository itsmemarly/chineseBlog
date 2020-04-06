<?php include_once('serverSide/config.php');
include_once('sorted/publicSide.php'); 

	// Get posts under a specific topic
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
		$posts = getPublishedPostsByTopic($topic_id);
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <!-- Title of the page -->
        <title>Chinese Blog</title>
        <?php include_once('headers/head.php') ?>
    
    
</head>
<body>
<div class="container">
<!-- Get navigator -->
	<?php include( ROOT_PATH . 'headers/navigator.php'); ?>
<!-- // End of the navigator -->
<!-- Start content -->
<div class="watchContent">
	<h2 class="contentTitle">
		Articles on <u><?php echo getTopicNameById($topic_id); ?></u>
	</h2>
	<hr>
	<?php foreach ($posts as $post): ?>
		<div class="post" style="margin-left: 0px;">
			<img src="<?php echo BASE_URL . 'images/' . $post['image']; ?>" class="post_image" alt="">
			<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
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
<!-- // End content -->
</div>
<!-- // End container -->

<!-- Start footer -->
	<?php include( ROOT_PATH . 'footers/mainFooter.php'); ?>
<!-- // End footer -->