<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../assets/css/index1.css">

<?php
session_start();
session_destroy();
?>



<div class="login">
    <h2 class="active"> sign in </h2>

    <h2 class="nonactive"> sign up </h2>
    <form method="POST" action="../database/login.php">



        <input type="text" class="text" name="username">
        <span>username</span>

        <br>

        <br>

        <input type="password" class="text" name="password">
        <span>password</span>
        <br>

        <br>
        


        <button class="signin" type="submit" name="submit">
            Sign In
        </button>
        <hr>

        <a href="index2.php">Register as patient?</a>
    </form>

</div>