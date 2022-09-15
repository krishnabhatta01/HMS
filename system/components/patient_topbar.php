 <?php
 require('../database/DB.php');
            $data = $db_object->get_all_patient();
            extract($data);

 ?>
 
 
 
 
 <section class="dashboard">
     <div class="top">
         <i class="uil uil-bars sidebar-toggle"></i>

         <div class="search-box">
             <i class="uil uil-search"></i>
             <input type="text" placeholder="Search here...">
         </div>

         <img src="../assets/image/profile-img.jpg" alt="">
         <p><?= $data['username'] ?></p>
     </div>


     <script src="../assets/js/index.js"></script>