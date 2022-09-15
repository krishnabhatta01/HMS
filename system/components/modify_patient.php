<?php
require('../database/DB.php');
require('navbar.php');
require('topbar.php');


$data = $db_object->get_all_patient();
extract($data);



?>
<link rel="stylesheet" href="../assets/css/index2.css">

<div class="dash-content">
    <form id="regForm" style="margin-top:1px;" action="" method="POST">
        <span>
            <h2 style="padding-bottom:10px;">Modify Patient</h3>
        </span>
        <div>Name:
            <p><input placeholder="First name..." name="fname" value="<?= $data['first_name'] ?>" required></p>
            <p><input placeholder="Last name..." name="lname" required></p>
            <label for="gender">Gender</label>
            <p>
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                    
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
                    <option value="post">Patient</option>
                    
                </select>
            </p>
        </div>

        <button class="button" type="submit" name="submit">
            Register Patient
        </button>

    </form>
</div>