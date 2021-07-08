<?php

echo "welcome to our first php file<br>";

$myname='basma';
$x=12345.54325;


echo "welcome".$myname." in php <br>";
echo ('basma');
echo "basma";
print('basma');


$v1='welcome to our first php file';
echo "<br>".strpos($v1, "f");
echo "<br>".is_nan($x);
echo "<br>".rand(0,10);
echo "<br>".round($x);

if(is_nan($x)==0)
{
	echo "<br> IT IS A Number";
}
else{
echo "<br> IT IS NOT A Number";

}

$n="ahmed ";

function myfun($x1,$x2)
{

	return $x1+$x2;

}

$result=myfun(2,40);
echo $result;



$y=1;
echo ++$y;

for($x=0;$x<=100;$x++)
{

	echo "<br>".$x;
}

/***********************/
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p id='p1'></p>

	<script>
		
		var myname="basma";
		/*document.write('welcome '+myname);*/
		document.getElementById('p1').innerHTML='welcome '+myname + " in js";
	</script>

</body>
</html>