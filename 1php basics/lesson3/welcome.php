<?php

if(isset($_GET['username']))
{

	if(empty($_GET['username']))
	{
		echo "username is required field";
		exit();
	}
}
/*
print_r($_GET);*/


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php
		if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['username'])){

			echo "<h2>welcome ".$_GET['username']."</h2>";
		}
		else{

			echo "<h2>welcome user</h2>";
		}


	?>

</body>
</html>