<?php
$CarSelect = 0;
if (isset($_GET["Car"]))
    $CarSelect = $_GET["Car"];

    if ($CarSelect == "Chevy") {
        echo '<style>
            * {
                background-color: Yellow;
            }
            </style>';
        echo "<center><img style='width: auto%; height: 100%;' src='https://i.pinimg.com/originals/e7/c7/f5/e7c7f5d816bc9dc15583343d73cbda43.png'></center>";
        return;
    } else if ($CarSelect == "911") {
        echo '<style>
            * {
                background-color: Gray;
            }
            </style>';
            echo "<center><img style='width: auto%; height: 100%;' src='https://cdn.pixabay.com/photo/2020/12/08/17/21/porsche-911-targa-5815055_1280.png'></center>";
        return;
    } else if ($CarSelect == "Mini") {
        echo '<style>
            * {
                background-color: Red;
            }
            </style>';
        echo "<center><img style='width: auto%; height: 100%;' src='https://www.pngmart.com/files/10/Red-Mini-Cooper-PNG-HD.png'></center>";
        return;
    } else if ($CarSelect == "Hell") {
        echo '<style>
            * {
                background-color: Black;
            }
            </style>';
        echo "<center><img style='width: auto%; height: 100%;' src='https://img.sm360.ca/ir/w640h390c/images/newcar/ca/2023/dodge/challenger/srt-hellcat-redeye-widebody/coupe/exteriorColors/2023_dodge_challenger_srt-hellcat-redeye-widebody_032_px8.png'></center>";
        return;
    } else if ($CarSelect == "Kever") {
        echo '<style>
            * {
                background-color: Blue;
            }
            </style>';
        echo "<center><img style='width: auto%; height: 100%;' src='https://static.vecteezy.com/system/resources/previews/048/107/778/non_2x/blue-classic-3d-rendered-vintage-volkswagen-beetle-car-free-png.png'></center>";
        return;
    }
else{
    echo "<center>Input your Car</center>"; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php  ?>;
        }
    </style>
</head>
<body>
    <center>
        <form>
            <select name="Car" multiple>
                <option value="Chevy">Chevrolet camaro</option>
                <option value="911">Porsche 911</option>
                <option value="Mini">Mini cooper</option>
                <option value="Hell">Hellcat</option>
                <option value="Kever">Kever</option>
            </select>
            <br>
            <input type="submit">
        </form>
    </center>
</body>
</html>