<?php
require('../database/DB.php');
$doctor = $db_object->get_doctor();

$patient = $db_object->get_patient();
$admin = $db_object->get_admin();




?>



<div class="dash-content" style="margin-top:15px;">
    <div class="overview">

        <div class="boxes">
            <div class="box box1">
                <i class="uil uil-medkit"></i>
                <span class="text">Total Doctor</span>
                <span class="number"><?= $doctor['id'] ?></span>
            </div>
            <div class="box box2">
                <i class="uil uil-comments"></i>
                <span class="text">Total Patient</span>
                <span class="number"><?= $patient['id'] ?></span>
            </div>
            <div class="box box3">
                <i class="uil uil-share"></i>
                <span class="text">Total Admin</span>
                <span class="number"><?= isset($admin['id']) ?></span>
            </div>
        </div>
    </div>
</div>