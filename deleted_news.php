<?php
include 'config.php';

$sql = "SELECT * FROM news
        WHERE deleted=1";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Deleted News</title>
</head>
<body>
    <center>
        <h2>Deleted News</h2>

<table border="1" cellpadding="10">

<tr>
    <th>Title</th>
    <th>Details</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?= $row['title']; ?></td>

<td><?= $row['details']; ?></td>

</tr>

<?php } ?>

</table>

<button ><a href="dashboard.php"> back to dashboard page</a></button>


    </center>


</body>
</html>

