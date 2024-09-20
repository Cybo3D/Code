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
        Waarde: <input type="number" name="Waarde"><br>
        Grootheid: <select name="grootheid">
            <option value="Kilometer">Kilometer</option>
            <option value="Hectometer">Hectometer</option>
            <option value="Decameter">Decameter</option>
            <option value="Meter">Meter</option>
            <option value="Decimeter">Decimeter</option>
            <option value="Centimeter">Centimeter</option>
            <option value="Milimeter">Milimeter</option>
        </select><br>
        Gewenst: <select name="gewenst">
            <option value="Kilometer">Kilometer</option>
            <option value="Hectometer">Hectometer</option>
            <option value="Decameter">Decameter</option>
            <option value="Meter">Meter</option>
            <option value="Decimeter">Decimeter</option>
            <option value="Centimeter">Centimeter</option>
            <option value="Milimeter">Milimeter</option>
        </select><br>
        <button type="submit">Bereken</button>
    </form>
    <?php
        $Waarde = $_POST["Waarde"];
        $grootheid =  $_POST["grootheid"];
        $grootheidId = 0;
        switch($grootheid){
            case "Kilometer":
                $grootheidId = 0;
            case "Hectometer":
                $grootheidId = 1;
            case "Decameter":
                $grootheidId = 2;
            case "meter":
                $grootheidId = 3;
            case "Decimeter":
                $grootheidId = 4;
            case "Centimeter":
                $grootheidId = 5;
            case "Milimeter":
                $grootheidId = 6;
        }

        $gewenst =  $_POST["gewenst"];
        $gewenstId = 0;
        switch($gewenst){
            case "Kilometer":
                $gewenstId = 0;
            case "Hectometer":
                $gewenstId = 1;
            case "Decameter":
                $gewenstId = 2;
            case "meter":
                $gewenstId = 3;
            case "Decimeter":
                $gewenstId = 4;
            case "Centimeter":
                $gewenstId = 5;
            case "Milimeter":
                $gewenstId = 6;
        }
    ?>
</body>
</html>