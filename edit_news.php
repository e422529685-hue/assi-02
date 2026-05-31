<?php
include 'config.php';

if(!isset($_SESSION['user_id'])){
    header("Location: Login.php");
    exit();
}

$id = $_GET['id'];

$query = "SELECT * FROM news WHERE id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){
    $title = $_POST['title'];
    $details = $_POST['details'];

    $update = "UPDATE news
               SET title='$title', details='$details'
               WHERE id=$id";

    mysqli_query($conn, $update);

    header("Location: news.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit News</title>
</head>
<body>

<center>

<h1>Edit News</h1>

<form method="POST">

    Title:<br>
    <input type="text" name="title"
           value="<?= $row['title']; ?>">
    <br><br>

    Details:<br>
    <textarea name="details"><?= $row['details']; ?></textarea>
    <br><br>

        <input type="file" name="image" required><br><br>


    <button type="submit" name="update">
        Update
    </button>

</form>

<br>

<button>
    <a href="dashboard.php">
        Back to Dashboard
    </a>
</button>

</center>

</body>
</html>