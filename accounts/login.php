<?php 
  session_start();

  include '../inc/db.php';
  include '../inc/functions.php';
  $json = [];
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = p_s($_POST['email']);
    $password = p_s($_POST['password']);

    
    /* ==============================================
    Data not empty
    ================================================*/
    if (!empty($email) && !empty($password)) {
      /* ==============================================
      first make sure if the email exist or not 
      ================================================*/
      if (checkIfEmailExist($email)) {
          
        /* ==============================================
        Check Password
        ================================================*/
        if (checkPassword($email, $password)) {

			    $sql = "SELECT * FROM users WHERE email = '$email'";
			    $run = mysqli_query($conn,$sql);
		    	while ($rows = mysqli_fetch_assoc($run)) {
		    		$_SESSION['id']= $rows['id'];
		    		$_SESSION['name']= $rows['name'];
		    		$_SESSION['email']= $rows['email'];
		    		$_SESSION['bio']= $rows['bio'];
		    		$_SESSION['lastactive']= $rows['lastactive'];
		    		header('Location: ../index.php?logged');exit();
		    	}
		         
        }else{
        	header('Location: ../signup.php?er1');exit();
        }
      }else{
      	header('Location: ../signup.php?er2');exit();
      }
    }else{
    	header('Location: ../signup.php?er3');exit();
    }


  }