<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="index.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<div>";
    echo "<h1>CodeBase</h1>";

    $mainDir = scandir("./");
    for ($x = 2; $x < count($mainDir); $x++) {
        $Name = $mainDir[$x];
        if (!str_contains($mainDir[$x], ".")) {
            // change so it first checks if it contains main.php or index.php then check for the first php file
            // later not now
            $mainPhp = scandir("./" . $mainDir[$x])[2];

            $FullName = $Name . "/" . $mainPhp;

            echo "<a href='$FullName'> $Name </a><br>";
        }
    }
    echo "</div>";
    ?>
</body>

</html>