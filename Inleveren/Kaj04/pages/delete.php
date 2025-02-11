<?php
$id = $_GET["delete-id"];

$res2 = mysqli_query($conn, "DELETE FROM voetballers WHERE id=$id");

header('Location: index.php');
?>