<?php
include 'config.php';

$sql = "SELECT * FROM category";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <center>

<h1> Categories</h1>

<table border="1">

<tr>
    <th>ID</th>
    <th>Name</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['category_name']; ?></td>
</tr>

<?php } ?>

</table>


<button ><a href="dashboard.php"> back to dashboard page</a></button>

</center>

</body>
</html>



