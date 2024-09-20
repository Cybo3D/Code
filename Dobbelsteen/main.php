<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 style="margin: 0%">Dobbelsteen: </h3>
    <form action="main.php" method="POST">
        Max: <input type="number" name="EindPunt"><br>
        <button type="submit">Roll the dice</button>
    </form>
    <?php
        (int) $eind = isset($_POST["EindPunt"]) ? $_POST["EindPunt"] : 0;

        if($eind) echo rand(1, $eind) . "<br>";
    ?>
</body>

</html>