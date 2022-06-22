<?php
include 'config.php';

$username = $_POST['username'];
$user_password = $_POST['password'];

$user = mysqli_query($conn,"SELECT * from usernames where username='$username' and password='$user_password'");

$check = mysqli_num_rows($user);

if($check > 0) {
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['username'] = $row['username'];
    header("location:admin-home.php");

} else {
    header("location:admin-login.php");
}
?>
