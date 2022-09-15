<?php
$user_id= $_GET['id'];
require('DB.php');

if($db_object->delete_user($user_id)){
    header("location:../components/user_management.php?msg=deleted");
}else{
    header("location:../components/user_management.php?msg=Notdeleted");
}


