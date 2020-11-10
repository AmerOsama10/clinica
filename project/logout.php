<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
if(empty($_SESSION['username'])) 

   echo '<h1>You have cleaned session</h1>';
   header('Refresh: 3; URL = form.php');
?>




