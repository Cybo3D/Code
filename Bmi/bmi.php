<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 style="margin: 0%">BMI berekenen: </h3>
    <form method="POST">
        Lengte (cm): <input type="number" name="Lengte"><br>
        Gewicht (kg): <input type="number" name="Gewicht"><br>
        <button type="submit">Bereken</button>
    </form>
    <?php
    (int) $Berekend = 0;

    if (isset($_POST["Lengte"]) && isset($_POST["Gewicht"])) {
        $Berekend = $_POST["Gewicht"] / ($_POST["Lengte"]/100 * $_POST["Lengte"]/100);
        echo "BMI: " . $Berekend  . "<br>";

        if($Berekend < 18.5) echo "Ondergewicht" . "<br>";
        if($Berekend >= 18.5 && $Berekend < 25) echo "Gezond" . "<br>";
        if($Berekend >= 25 && $Berekend < 30) echo "Overgewicht" . "<br>";
        if($Berekend >= 30) echo "Obesitas" . "<br>";
    }
    ?>
</body>

</html>