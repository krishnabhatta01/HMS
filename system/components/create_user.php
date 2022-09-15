<?php
require('../database/DB.php');
require('navbar.php');
require('topbar.php');


if (isset($_POST['submit'])) {
    extract($_POST);
    if ($db_object->user($_POST)) {

        $message = "User Successfully created";
    } else {
        $message = "User Creation Failed";
    }
}

?>



<link rel="stylesheet" href="../assets/css/index2.css">

<div class="dash-content">
    <form id="regForm" style="margin-top:1px;" action="" method="POST">

        <div>Name:
            <p><input placeholder="First name..." name="fname" required></p>
            <p><input placeholder="Last name..." name="lname" required></p>

            <label for="gender">Gender</label>
            <p>
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>
            </p>
        </div>
        <div>Contact Info:
            <p><input placeholder="E-mail..." name="email" required></p>
            <p><input placeholder="Phone..." name="phone" required></p>
        </div>

        <div>Login Info:
            <p><input placeholder="Username..." name="uname" required></p>
            <p><input placeholder="Password..." name="pword" type="password" required></p>
            <label for="post">Post</label>
            <p>
                <select name="post">
                    <option value="male">Doctor</option>
                    <option value="female">Cashier</option>
                    <option value="female">Admin</option>
                </select>
            </p>
        </div>

        <button class="button" type="submit" name="submit">
            Register Patient
        </button>

    </form>
</div>