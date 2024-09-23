<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 style="margin: 0%">Afstanden ofzo: </h3>
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
        $grootheidId = 1;
        switch($grootheid){
            case "Kilometer":
                $grootheidId = 1;
                break;
            case "Hectometer":
                $grootheidId = 2;
                break;
            case "Decameter":
                $grootheidId = 3;
                break;
            case "Meter":
                $grootheidId = 4;
                break;
            case "Decimeter":
                $grootheidId = 5;
                break;
            case "Centimeter":
                $grootheidId = 6;
                break;
            case "Milimeter":
                $grootheidId = 7;
                break;
        }

        $gewenst =  $_POST["gewenst"];
        $gewenstId = 1;
        switch($gewenst){
            case "Kilometer":
                $gewenstId = 1;
                break;
            case "Hectometer":
                $gewenstId = 2;
                break;
            case "Decameter":
                $gewenstId = 3;
                break;
            case "Meter":
                $gewenstId = 4;
                break;
            case "Decimeter":
                $gewenstId = 5;
                break;
            case "Centimeter":
                $gewenstId = 6;
                break;
            case "Milimeter":
                $gewenstId = 7;
                break;
        }
        if($grootheidId > $gewenstId){
            $diff = $gewenstId - $grootheidId;
            $aantal2 = (int)$Waarde / 10 **  $diff;
            echo $aantal2 . '<br>';
        }
        if($grootheidId < $gewenstId){
            $diff = $grootheidId - $gewenstId;
            $aantal2 = (int)$Waarde * 10 **  $diff;
            echo $aantal2 . '<br>';
        }
    ?>
</body>
</html>