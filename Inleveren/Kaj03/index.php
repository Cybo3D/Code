<?php
$conn = mysqli_connect("localhost", "root", "", "top2000");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #header {
            background-color: navy;
            color: white;
        }

        #footer {
            background-color: navy;
            color: white;
        }

        #content {}

        #menu {
            display: flex;
            background-color: grey;
        }

        #menu a {
            margin: 1em;
            padding: 0.5em;
            background-color: navy;
            color: white;

            text-decoration: none;
            padding: 0.5em;
            height: 1em;

            width: 150px;
            border-radius: 0.5em;
        }
    </style>
</head>

<body>
    <div id="container">
        <h1 id="header">Artiesten</h1>
        <div id="menu">
            <a href="index.php?page=home">home</a>
            <a href="index.php?page=select">select</a>
            <a href="index.php?page=insert">insert</a>
        </div>
        <div id="content">
            <?php
                $page = "home"; 
                if (isset($_GET["page"])) {
                    $page = $_GET["page"];
                }

                include "pages/$page.php";

                // include "pages/home.php";
                // include "pages/select.php";
                // include "pages/insert.php";
            ?>
        </div>
        <div id="footer">footer</div>
    </div>
</body>

</html>