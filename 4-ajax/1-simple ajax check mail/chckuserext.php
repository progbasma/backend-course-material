<?php 

if (isset($_POST['email_check'])) {
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "training center";
  $email=$_POST['email'];
    
      try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
          
         
           $stmt = $conn->prepare("SELECT * FROM users WHERE user_email = :useremail");
         
         $stmt->bindParam(':useremail', $email);
         $stmt->execute();
          
          
          
          
      $users = $stmt->fetchAll();

      if ($users)
          
      {
          
          echo "email exists , please choose another email";
      
      }
	  else{
		  echo "valid email";
		  
	  }
      
          

          
          }
      catch(PDOException $e)
          {
          echo $sql . "<br>" . $e->getMessage();
          }

      $conn = null;
      
}



?>