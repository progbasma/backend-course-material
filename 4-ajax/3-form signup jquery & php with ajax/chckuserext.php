<?php 

if (isset($_POST['email_check'])) {
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "training center";

      try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
          $stmt = $conn->prepare("SELECT * FROM users WHERE user_email = ? ");
      $stmt->execute([$_POST['email']]);
      $user = $stmt->fetch();

      if ($user)
      {
        echo "taken";
      }
      else{
         echo "not_taken";
        
      }
          

          
          }
      catch(PDOException $e)
          {
          echo $sql . "<br>" . $e->getMessage();
          }

      $conn = null;
      

}



?>