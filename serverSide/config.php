<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "zhBlog");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants

	define('BASE_URL', 'http://localhost/blog/chineseBlog/');
?>