<?php
$Banner = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoaOqU-w1WdfbH9OJwfoPyq4bI6hsJ7grIBQ&s";
$Description = "Very cool Site";

if (isset($_GET["Game"])) {
    $Game = $_GET["Game"];
    if ($Game == "1") {
        $Banner = "https://m.media-amazon.com/images/I/91l+XW9jctL._AC_UF1000,1000_QL80_.jpg";
        $Description = "After a robbery goes badly wrong in the western town of Blackwater, Arthur Morgan and the Van der Linde gang are forced to flee. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive.";
    }
    if ($Game == "2") {
        $Banner = "https://image.api.playstation.com/vulcan/ap/rnd/202210/3121/XemhVDBuAEVrQXUkJF57ZsdX.jpg";
        $Description = "Need for Speed Heat is a racing game set in an open world environment called Palm City, a fictionalised version of Miami, Florida, and its surrounding areas. However, the in-game map features diverse geography, including mountainous areas, dense forests, and open fields.";
    }
    if ($Game == "3") {
        $Banner = "https://www.nintendo.com/eu/media/images/10_share_images/games_15/wiiu_download_software_5/H2x1_WiiUDS_HollowKnight_image1600w.jpg";
        $Description = "Hollow Knight is a 2D side-scrolling Metroidvania. The player controls a silent insectoid protagonist called 'the Knight' who explores an underground fallen kingdom called Hallownest. The Knight can strike enemies with a sword-like weapon called a Nail and can learn spells that allow for long-range attacks.";
    }
    if ($Game == "4") {
        $Banner = "https://www.stargamers.nl/test/wp-content/uploads/2015/12/Terraria-iOS-Ad-Banner9-June20141.png";
        $Description = "Terraria is a 2D sandbox game with gameplay that revolves around exploration, building, crafting, combat, survival, and mining, playable in both single-player and multiplayer modes. The game has a 2D sprite tile-based graphical style reminiscent of the 16-bit sprites found on the Super NES.";
    }
    if ($Game == "5") {
        $Banner = "https://www.thesun.co.uk/wp-content/uploads/2022/11/GF_Portal_RTX.png?strip=all&quality=100&w=1620&h=1080&crop=1";
        $Description = "A test subject wakes up in a scientific facility controlled by artificial intelligence, isolated from humans, and must navigate through various test chambers to escape, with the help of the only instrument she has- a portal gun.";
    }
    if ($Game == "6") {
        $Banner = "https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/software/switch/70010000050313/75484f73fedd25cb830c5d93fbb3fca643a5ec0b09df2815291ead880bc7d6b1";
        $Description = "Portal 2 is a first-person perspective puzzle game. The player takes the role of Chell in the single-player campaign, as one of two robots—Atlas and P-Body—in the cooperative campaign, or as a simplistic humanoid icon in community-developed puzzles.";
    }
    if ($Game == "7") {
        $Banner = "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/632360/ss_2bb49071317f7b241a527cf6e7aabd2cb6af055b.1920x1080.jpg?t=1728672963";
        $Description = "Players control a survivor who is stranded on an alien planet. To survive, they navigate through various environments, killing monsters and looting chests to collect items that boost their offensive and defensive capabilities. Over time, the game's difficulty increases, spawning more powerful and dangerous creatures.";
    }
    if ($Game == "8") {
        $Banner = "https://gaming-cdn.com/images/products/1273/orig/titanfall-2-pc-spel-ea-app-cover.jpg?v=1703158431";
        $Description = "Titanfall® 2 features a single player campaign packed with action and inventive twists. Play as a Militia rifleman stranded behind enemy lines, who encounters a veteran Vanguard-class Titan. The two must work together to uphold a mission they were never meant to carry out. <br> Team Fortress 2 (TF2) is a 2007 multiplayer first-person shooter game developed and published by Valve Corporation. It is the sequel to the 1996 Team Fortress mod for Quake and its 1999 remake, Team Fortress Classic.";
    }
    if ($Game == "9") {
        $Banner = "https://assetsio.gnwcdn.com/half-life-2-vr-mod.jpg?width=1200&height=600&fit=crop&enable=upscale&auto=webp";
        $Description = "Like the original Half-Life (1998), Half-Life 2 is a single-player first-person shooter (FPS) in which players control Gordon Freeman. It features combat, exploration, jumping challenges and puzzle-solving, and narrative elements conveyed through scripted sequences.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
    <div class="topnav">
      <a href="index.html">Home</a>
      <a href="contact.php">Contact</a>
    </div>
        <img class="banner" src="<?php echo $Banner?>">
        <div class="content">
            <h2 class="description"><?php echo $Description?></h2>
        </div>
    </div>
</body>

</html>