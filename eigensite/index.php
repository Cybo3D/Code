<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="top-bar">
            <div class="logo">
                <img class="logo-icon" src="icons/Moneky-color.png">
                <h2>Cybo3D</h2>
            </div>
            <div class="socials">
                <a href="https://github.com/Cybo3D/"><img src="icons/github-mark-white.svg"></img></a>
                <a href="https://www.youtube.com/@Cybo3D"><img src="icons/yt_logo.svg"></img></a>
            </div>
        </div>
        <div class="content">
            <div class="select-bar">
                <a href="?page=home">Home</a>
                <a href="?page=projects">Projects</a>
                <a href="?page=about">About</a>
                <a href="?page=blog">Blog</a>
                <a href="?page=contact">Contact</a>
            </div>
            <div class="main-content">
                <?php
                if (isset($_GET["page"])) {
                    $page = $_GET["page"];

                    if(str_contains($page, "blog-"))
                    {
                        include "pages/blog.php";
                        include "blogs/$page.php";
                        
                    }
                    else
                        include "pages/$page.php";

                } else {
                    include "pages/home.php";
                }
                ?>
            </div>
        </div>

        <div class="bottom-bar">
            <p>Copyright ©2025 Cybo3D</p>
        </div>
    </div>
</body>

</html>