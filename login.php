<?php
session_start();

$username = "admin";
$password = "123456";

if(isset($_POST['login'])){

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user === $username && $pass === $password){

        session_regenerate_id(true);

        $_SESSION['user'] = $user;
        $_SESSION['last_activity'] = time();

        header("Location: dashboard.php");
        exit();

    }else{
        echo "Invalid Login";
    }
}
?>

<form method="POST">
    <h2>Login</h2>

    <input type="text" name="username" placeholder="Username" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <button name="login">Login</button>
</form>
