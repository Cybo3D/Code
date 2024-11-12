<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
    $galleryImages = scandir("./Images");
    for ($x = 2; $x < count($galleryImages); $x++) {
        //echo $galleryImages[$x];

        $FullName = "./Images" . "/" . $galleryImages[$x];

        echo "<img src='$FullName'></img>";
    }
    ?>
    </div>
</body>
</html>