<?php

	session_start();
	require_once 'connect.php';
	$full_name = $_POST['full_name'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];

	if ($password === $password_confirm) {
			
		//$_FILES['avatar']['name']
		$path = 'uploads/' . time() . $_FILES['avatar']['name'];
		if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
			$_SESSION['message'] = 'Error loading the message';
		    header('Location: ../registry.php');
		}

		$password = md5($password);

		mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
		$_SESSION['message'] = 'Registration was successful!';

		header('Location: ../autor.php');

		} 	

		else {
		$_SESSION['message'] = 'Passwords do not match';
		header('Location: ../registry.php');
		}
?>