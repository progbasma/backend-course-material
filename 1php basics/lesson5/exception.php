<?php
//$myfile = @fopen("webdictionary.txt", "r") or die("Unable to open file!");


/*******************************/
function divide($first, $second) {
  



try{
  if($second == 0) {
    throw new error("Division by zero");


  }
  return $first / $second;
}
catch(error $ex)

{
	echo "error here";
	echo "<br>error message = ".$ex->getMessage();
	echo "<br>in line ".$ex->getLine();
	echo "<br>in file ".$ex->getFile();

	echo "<pre>";
	//var_dump($ex);
	echo "</pre>";

}



}

echo divide(5, 0);


?>