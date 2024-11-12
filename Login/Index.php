<?php
include("./Database.php");
$displayLogged[0] = "display: none;";
$displayLogged[1] = "display: none;";
$LoggedInMessage = "";
session_start();

if (!isset($_SESSION["Username"])) {
    $_SESSION["Username"] = "";
}
if (!isset($_SESSION["Password"])) {
    $_SESSION["Password"] = "";
}

function GetUserInfo($conn, $username)
{
    $sql = "SELECT * FROM users WHERE Username = '$username' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            return [
                $row["Username"],
                $row["Passwords"],
                $row["Salt"]
            ];
        }
    }
}
function RemoveUserInfo($conn, $username)
{
    $sql = "DELETE FROM users WHERE Username = '$username' ";
    $result = $conn->query($sql);
}

function DeleteAllUserData($conn)
{
    $sql = "DELETE FROM users";
    $result = $conn->query($sql);
}
function SignUserUp($conn, $encryptedUsername, $encryptedPassword, $Salt)
{
    if (GetUserInfo($conn, $encryptedUsername) == $encryptedUsername) {
        // Username exists

        $_SESSION["message"] = "Username already exists";

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
    $sql = "INSERT INTO users (Username, Passwords, Salt) VALUES ('$encryptedUsername','$encryptedPassword', '$Salt')";
    $result = $conn->query($sql);

    $_SESSION["Username"] = $encryptedUsername;
    $_SESSION["Password"] = $encryptedPassword;

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if ($_SESSION["Username"] && $_SESSION["Password"]) {
    if (GetUserInfo($conn, $_SESSION["Username"])[0] == $_SESSION["Username"] && GetUserInfo($conn, $_SESSION["Username"])[1] == $_SESSION["Password"]) {

        $LoggedInMessage = "Allowed in";

        $displayLogged[0] = "display: none;";
        $displayLogged[1] = "display: block;";
    } else {
        $_SESSION["message"] = "
        Theres a spy among us
        <br>
        ඞ
        <br>";

        $_SESSION["Username"] = "";
        $_SESSION["Password"] = "";

        $displayLogged[0] = "display: block;";
        $displayLogged[1] = "display: none;";
    }
} else {
    $displayLogged[0] = "display: block;";
    $displayLogged[1] = "display: none;";
}

if (isset($_POST["login"])) {
    if (isset($_POST["Username"]) && isset($_POST["Password"])) {
        $username = $_POST["Username"];
        $password = $_POST["Password"];

        $Salt = GetUserInfo($conn, $username)[2];

        $encryptedUsername = $username;
        $encryptedPassword = sha1($password . $Salt);

        $_SESSION["Username"] = $encryptedUsername;
        $_SESSION["Password"] = $encryptedPassword;

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST["signUp"])) {
    if (isset($_POST["Username"]) && isset($_POST["Password"])) {
        $Salt = rand(0, 99);
        SignUserUp($conn, $_POST["Username"], sha1($_POST["Password"] . $Salt), $Salt);
    }
}
if (isset($_SESSION["message"])) {
    echo $_SESSION["message"];

    unset($_SESSION["message"]);
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
    <form method="POST" class="Form">
        <h1>
            <?php echo $LoggedInMessage; ?>
        </h1>
        <div style="<?php echo $displayLogged[0]; ?>">
            <h2>Login/Signup</h2>
            <input type="input" name="Username" placeholder="Username"><br>
            <input type="input" name="Password" placeholder="Password"><br>
        </div>
        <div style="<?php echo $displayLogged[0]; ?>" class="Type-LoggedOut">
            <button name="login" type="submit">Log-in</button>
            <button name="signUp" type="submit">Sign-Up</button>
        </div>
        <div style="<?php echo $displayLogged[1]; ?>" class="Type-LoggedIn">
            <div class="Info"">
                <div class="InfoText">
                    <h2>Welcome agent <?php echo $_SESSION["Username"] ?></h2>
                </div>
            </div>

            <br><button name="logout" type="submit">Log-out</button><br>
        </div>
    </form>
</body>

</html>