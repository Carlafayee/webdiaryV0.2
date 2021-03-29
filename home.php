<?php 
session_start();
if($_SESSION['users']) {
  echo '<h4>Welcome '.$_SESSION['full_name'].'</h4>';
} 
else { 
  header('location:index.php');
}
?>