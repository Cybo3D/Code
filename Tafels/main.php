<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 style="margin: 0%">Tafels: </h3>
    <form method="POST">
        Tafel: <input type="number" name="Tafel"><br>
        Begin punt: <input type="number" name="BeginPunt"><br>
        Eind punt: <input type="number" name="EindPunt"><br>
        <button type="submit">Bereken</button>
    </form>
    <?php
        (int) $tafel = isset($_POST["Tafel"]) ? $_POST["Tafel"] : 0;
        (int) $begin = isset($_POST["BeginPunt"]) ? $_POST["BeginPunt"] : 0;
        (int) $eind = isset($_POST["EindPunt"]) ? $_POST["EindPunt"] : 0;

        for ($x = $begin; $x <= $eind; $x++) {
            echo $x*$tafel . "<br>";
        }
    ?>
</body>

</html>