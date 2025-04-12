<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		$curr_password = $_POST['curr_password'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$photo = $_FILES['photo']['name'];
				$password = password_hash($password, PASSWORD_DEFAULT);

			$sql = "UPDATE admin SET username = '$username', password = '$password', firstname = '$firstname', lastname = '$lastname', photo = '$filename' WHERE id = '".$user['id']."'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Admin profile updated successfully';
			}
			else{
				if($return == 'borrow.php' OR $return == 'return.php'){
					if(!isset($_SESSION['error'])){
						$_SESSION['error'] = array();
					}
					$_SESSION['error'][] = $conn->error;
				}
				else{
					$_SESSION['error'] = $conn->error;
				}
				
			}
			
	}
	else{
		if($return == 'borrow.php' OR $return == 'return.php'){
			if(!isset($_SESSION['error'])){
				$_SESSION['error'] = array();
			}
			$_SESSION['error'][] = 'Fill up required details first';
		}
		else{
			$_SESSION['error'] = 'Fill up required details first';
		}
		
	}

	header('location:'.$return);

?>