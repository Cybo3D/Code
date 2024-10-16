<?php
$input = readline();
$SplittedInput = str_split($input);
$output = 0;
for($x = 0; $x < count($SplittedInput); $x++){
    $output += $SplittedInput[$x];
}
echo $output;
?>