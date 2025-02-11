<?php
if (isset($_GET["page"])) {
    if ($_GET["page"] != "update")
        return;
} else {
    return;
}

$id = $_GET["update-id"];

if (isset($_POST["name"]) && isset($_POST["country"]) && $_POST["name"] != "" && $_POST["country"] != "") {

    $name = $_POST["name"];
    $country = $_POST["country"];

    $res = mysqli_query($conn, "SELECT * FROM artist");

    while ($row = mysqli_fetch_assoc($res)) {
        $artist[] = [
            0 => $row["id"],
            1 => $row["name"],
            2 => $row["country"],
        ];
    }

    // $res2 = mysqli_query($conn, "DELETE FROM artist WHERE id=$id");
    $res2 = mysqli_query($conn, "UPDATE artist SET name = '$name', country = '$country' WHERE id='$id';");
    header('Location: index.php');
}
?>
<h1>Update element</h1>
<form method="POST" action="">
    <label for="name">Naam: </label>
    <input type="input" name="name">
    <br>
    <label for="country">Land: </label>
    <input type="input" name="country">
    <br>

    <button name="submit" type="submit">Verzenden</button>
</form>