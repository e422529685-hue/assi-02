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
    <title>View News</title>
</head>
<body>
    <center>
        <h1>All News</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
    </tr>

<?php
$query = "SELECT * FROM news";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
       while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['title']."</td>";
    echo "<td><a href='edit_news.php?id=".$row['id']."'>UpDate</a></td>";
    echo "</tr>";
}
    }
} else {
    echo "<tr><td colspan='3'>No News Found</td></tr>";
}
?>

</table>

<br>
<button ><a href="dashboard.php"> back to dashboard page</a></button>
    </center>



</body>
</html>