<?php
/*Array*/
/*indexed array*/

$arr1= array('item1','item2','item3');
$arr2= ['item1','item2','item3'];

echo $arr1[1];


for($i=0;$i<count($arr1);$i++)
{
	echo "<br>". $arr1[$i];



}

/*associative array*/
$students = array('mohamed' => 100 ,
				'basma'=>90,
				'ahmed'=>80

			   );

echo "<br>".$students['basma'];

/*multidimentional array*/

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo "<br>".$cars[0][1];

for($n=0;$n<count($cars);$n++)
{

	for($m=0;$m<count($cars[$n]);$m++)
	{
		echo "<br>".$cars[$n][$m];
	}
	echo "<br>************************";


	
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1px">
		<?php
		foreach ($students as $itemaname => $itemvalue) {


		 echo "<tr><td>".$itemaname."</td><td>".$itemvalue."</td></tr>";

	
		

		}

?>
</table>



	</table>

</body>
</html>