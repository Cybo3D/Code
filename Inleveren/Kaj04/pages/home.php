<?php
$voetballer = [];

$res = mysqli_query($conn, "SELECT * FROM voetballers");

while ($row = mysqli_fetch_assoc($res)) {
    $voetballer[] = [
        0 => $row["id"],
        1 => $row["foto_url"],
        2 => $row["voornaam"],
        3 => $row["achternaam"],
        4 => $row["geboortedatum"],
    ];
}
$info = "";
for ($x = 0; $x < count($voetballer); $x++) {
    $info = $info . "<tr>";

    for ($y = 1; $y < count($voetballer[$x]); $y++) {
        $info = $info . "<td>";
        $art = $voetballer[$x][$y];
        if($y == 1){
            $info = $info . "<img src='photos/$art' >";
        }else{
            $info = $info . $voetballer[$x][$y];
        }

        $info = $info . "</td>";
    }

    $row_id =  $voetballer[$x][0];

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
<h1>Onze helden van 1974!</h1>

<div class='table' id='Heroes'>
    <table>
        <tr>
            <th>foto</th>
            <th>voornaam</th>
            <th>achternaam</th>
            <th>geboortedatum</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        <?= $info ?>
    </table>
</div>