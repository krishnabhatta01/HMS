<?php
require('../database/DB.php');
require('../components/doc_navbar.php');
require('../components/doc_topbar.php');


?>



<div class="dash-content">

    <div class="activity">
        <div class="title">
            <h1><?php isset($message) ?></h1>
            <i class="uil uil-clock-three"></i>
            <span class="text">Recent Prescriptions</span>
        </div>

        <div class="activity-data">
            <div class="data names">
                <span class="data-title">Patient</span>

                <span class="data-list"></span>

            </div>
            <div class="data email">
                <span class="data-title">Appointment Date</span>

                <span class="data-list"></span>


            </div>
            <div class="data joined">
                <span class="data-title">Appointment Time</span>

                <span class="data-list"></span>


            </div>
            <div class="data type">
                <span class="data-title">Disease</span>

                <span class="data-list"></span>


            </div>
            <div class="data type">
                <span class="data-title">Allergy</span>

                <span class="data-list"></span>


            </div>
            <div class="data type">
                <span class="data-title">Prescribe</span>

                <span class="data-list"></span>


            </div>

            <div class="data type">
                <span class="data-title">Action</span>

                <div class="grid-container">
                    <button class="button" style="margin-bottom:17px; align-content:center;"><a style="color:white;"><span>Post Solution Report </span></a></button>

                   
                </div>


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