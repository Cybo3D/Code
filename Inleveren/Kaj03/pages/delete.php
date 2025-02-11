<?php
if (isset($_GET["page"])) {
    if ($_GET["page"] != "delete")
        return;
} else {
    return;
}

$id = $_GET["delete-id"];

$res = mysqli_query($conn, "SELECT * FROM artist");

while ($row = mysqli_fetch_assoc($res)) {
    $artist[] = [
        0 => $row["id"],
        1 => $row["name"],
        2 => $row["country"],
    ];
}

$res2 = mysqli_query($conn, "DELETE FROM artist WHERE id=$id");


?>