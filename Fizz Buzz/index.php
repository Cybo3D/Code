<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $iterations = 100000;
    for ($x = 1; $x < $iterations+1; $x++){
        echo "$x: ";
        if(is_int($x / 3)){
            echo "Fizz ";
        }
        if(is_int($x / 5)){
            echo "Buzz ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>