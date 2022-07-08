<?php


echo time();

echo "<br><br>";

$first = "1655423666";

echo date("D, jS M, Y.   g : i a", time());

echo "<br><br>";

echo date("D, jS M, Y.   g : i a");

echo "<br><br>";

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br><br>";

$e=mktime(0, 0, 0, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $e);


echo "<br><br>";

// echo mktime(hour, minute, second, month, day, year);

echo ceil((mktime(0, 0, 0, 8, 30, 2015) - mktime(0, 0, 0, 8, 12, 2014))/60/60/24) ;


echo "<br><br>";

$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";


$one = "2022-05-18";
$two = "2022-06-18";

echo "<br><br>";
echo "Welcome";
echo "<br><br>";

function duration($dateOne, $dateTwo){

    $firstDate = explode("-", $dateOne);
    $secondDate = explode("-", $dateTwo);

    $days = ceil((mktime(0, 0, 0, $secondDate[1], $secondDate[2], $secondDate[0]) - mktime(0, 0, 0, $firstDate[1], $firstDate[2], $firstDate[0]))/60/60/24);

    return intdiv($days, 7)." week(s) and ".($days % 7)." days(s)";


}

echo "<br><br>";

echo duration($one, $two);































?>