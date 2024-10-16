<?php
$BerkenPrijs = "10";
$BeukenPrijs = "7";
$EikenPrijs = "8";
$EssenPrijs = "9";

if (!$_POST) {
   // echo "u moet wat invoeren voordat u submit";
} else {
    $TypeHout = $_POST["Hout"] ?? "";
    $Vorm = $_POST["Vorm"] ?? "";

    $Width = $_POST["Width"] ?? 0;
    $Length = $_POST["Length"] ?? 0;
    $Radius = $_POST["Radius"] ?? 0;
    $Side1 = $_POST["Side1"] ?? 0;
    $Side2 = $_POST["Side2"] ?? 0;

    $Output = 0;

    if ($Vorm == "Vierkant") {
        $Output = $Width * $Length;
    } elseif ($Vorm == "Cirkel") {
        $Output = pi() * $Radius * $Radius;  // Corrected formula for circle area
    } elseif ($Vorm == "Driehoek") {
        $Output = ($Side1 * $Side2) / 2;
    }

    if ($Output > 0 && $TypeHout) {
        if ($TypeHout == "Berken") $Output = floatval($Output) * floatval($BerkenPrijs);
        if ($TypeHout == "Beuken") $Output = floatval($Output) * floatval($BeukenPrijs);
        if ($TypeHout == "Eiken") $Output = floatval($Output) * floatval($EikenPrijs);
        if ($TypeHout == "Essen") $Output = floatval($Output) * floatval($EssenPrijs);
        $_POST["Output"] = $Output;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
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

        <br>

        <input type="submit">

        <br>

        <h2><?= $_POST["Output"] ?? ""; ?></h2>
    </form>
</body>
</html>