<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("SQL Error: " . mysqli_error($conn));
    }

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);

        $_SESSION['user_id'] = $user['id'];

        
        header("Location: dashboard.php");


        exit();

    }else{
        echo "Wrong Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
    <center>
        <h1>Login</h1>

        <form method="POST">

            <label>Name: </label><input type="email" name="email" placeholder="Email"><br><br>

            <label>Password: </label><input type="password" name="password" placeholder="Password"><br><br>

            <button type="submit" name="login">Login</button>

        </form>
    </center>

</body>
</html>