<?php
include 'config.php';

mysqli_set_charset($conn, "utf8mb4");

$sql = "SELECT news.*, category.category_name
        FROM news
        JOIN category
        ON news.category_id = category.id
        WHERE news.deleted = 0
        ORDER BY news.id ASC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>News</title>
</head>
<body>

<center>

<h2>All News</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Category</th>
    <th>Details</th>
    <th>Image</th>
    <th>Actions</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

    <td><?= $row['id']; ?></td>

    <td><?= $row['title']; ?></td>

    <td><?= $row['category_name']; ?></td>

    <td><?= $row['details']; ?></td>

    <td>
        <img src="image/<?= $row['image']; ?>" width="100" height="100">
    </td>

    <td>
        <a href="edit_news.php?id=<?= $row['id']; ?>">Edit</a>
        |
        <a href="delete_news.php?id=<?= $row['id']; ?>">Delete</a>
    </td>

</tr>

<?php } ?>

</table>

<br><br>

<a href="dashboard.php">Back To Dashboard</a>

</center>

</body>
</html>