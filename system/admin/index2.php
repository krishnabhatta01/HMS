<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/index2.css">

<?php
require('../database/DB.php');


if (isset($_POST['submit'])) {
    extract($_POST);
    if ($db_object->patient($_POST)) {
        
        $message = "Patient Successfully created";
    } else {
        $message = "Patient Creation Failed";
    }
}

?>


<?php isset($message) ?>
<form id="regForm" action="" method="POST">
    <h1>Register as Patient:</h1>
    <!-- One "tab" for each step in the form: -->
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
    </div>

    <button class="button" type="submit" name="submit">
        Register Patient
    </button>
  
</form>
