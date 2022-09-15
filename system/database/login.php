<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "official");
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "SELECT * 
        FROM user WHERE username='$username' AND password='$password'
        ";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location:../admin/index.php");
    } else
        // header("Location:error2.php");
        echo ("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = '../admin/index1.php';</script>");
}

//login for Doctor
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * 
        FROM doctb WHERE username='$username' AND password='$password'
        ";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location:../doctor/index.php");
    } else
        // header("Location:error2.php");
        echo ("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = '../admin/index1.php';</script>");
}


//login for patient
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * 
        FROM patient WHERE username='$username' AND password='$password'
        ";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location:../patient/index.php");
    } else
        // header("Location:error2.php");
        echo ("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = '../admin/index1.php';</script>");
}




