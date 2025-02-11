<?php
$conn = mysqli_connect("localhost", "root", "", "wk74");

$home_active = "active";
$insert_active = "not_active";

$page = "home";
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

if ($page == "update") {
    if ($_GET["update-id"] == -1) {
        $insert_active = "active";
    }
    $home_active = "not_active";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <nav id="menu">
            <a href="index.php?page=home" class="<?= $home_active ?>">home</a>
            <a href="index.php?page=update&update-id=-1" class="<?= $insert_active ?>">Toevoegen</a>
        </nav>
        <div id="content">
            <?php
            include "pages/$page.php";
            ?>
        </div>
    </div>
</body>

</html>