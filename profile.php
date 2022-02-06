<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: autor.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <?php 
    $title = "Profile";
    require_once "blocks/head.php";
     ?>
</head>
<body>

    <?php require_once "blocks/header.php" ?>
    <div id = "wrapper">
        <div id = "leftCol">

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" style="border-radius: 10px;" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a><br>
        <a href="reg/logout.php" class="logout">Log out</a>
    </form>

    </div>
        

<?php require_once "blocks/rightCol.php" ?>
</div>
<?php require_once "blocks/footer.php" ?>
</body>
</html>

</body>
</html>