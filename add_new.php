<?php
include 'config.php';

$categories = mysqli_query($conn, "SELECT * FROM category");

if(isset($_POST['add'])){

    $title = $_POST['title'];
    $category = $_POST['category']; 
    
    $details = $_POST['details'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    if(!is_dir("image")){
        mkdir("image");
    }

    move_uploaded_file($tmp, "image/" . $image);

    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO news(title, category_id, details, image, user_id)
            VALUES('$title', '$category', '$details', '$image', '$user_id')";

    if(mysqli_query($conn, $sql)){
        header("Location: news.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add News</title>
</head>
<body>

<center>

<h2>Add News</h2>

<form method="POST" enctype="multipart/form-data">

    <input type="text" name="title" placeholder="News Title" required>
    <br><br>

    <select name="category" required>

        <?php while($cat = mysqli_fetch_assoc($categories)){ ?>

            <option value="<?= $cat['id']; ?>">
                <?= $cat['category_name']; ?>
            </option>

        <?php } ?>

    </select>

    <br><br>

    <textarea name="details" placeholder="News Details" required></textarea>

    <br><br>

    <input type="file" name="image" required>

    <br><br>

    <button type="submit" name="add">Add News</button>

</form>

<br>

<button>
    <a href="dashboard.php">Back to Dashboard</a>
</button>

</center>

</body>
</html>
