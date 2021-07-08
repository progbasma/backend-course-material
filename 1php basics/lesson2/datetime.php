<?php
/*
date(format,timestamp)
*/
date_default_timezone_set("Asia/Riyadh");

echo date('j \of M Y h:i:s A');
$d1=mktime(9, 0, 0, 05, 31, 2021);
$d2=strtotime("+3day +2hours +30minutes");

echo "<br>". date('j \of M Y h:i:s A',$d1);
echo "<br>". date('j \of M Y h:i:s A',$d2);


/*
time stamp
mktime(hour, minute, second, month, day, year)

strtotime("10:30pm April 15 2014");
$d=strtotime("tomorrow");
$d=strtotime("yesterday");
$d=strtotime("next saturday");
$d=strtotime("+1day +2hours +30minutes");




*/

include('1.php');
require('1.php');

?>