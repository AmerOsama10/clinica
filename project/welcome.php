<?php 
session_start();
if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != "") {
  echo '<h1>Welcome '.$_SESSION['user_name'].'</h1>';
  echo '<h4><a href="logout.php">Logout</a></h4>';
} else { 
  header('location:form.php');
}
?>