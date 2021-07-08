<?php
if($_SERVER['REQUEST_METHOD']=='POST')


$target_file='uploads/'.$_FILES['file']['name'];
	echo "<pre>";
	var_dump($_FILES);

	if($_FILES['file']['size']>=10240)
	{
		

		echo "cant upload this file , max size is 10K";
	}
	elseif (!($_FILES['file']['type']=='image/jpeg'||$_FILES['file']['type']=='image/jpg'||$_FILES['file']['type']=='image/png'||$_FILES['file']['type']=='image/gif')) {
				echo "upload image files only with this extension(jpeg-jpg-gif-png)";

	}
	else{
		move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
		echo "uploaded";

		var_dump(pathinfo($target_file));
		echo pathinfo($target_file)['basename'];
		echo "<br>".basename($target_file,'.jpg');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
		
		<input type="file" name="file" >
		<button>upload</button>


	</form>

</body>
</html>