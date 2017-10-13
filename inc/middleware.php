<?php 
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
	
}else{
  //Bad Session params
  if (session_destroy()) {
    header('Location: signup.php');
    exit();
  }
}