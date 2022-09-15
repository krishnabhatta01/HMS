<?php
require('../database/DB.php');
require('navbar.php');
require('topbar.php');


$data = $db_object->get_all_patient();
extract($data);


?>



<div class="dash-content">

    <div class="activity">
        <div class="title">
            <h1><?php isset($message) ?></h1>
            <i class="uil uil-clock-three"></i>
            <span class="text">Recent Patients</span>
        </div>

        <div class="activity-data">
            <div class="data names">
                <span class="data-title">Username</span>
                <?php foreach ($data as $one) { ?>
                    <span class="data-list"><?= $one['username'] ?></span>
                <?php } ?>
            </div>
            <div class="data email">
                <span class="data-title">Email</span>
                <?php foreach ($data as $one) { ?>
                    <span class="data-list"><?= $one['email'] ?></span>
                <?php } ?>

            </div>
            <div class="data joined">
                <span class="data-title">Phone</span>
                <?php foreach ($data as $one) { ?>
                    <span class="data-list"><?= $one['phone'] ?></span>
                <?php } ?>

            </div>
            <div class="data type">
                <span class="data-title">Gender</span>
                <?php foreach ($data as $one) { ?>
                    <span class="data-list"><?= $one['gender'] ?></span>
                <?php } ?>

            </div>

            <div class="data type">
                <span class="data-title">Action</span>
                <?php foreach ($data as $one) { ?>
                    <div class="grid-container">
                        <button class="button" style="margin-bottom:17px; align-content:center;"><a style="color:white; " onclick="deleteuser(<?= $one['id'] ?>)"><span>Delete </span></a></button>

                        <button class="button" style="margin-bottom:17px; align-content:center;"><a href="modify_patient.php" style="color:white;"><span>Modify </span></a></button>
                    </div>
                <?php } ?>

            </div>

        </div>
    </div>
</div>
</section>

<script src="../assets/js/index.js"></script>

<script>
    function deleteuser(id) {
        if (confirm("Are you sure you want to delete?")) {
            document.location = '../database/delete_patient.php?id=' + id;
        } else {
            return false;
        }
    }
</script>
<style>
    .grid-container {
        display: grid;
        height: 45px;
        align-content: center;
        grid-template-columns: auto auto;
        gap: 15px;
        padding-top: 35px;
        
    }
</style>

</body>

</html>