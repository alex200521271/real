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

			

			<form class = "reg" action="reg/signIN.php" method="post">
			<label>Login</label>
			<input type="text" name = "login" placeholder="Enter login">
			<label>Password</label>
			<input type="password" name = "password" placeholder="Enter password">
			<button type="submit">Enter</button>
			<p class="autor">
				Don't you have an account? <a href="registry.php">Register</a>
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