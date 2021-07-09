<?php 

if (isset($_POST['email_check'])) {
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "onlinetest";
  $email=$_POST['email'];
    
      try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          // set the PDO error mode to exception
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // prepare sql and bind parameters
          
         
           $stmt = $conn->prepare("SELECT * FROM users WHERE user_email like :useremail");
          $useremaild="%$email%";
         $stmt->bindParam(':useremail', $useremaild);
         $stmt->execute();
          
          
          
          
      $users = $stmt->fetchAll();

      if ($users)
          
      {
          $allusers="";
          foreach($users as $user){
              
                $allusers.="<div class='c1'><p>".$user['user_email']."</p></div>"; 
              
          }
          echo $allusers;
      
      }
      
          

          
          }
      catch(PDOException $e)
          {
          echo $sql . "<br>" . $e->getMessage();
          }

      $conn = null;
      exit();

}



?>