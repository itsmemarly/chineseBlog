<?php include('../serverSide/config.php'); ?>
<?php  include('admin_functions.php'); ?>
<?php include('../headers/adminHeader.php'); ?>
<?php include('../sorted/errors.php')?>
<!-- Get all topics from DB -->
<?php $topics = getAllTopics();	?>
	<title>Admin | Manage Topics</title>
</head>
<body>
	<!-- admin navbar -->
	<?php include('../headers/adminNavbar.php') ?>
	<div class="container content">
		<!-- Left side menu -->
		<?php include('menu.php') ?>

		<!-- Middle form - to create and edit -->
		<div class="action">
			<h1 class="page-title">Create / Edit Topics</h1>
			<form method="post" action="<?php echo BASE_URL . 'admin/topics.php'; ?>" >
				<!-- validation errors for the form -->
				<?php include('../sorted/errors.php') ?>
				<!-- if editing topic, the id is required to identify that topic -->
				<?php if ($isEditingTopic === true): ?>
					<input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>">
				<?php endif ?>
				<input type="text" name="topic_name" value="<?php echo $topic_name; ?>" placeholder="Topic">
				<!-- if editing topic, display the update button instead of create button -->
				<?php if ($isEditingTopic === true): ?> 
					<button type="submit" class="btn" name="update_topic">UPDATE</button>
				<?php else: ?>
					<button type="submit" class="btn" name="create_topic">SAVE</button>
				<?php endif ?>
			</form>
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
			<?php include('messages.php') ?>
			<?php if (empty($topics)): ?>
				<h1>No topics in the database.</h1>
			<?php else: ?>
				<table class="table">
					<thead>
						<th>N</th>
                        <th>Topic Name</th>
                        <th>Topic Slug</th>
						<th colspan="2">Action</th>
					</thead>
					<tbody>
					<?php foreach ($topics as $key => $topic): ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
                            <td><?php echo $topic['topic_name']; ?></td>
                            <td><?php echo $topic['topic_slug']; ?></td>
							<td>
								<a class="fa fa-pencil btn edit"
									href="topics.php?edit-topic=<?php echo $topic['id'] ?>">
								</a>
							</td>
							<td>
								<a class="fa fa-trash btn delete"								
									href="topics.php?delete-topic=<?php echo $topic['id'] ?>">
								</a>
							</td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
		<!-- // Display records from DB -->
	</div>
</body>
</html>