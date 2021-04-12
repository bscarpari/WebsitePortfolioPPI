<?php
   if(isset($_POST['new_theme'])){
       setcookie('theme', $_POST['new_theme'], time()+100000000);
   }
   header("Location: index.php");
?>