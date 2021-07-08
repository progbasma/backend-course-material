
<?php


$msg="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=md5($_POST['password']);


	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "training center";

	try {
	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
	  $stmt = $conn->prepare("INSERT INTO users (user_name, user_email, user_mobile,user_password)
	  VALUES (:user_name, :user_email, :user_mobile,:user_password)");
	  $stmt->bindParam(':user_name', $username);
	  $stmt->bindParam(':user_email', $email);
	  $stmt->bindParam(':user_mobile', $mobile);
	  $stmt->bindParam(':user_password', $password);


	  //$conn->exec($sql);
	  $stmt->execute();
	  $last_id = $conn->lastInsertId();

	  $msg= "New record created successfully with id = ".$last_id;
	} 
	catch(PDOException $e) {
	  $msg="error in insert data in DB";
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
		<h2 class="text-center text-secondary">sign up</h2>
	  <div class="form-group">
		<label for="username">username</label>
		<input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
	  </div> 
	  <div class="form-group">
		<label for="email">Email address</label>
		<input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
	  </div>
	  <div class="form-group">
		<label for="mobile">mobile</label>
		<input type="text" class="form-control" id="mobile" name="mobile" aria-describedby="emailHelp">
	  </div>
	  <div class="form-group">
		<label for="Password">Password</label>
		<input type="password" class="form-control" id="Password" name="password">
	  </div>
	  <div class="form-group">
		<label for="confirmPassword">confirmPassword</label>
		<input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
	  </div>
	  <div class="form-group form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
		<label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<div class="alert alert-danger"><?php echo $msg ?></div>
	
	
	
	
	

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