<?php
    $inputs = [];

    $iterations = 5;

    $average = 0;

    $longer = 0;
    $shorter = 0;

    for($x=0; $x < $iterations; $x++){
        $xOne = $x + 1;
        $inputs[$x] = readline("$xOne. Geef lengte op (in cm): ");

        if($inputs[$x] >= 210 || $inputs[$x] <= 50){
            echo("De lengte is buiten de range, probeer het opnieuw.");
            return;
        }
        $average += $inputs[$x];

        if($inputs[$x] > 170){
            $longer++;
        }else{
            $shorter++;
        }
    }
    $average /= $iterations;
    echo("Er zijn $longer mensen langer dan 170" . "\n");
    echo("Er zijn $shorter mensen korter dan 170" . "\n");
    echo("De gemiddelde lengte is $average cm." . "\n");
    // lukte alleen niet om opnieuw te vragen
?>