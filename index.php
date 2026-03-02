<?php
session_start();
if(isset($_POST['login'])){
    if($_POST['username']=="admin" && $_POST['password']=="admin123"){
        $_SESSION['admin']="yes";
        header("Location: dashboard.php");
    } else {
        echo "Invalid Login";
    }
}
?>
<form method="POST">
<h2>Admin Login</h2>
Username: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit" name="login" value="Login">
</form>