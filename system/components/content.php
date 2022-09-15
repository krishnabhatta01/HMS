<?php
require('../database/DB.php');

$data = $db_object->get_user_data();
extract($data);


?>



<div class="dash-content">

    <div class="activity">
        <div class="title">
            <h1><?php isset($message) ?></h1>
            <i class="uil uil-clock-three"></i>
            <span class="text">Recent Users</span>
        </div>

        <div class="activity-data">
            <div class="data names">
                <span class="data-title">Name</span>
                <?php foreach ($data as $one) { ?>
                    <span class="data-list"><?= $one['username'] ?></span>
                <?php } ?>
            </div>
            <div class="data email">
                <span class="data-title">Email</span>
                <?php foreach ($data as $one) { ?>
                    <span class="data-list"><?= $one['username'] ?></span>
                <?php } ?>

            </div>
            <div class="data joined">
                <span class="data-title">Joined</span>
                <?php foreach ($data as $one) { ?>
                    <span class="data-list"><?= $one['created_at'] ?></span>
                <?php } ?>

            </div>
            <div class="data type">
                <span class="data-title">Post</span>
                <?php foreach ($data as $one) { ?>
                    <span class="data-list"><?= $one['Post'] ?></span>
                <?php } ?>

            </div>

            <div class="data type">
                <span class="data-title">Action</span>
                <?php foreach ($data as $one) { ?>
                    <button class="button"><a style="color:white;" onclick="deleteuser(<?= $one['id'] ?>)"><span>Delete </span></a></button>
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
            document.location = '../database/delete_user.php?id=' + id;
        } else {
            return false;
        }
    }
</script>


</body>

</html>