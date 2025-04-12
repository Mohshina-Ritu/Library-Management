<?php
	include 'includes/session.php';

	if(isset($_POST['add']))
	{
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$sql = "INSERT INTO books (isbn, category_id, title, author) VALUES ('$isbn', '$category', '$title', '$author')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else
	{
		$_SESSION['error'] = 'Fill up add form first';
	}
	header('location: book.php');
?>