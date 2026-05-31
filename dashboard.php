<?php
include 'config.php';

if(!isset($_SESSION['user_id'])){
    header("Location: Login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body >
    <center>
        <h1>Dashboard</h1>


*-><a href="add_category.php">Add Category</a><br><br>

*-><a href="category.php">View Categories</a><br><br>


*-><a href="add_new.php">Add News</a><br><br>

*-><a href="news.php">View News</a><br><br>

*-><a href="deleted_news.php">Deleted News</a><br><br>

    </center>


</body>
</html>