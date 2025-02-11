<?php
if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['vegetables']) && isset($_GET['vegetarian'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];

    if($_GET['vegetarian'] == "yes"){
        $vegetarian = "een";
    }
    else if($_GET['vegetarian'] == "no"){
        $vegetarian = "geen";
    }

    $vegetables = $_GET['vegetables'];
}else{
    return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="result">
        <img src="kerstboom.png">
        <p>Leuk <?= $name ?>, dat jij je aangemeld hebt voor de kerstborrel. 
        <br>
        Wij houden er rekening mee dat je <?= $vegetarian ?> vegetarier bent en dat jij erg houd van: <?= $vegetables ?> 
        <br> 
        Binnenkort ontvang je op <?= $email ?> een bevestiging van deze aanmelding</p>
    </div>
</body>

</html>