<?php include('serverSide/config.php');
include('sorted/publicSide.php'); 

	// Get posts under a specific topic
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
		$posts = getPublishedPostsByTopic($topic_id);
	}
	$topics = getAllTopics();
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
	<?php include('headers/navigator.php'); ?>
<!-- // End of the navigator -->
<!-- Start content -->
<div class="watchContent">
	<h2 class="contentTitle">
		Articles on <u><?php echo getTopicNameById($topic_id); ?></u>
	</h2>
	<hr>
	<div class="post-sidebar" style="float: left;">
			<div class="card">
				<div class="card-header">
					<h2>Topics</h2>
				</div>
				<div class="card-content">
					<?php foreach ($topics as $topic): ?>
						<a href="<?php echo BASE_URL . 'filter_post.php?topic=' . $topic['id'] ?>">
							<?php echo $topic['name']; ?>
						</a> 
					<?php endforeach ?>
				</div>
			</div>
		</div>

	<?php foreach ($posts as $post): ?>
		<div class="post" style="margin-left: 0px;">
			<img src="<?php echo BASE_URL . 'images/' . $post['image']; ?>" class="post_image" alt="">
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
</div>
<!-- // End content -->

<!-- // End container -->

<!-- Start footer -->
	<?php include('footers/mainFooter.php'); ?>
<!-- // End footer -->