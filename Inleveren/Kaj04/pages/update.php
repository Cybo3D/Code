<?php
$name_filled = "";
$last_name_filled = "";
$date_filled = "";
$foto_url_filled = "";

$id = $_GET["update-id"];
$type = "update";
if ($id >= 0) {
    $type = "update";

    $res = mysqli_query($conn, "SELECT * FROM voetballers WHERE id = '$id'");
    if ($row = mysqli_fetch_assoc($res)) {
        $name_filled = $row["voornaam"];
        $last_name_filled = $row["achternaam"];
        $date_filled = $row["geboortedatum"];
        $foto_url_filled = $row["foto_url"];
    }

} else {
    $type = "insert";
}

if (isset($_POST["voornaam"]) && isset($_POST["achternaam"]) && isset($_POST["geboortedatum"]) && isset($_POST["foto_url"]) && $_POST["voornaam"] != "" && $_POST["achternaam"] != "" && $_POST["geboortedatum"] != "" && $_POST["foto_url"] != "") {

    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $geboortedatum = $_POST["geboortedatum"];
    $foto_url = $_POST["foto_url"];

    if ($type == "update") {
        //update
        $res = mysqli_query($conn, "UPDATE voetballers SET voornaam = '$voornaam', achternaam = '$achternaam', geboortedatum = '$geboortedatum', foto_url = '$foto_url' WHERE id='$id';");
    } else if ($type == "insert") {
        //add
        $res = mysqli_query($conn, "INSERT INTO voetballers (voornaam, achternaam, geboortedatum, foto_url) VALUES ('$voornaam','$achternaam','$geboortedatum','$foto_url ');");
    }
    header('Location: index.php');
}
?>
<h1>Update element</h1>
<form method="POST" action="">
    <label for="voornaam">Voornaam: </label>
    <input type="input" name="voornaam" required value="<?= $name_filled ?>">
    <br>
    <label for="achternaam">Achternaam: </label>
    <input type="input" name="achternaam" required value="<?= $last_name_filled ?>">
    <br>
    <label for="geboortedatum">geboorte datum: </label>
    <input type="date" name="geboortedatum" required value="<?= $date_filled ?>">
    <br>
    <label for="foto_url">foto_url: </label>
    <input type="input" name="foto_url" required value="<?= $foto_url_filled ?>">
    <br>

    <button name="submit" type="submit"><?= $type ?></button>
</form>