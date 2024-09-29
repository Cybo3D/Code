<?php
$BerkenPrijs = "€ 10";
$BeukenPrijs = "€ 7";
$EikenPrijs = "€ 8";
$EssenPrijs = "€ 9";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <h2 style="margin:0px;">Type Hout: </h2>
        <br>

        <input type="radio" name="Hout" value="Berken"> Berken - prijs per m2 <?= $BerkenPrijs; ?> <br>
        <input type="radio" name="Hout" value="Beuken"> Beuken - prijs per m2 <?= $BeukenPrijs; ?><br>
        <input type="radio" name="Hout" value="Eiken"> Eiken - prijs per m2 <?= $EikenPrijs; ?><br>
        <input type="radio" name="Hout" value="Essen"> Essen - prijs per m2 <?= $EssenPrijs; ?><br>

        <br>
        <h2 style="margin:0px;">Vorm: </h2>
        <br>

        <input type="radio" name="Vorm" value="Vierkant"> Vierkant <br>
        &emsp; Breedte <input type="number" name="Width"> <br>
        &emsp; Lengte <input type="number" name="Length"> <br>

        <input type="radio" name="Vorm" value="Cirkel"> Cirkel<br>
        &emsp; Radius <input type="number" name="Radius"> <br>

        <input type="radio" name="Vorm" value="Driehoek"> Driehoek<br>
        &emsp; Zijde 1 <input type="number" name="Side1"> <br>
        &emsp; Zijde 2 <input type="number" name="Side2"> <br>
        &emsp; Zijde 3 <input type="number" name="Side3"> <br>

        <br>

        <input type="submit">
    </form>
</body>
</html>