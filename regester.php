<?php
include 'config.php';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    mysqli_query($conn,$sql);

    header("Location: Login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<center>
    <h1>Create Account</h1>

<form method="POST">

    <label>Name: </label><input type="text" name="name" placeholder="Name"><br><br>

    <label>Email: </label><input type="email" name="email" placeholder="Email"><br><br>

    <label>password: </label><input type="password" name="password" placeholder="Password"><br><br>

    <button name="register">Register</button>

</form>

</center>
</body>
</html>
