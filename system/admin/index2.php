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

    <button class="signin" type="submit" name="submit">
        Register Patient
    </button>
    <!--  <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" name="final" onclick="nextPrev(1)">Next</button>
        </div>
    </div> -->

    <!-- <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>

    </div> -->

</form>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            document.getElementByName("final").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            document.getElementByName("final").innerHTML = "Submit";
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>