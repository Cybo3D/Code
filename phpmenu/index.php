<?php
$content = "";
include "pages/home.php";
include "pages/chris.php";
include "pages/update.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #header,
        #footer {
            background-color: navy;
            color: white;
        }

        #content {
            
        }

        #menu {
            display: flex;
        }

        #menu div {
            border: 1px solid gray;
            width: 150px;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="header">Header</div>
        <div id="menu">
            <div><a href="index.php?page=home">home</a></div>
            <div><a href="index.php?page=chris">chris</a></div>
            <div><a href="index.php?page=update">update</a></div>
        </div>
        <div id="content">
            <?= $content; ?>
        </div>
        <div id="footer">footer</div>
    </div>
</body>

</html>