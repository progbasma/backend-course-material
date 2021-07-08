<?php
$msg="";
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "training center";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM users WHERE user_email=:useremail");
  $stmt->bindParam(':useremail', $_POST['email']);
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->fetchAll();
  if($result){

	 foreach ($result as $row) {
	  	if($row['user_password']==md5($_POST['password']))
	  	{
	  		$_SESSION['username']=$row['user_name'];

	  		header('location:welcome.php');
	  	}
	  	else{
	  		$msg="this password doesnot match for this email , <a href='#'> forgot passowrd? </a?";


	  	}
	  }

  }
  else{

  	$msg="this email not found in DB";
  }
 


 
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;


}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style>
		form{
			
			border-radius:50px;
			
		}
	
	</style>
    <title>Hello, world!</title>
  </head>
  <body>
    <form action="" method="post" class="w-75 my-3 p-3 mx-auto border border-info " >
		<h2 class="text-center text-secondary">sign in</h2>
	 
	  <div class="form-group">
		<label for="email">Email address</label>
		<input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
	  </div>
	 
	  <div class="form-group">
		<label for="Password">Password</label>
		<input type="password" class="form-control" id="Password" name="password">
	  </div>
	  
	  <div class="form-group form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
		<label class="form-check-label" for="exampleCheck1">remember me ? </label>
	  </div>
	  <button type="submit" class="btn btn-primary">sig in </button>
	</form>
	<div class="alert text-danger text-center"><?php echo $msg ?></div>
	
	
	
	
	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>