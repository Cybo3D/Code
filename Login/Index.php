<?php
include("./Database.php");

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
                $row["Passwords"]
            ];
        }
    }
}
function RemoveUserInfo($conn, $username){
    $sql = "DELETE FROM users WHERE Username = '$username' ";
    $result = $conn->query($sql);
}

function SignUserUp($conn, $encryptedUsername, $encryptedPassword){
    if(GetUserInfo($conn, $encryptedUsername) == $encryptedUsername){
        // Username exists
         
        $_SESSION["message"] = "Username already exists";

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    $sql = "INSERT INTO users (Username, Passwords) VALUES ('$encryptedUsername','$encryptedPassword')";
    $result = $conn->query($sql);

    $_SESSION["Username"] = $encryptedUsername;
    $_SESSION["Password"] = $encryptedPassword;

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if ($_SESSION["Username"] && $_SESSION["Password"]){
    if (GetUserInfo($conn, $_SESSION["Username"])[0] == $_SESSION["Username"] && GetUserInfo($conn, $_SESSION["Username"])[1] == $_SESSION["Password"]) {
        echo "allowed in";
        echo "<br>";
    }else {
        $_SESSION["message"] = "
        Theres a spy among us
        <br>
        ඞ
        <br>";

        $_SESSION["Username"] = "";
        $_SESSION["Password"] = "";
    }
}

if (isset($_POST["login"])) {
    if (isset($_POST["Username"]) && isset($_POST["Password"])) {
        $username = $_POST["Username"];
        $password = $_POST["Password"];

        $encryptedUsername = sha1($username);
        $encryptedPassword = sha1($password);

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
        SignUserUp($conn, sha1($_POST["Username"]), sha1($_POST["Password"]));
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
</head>

<body>
    <form method="POST">
        Username: <input type="input" name="Username"><br>
        Password: <input type="input" name="Password"><br>
        <button name="login" type="submit">Log-in</button><br>
        <button name="logout" type="submit">Log-out</button><br>
        <button name="signUp" type="submit">Sign-Up</button><br>
    </form>
</body>

</html>