<?php
require('../database/DB.php');
require('../components/nav.php');


if (isset($_POST['submit'])) {
    extract($_POST);
    if ($db_object->user($_POST)) {

        $message = "User Successfully created";
    } else {
        $message = "User Creation Failed";
    }
}

?>






<div>
    <h1><?php $message ?></h1>
    <h3 style="margin-left: 40%; margin-top:20px;  padding-bottom: 20px; font-family: 'IBM Plex Sans', sans-serif;">WELCOME ADMINISTRATOR</h3>

    <form action="" method="POST">

        <div class="form-container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>


            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>


            <label for="psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Enter Confirm Password" name="cpassword" required>

            <label for="country"><b>Post</b></label>
            <select name="Post">
                <option value="Doctor">Doctor</option>
                <option value="Cashier">Cashier</option>
                <option value="Clinic_employees">Clinic employees</option>
            </select>

            <button type="submit" name="submit">Create</button>

        </div>
    </form>
</div>