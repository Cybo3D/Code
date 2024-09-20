<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P id="Sec">
        <?php
        echo "hello world"
        ?>
    </P>
    <?php
        $p = localtime(time(),true);
        // while (true){
            
        // }
        // echo $p["tm_sec"];
        $seconds = $p["tm_sec"];
        $minutes = $p["tm_min"];
        $Hour = $p["tm_hour"];
        $Year = $p["tm_year"];
        $Month = $p["tm_mon"];
        $Day = $p["tm_mday"];
        
        echo "Year: " . $Year-100 . "<br>";
        echo "Month: " . $Month + 1 . "<br>";
        echo "Day: " . $Day . "<br>";

        echo "Hour: " . $Hour . "<br>";
        echo "Minutes: " . $minutes . "<br>";
        echo "Seconds: " . $seconds . "<br>";

        header("refresh: 1;")
    ?>

</body>
</html>