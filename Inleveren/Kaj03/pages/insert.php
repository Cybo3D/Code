<?php
if (isset($_GET["page"])) {
    if ($_GET["page"] != "insert")
        return;
} else {
    return;
}

$message = "";
if (isset($_GET["submit"])) {
    if (isset($_GET["name"]) && isset($_GET["country"]) && $_GET["name"] != "" && $_GET["country"] != "") {
        $name = $_GET["name"];
        $country = $_GET["country"];

        $sql = "INSERT INTO artist (name, country) VALUES ('$name','$country')";
        $result = $conn->query($sql);

        $message = "'$name' uit '$country' is ingevoerd";
    }
}
?>
<h1>insert artiest</h1>
<form action="./index.php?page=insert">
    <label for="name">Naam: </label>
    <input type="input" name="name">
    <br>
    <label for="country">Land: </label>
    <input type="input" name="country">
    <br>

    <input style="display: none" type="input" name="page" value="insert">
    <!-- ALS DE ACTION WERKT DAN HOEF DIE HIDDEN INPUT NIET -->

    <button name="submit" type="submit">Verzenden</button>
</form>
<?= $message ?>