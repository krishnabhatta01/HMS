<?php
$user_id= $_GET['id'];
require('DB.php');

if($db_object->delete_patient($user_id)){
    header("location:../components/view_patient.php?msg=deleted");
}else{
    header("location:../componentsview_patient.php?msg=Notdeleted");
}


