



<?php
include 'config.php';

if(isset($_POST['add'])){

    $category = $_POST['category'];

    $sql = "INSERT INTO category(category_name)
            VALUES('$category')";

    mysqli_query($conn,$sql);

    header("Location: category.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Category</title>
</head>
<body>
    <center>
        <h1>Add Category</h1>

<form method="POST">

    <label>Category Name: </label><input type="text" name="category"
           placeholder="Category Name">

    <button name="add">Add</button>

</form>


<button ><a href="dashboard.php"> back to dashboard page</a></button>
    </center>



</body>
</html>