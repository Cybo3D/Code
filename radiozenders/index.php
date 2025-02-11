<?php
    $conn = mysqli_connect("localhost", "root", "", "kraeken");

    $res = mysqli_query($conn, "SELECT * FROM Zender");

    while($row = mysqli_fetch_assoc($res)){
        echo $row["zendernaam"] . "<br>";
    }

    // echo $res;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>