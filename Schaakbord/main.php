<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="border: 0px; padding: 0px; margin: 0px;">
    <?php
        $iterations = 8;
        for ($x = 0; $x < $iterations; $x++) {
            // // echo $x;
            // if($x & 1 ){
            //     $startwith = 'Zwart';
            // }
                
            for ($y = 0; $y <= $iterations; $y++) {
                //echo $y;
                if($y & 1 && $x & 1)echo '<img style="margin: 0px; padding: 0px; border: 0px;" src="SchaakZwart.png" alt="zwart">';
                else if($y & 1)echo '<img style="margin: 0px; padding: 0px; border: 0px;" src="SchaakWit.png" alt="zwart">';
                else if($x & 1) echo '<img style="margin: 0px; padding: 0px; border: 0px;" src="SchaakWit.png" alt="wit">';
                else echo '<img style="margin: 0px; padding: 0px; border: 0px;" src="SchaakZwart.png" alt="wit">';
            }
            echo '<br style="style="margin: 0px; padding: 0px; border: 0px;"">';
        }
    ?>
</body>
</html>
