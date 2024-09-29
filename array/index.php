<?php
$array = [];
$iterations = 100;
for($x = 0; $x < $iterations; $x++){
    $array[$x] = random_int(1, 100);
}
sort($array, SORT_NUMERIC);
for($y = 0; $y < count($array); $y++){
    echo $array[$y]. "<br>";
}
//print_r($array);
?>