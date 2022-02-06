<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<?php 
	$title = "Registration/authorization";
	require_once "blocks/head.php";
	 ?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<div id = "wrapper">
		<div id = "leftCol">

			

			<form class = "reg" action="reg/signUP.php" method="post" enctype="multipart/form-data">
			<label>Name</label>
			<input type="text" name = "full_name" placeholder="Enter Name">
			<label>Login</label>
			<input type="text" name = "login" placeholder="Enter Login">
			<label>Email</label>
			<input type="email" name = "email" placeholder="Enter Email">
			<label>Image</label>
			<input type="file" name="avatar">
			<label>Password</label>
			<input type="password" placeholder="Enter password" name="password">
			<label>Password Confirmation</label>
			<input type="password" placeholder="Enter password" name="password_confirm">
			<button type="submit">Enter</button>
			<p class="autor">
				Do you already have an account? <a href="autor.php">Log in</a>
			</p>
			<?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
			
			</form>

			</div>
		

<?php require_once "blocks/rightCol.php" ?>
</div>
<?php require_once "blocks/footer.php" ?>
</body>
</html>