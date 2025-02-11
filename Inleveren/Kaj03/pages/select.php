<?php
if (isset($_GET["page"])) {
    if ($_GET["page"] != "select")
        return;
} else {
    return;
}

$artist = [];

$res = mysqli_query($conn, "SELECT * FROM artist");

while ($row = mysqli_fetch_assoc($res)) {
    $artist[] = [
        0 => $row["id"],
        1 => $row["name"],
        2 => $row["country"],
    ];
}
$info = "";
for ($x = 0; $x < count($artist); $x++) {
    $info = $info . "<tr>";

    for ($y = 1; $y < count($artist[$x]); $y++) {
        $info = $info . "<td>";

        $info = $info . $artist[$x][$y];

        $info = $info . "</td>";
    }

    $row_id =  $artist[$x][0];

    $update = "<form action='index.php?page=update&update-id=$row_id' method='POST'> <button type='submit'>update</button> </form>";
    $delete = "<form action='index.php?page=delete&delete-id=$row_id' method='POST'> <button type='submit'>delete</button> </form>";

    $info = $info . "<td>";
    $info = $info . $update;
    $info = $info . "</td>";

    $info = $info . "<td>";
    $info = $info . $delete;
    $info = $info . "</td>";

    $info = $info . "</tr>";
}
?>
<div class='table' id='cameras'>
    <h1>artists</h1>
    <table>
        <tr>
            <th>name</th>
            <th>city</th>
        </tr>
        <?= $info ?>
    </table>
</div>