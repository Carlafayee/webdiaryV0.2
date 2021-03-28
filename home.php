
<h1> TEST </h1>
<?php 
session_start();
if($_SESSION['users']) {
  echo '<h1>Welcome '.$_SESSION['full_name'].'</h1>';
  echo '<h4><a href="logout.php">Logout</a></h4>';
} 

else { 
  header('location:index.php');
}
?>