
<?php
include 'config.php';

$id = $_GET['id'];

$sql = "UPDATE news
        SET deleted=1
        WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location: news.php");
?>





