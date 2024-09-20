<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 style="margin: 0%">Omtrek en Oppervlakte van een cirkel berekenen: </h3>
    <form method="POST">
        Diameter: <input type="number" name="Diameter"><br>
        <button type="submit">Bereken</button>
    </form>
    <?php
    (int) $a = isset($_POST["Diameter"]) ? $_POST["Diameter"] : 0;
    echo "Omtrek: " . $a * pi() . "<br>";
    echo "Oppervlakte: " . 0.25 * pi() * sqrt($a);
    ?>
</body>

</html>