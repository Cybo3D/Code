<?php
$conn = mysqli_connect("localhost", "root", "", "flitspaal");

$cameras = [];
$fines = [];

$res = mysqli_query($conn, "SELECT * FROM cameras");

while ($row = mysqli_fetch_assoc($res)) {
    $cameras[] = [
        0 => $row["id"],
        1 => $row["address"],
        2 => $row["city"],
    ];
}

$res = mysqli_query($conn, "SELECT * FROM fines");

$fines = [];
while ($row = mysqli_fetch_assoc($res)) {
    $fines[] = [
        0 => $row["id"],
        1 => $row["speed_limit"],
        2 => $row["speed_excess"],
        3 => $row["fine"],
    ];
}

$res = mysqli_query($conn, "SELECT * FROM flashes");

$flashes = [];
while ($row = mysqli_fetch_assoc($res)) {
    $flashes[] = [
        0 => $row["id"],
        1 => $row["camera_id"],
        2 => $row["license"],
        3 => $row["speed"],
    ];
}

$res = mysqli_query($conn, "SELECT flashes.id, flashes.camera_id, flashes.speed, licenses.license, licenses.first_name, licenses.last_name, licenses.address, licenses.postal_code, licenses.city, cameras.address AS cameras_address
FROM licenses 
INNER JOIN flashes ON licenses.license = flashes.license
INNER JOIN cameras ON flashes.camera_id = cameras.id
ORDER BY license;");

$flashesLicense = [];
while ($row = mysqli_fetch_assoc($res)) {
    // print_r($row["address"]);
    $flashesLicense[] = [
        0 => $row["id"],
        1 => $row["camera_id"],
        2 => $row["license"],
        3 => $row["speed"],
        4 => $row["first_name"],
        5 => $row["last_name"],
        6 => $row["address"],
        7 => $row["cameras_address"],
        8 => $row["postal_code"],
        9 => $row["city"],
    ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css ">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="table" id="cameras">
            <h1>camera's</h1>
            <table>
                <tr>
                    <th>id</th>
                    <th>address</th>
                    <th>city</th>
                </tr>
                <?php
                for ($x = 0; $x < count($cameras); $x++) {
                    echo "<tr>";

                    for ($y = 0; $y < count($cameras[$x]); $y++) {
                        echo "<td>";

                        echo $cameras[$x][$y];

                        echo "</td>";
                    }

                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <div class="table" id="fines">
            <h1>fines</h1>
            <table>
                <tr>
                    <th>id</th>
                    <th>speed excess</th>
                    <th>fine</th>
                </tr>
                <?php
                for ($x = 0; $x < count($fines); $x++) {
                    echo "<tr>";

                    if ($fines[$x][1] == 50) {

                        for ($y = 0; $y < count($fines[$x]); $y++) {
                            if ($y != 1) {
                                echo "<td>";

                                echo $fines[$x][$y];

                                echo "</td>";
                            }
                        }

                        echo "</tr>";
                    }
                }
                // echo $fines;
                ?>
            </table>
        </div>
        <div class="table" id="flashes">
            <h1>F-943-VP</h1>
            <table>
                <tr>
                    <th>id</th>
                    <th>camera id</th>
                    <th>license</th>
                    <th>speed</th>
                </tr>
                <?php
                for ($x = 0; $x < count($flashes); $x++) {
                    echo "<tr>";

                    if ($flashes[$x][2] == "F-943-VP") {

                        for ($y = 0; $y < count($flashes[$x]); $y++) {
                            echo "<td>";

                            echo $flashes[$x][$y];

                            echo "</td>";
                        }
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <div class="table" id="top-10">
            <h1>TOP 10</h1>
            <table>
                <tr>
                    <th>amount</th>
                    <th>license</th>
                    <th>name</th>
                    <th>address</th>
                    <th>city</th>
                </tr>
                <?php
                // 1 license
                // 2 amount
                $license = [];

                $prevLicense = "";
                $iterationCountr = 0;
                for ($x = 0; $x < count($flashesLicense); $x++) {
                    if(isset($flashesLicense[$x+1])){
                        $nextLicense = $flashesLicense[$x+1][2];
                    }else{
                        $nextLicense = "";
                    }

                    if ($prevLicense != $flashesLicense[$x][2]) {
                        $iterationCountr = 0;
                    } else {
                        $iterationCountr += 1;
                    }

                    if($nextLicense != $flashesLicense[$x][2]){
                        $license[] = [
                            0 => $iterationCountr,
                            1 => $flashesLicense[$x][2],
                            2 => $flashesLicense[$x][4] . " " . $flashesLicense[$x][5],
                            3 => $flashesLicense[$x][6],
                            4 => $flashesLicense[$x][8],
                        ];
                    }

                    $prevLicense = $flashesLicense[$x][2];
                }

                usort($license, function ($a, $b) {
                    return $b[0] <=> $a[0]; // Ascending order
                });

                for ($x = 0; $x < count($license); $x++) {
                    echo "<tr>";

                    if ($x < 10) {

                        for ($y = 0; $y < count($license[$x]); $y++) {
                            echo "<td>";

                            echo $license[$x][$y];

                            echo "</td>";
                        }
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>