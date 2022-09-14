<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "official");
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $post = $_POST['post'];
    $query = "select * from user where username='$username' and password='$password' and post='Admin'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location:../admin/index.php");
    } else
        // header("Location:error2.php");
        echo ("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = '../admin/index1.php';</script>");
}






