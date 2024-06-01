   <?php

   $success = getSuccess('page');
 

   if (!empty($success)) {    
   ?>
      <small class="text-green-400 font-medium  p-10 text-3xl" style="font-weight: bold; color:green;font-size:1.1rem; padding:10px 20px"> <i class="fa fa-check mr-5"></i> <?= $success ?></small>

   <?php      
     } ?>