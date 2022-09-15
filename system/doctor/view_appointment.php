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
            <span class="text">Recent Appointments</span>
        </div>

        <div class="activity-data">
            <div class="data names">
                <span class="data-title">Patient</span>
                
                    <span class="data-list"></span>
                
            </div>
            <div class="data email">
                <span class="data-title">Gender</span>
                
                    <span class="data-list"></span>
                

            </div>
            <div class="data joined">
                <span class="data-title">Phone</span>
                
                    <span class="data-list"></span>
                

            </div>
            <div class="data type">
                <span class="data-title">Email</span>
                
                    <span class="data-list"></span>
                

            </div>
            <div class="data type">
                <span class="data-title">Date</span>
                
                    <span class="data-list"></span>
                

            </div>
            <div class="data type">
                <span class="data-title">Time</span>
                
                    <span class="data-list"></span>
                

            </div>

            
        </div>
    </div>
</div>
</section>

<script src="../assets/js/index.js"></script>


</body>

</html>