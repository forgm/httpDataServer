<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: private_index.php");
   }
?>