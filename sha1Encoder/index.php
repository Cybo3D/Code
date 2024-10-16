<?php
    if(isset($_POST["encode"])){
        echo sha1($_POST["encode"]);
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
    <form method="POST">
        <input type="input" name="encode">
        <input type="submit">
    </form>
</body>
</html>