
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabot Cruises<?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="./styles/styles.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./slick/slick/slick-theme.css"/>
</head>
<body>
    <nav id="sm-nav">
        <div>
            <button id="menu" onclick="showMenu()">&#9776;</button>
            <button id="x" onclick="hideMenu()">X</button>
            <div class="search">
                <input type="search">
                <button><img src="./images/search-icon.png" alt="search icon"></button>
            </div>
        </div>
        <ul id="dd-menu">
            <li class="dd-item"><a href="./index.php">HOME</a></li>
            <li class="dd-item"><a href="./cruises.php">CRUISES</a></li>
            <li class="dd-item"><a href="#" onclick="subMenu()">AGENTS &#9660;</a></li>
            <li id="dd-sub-menu">
                <a href="./agentTony.php">&bull; Tony Stark</a>
                <a href="./agentPepper.php">&bull; Pepper Potts</a>
            </li>
            <li class="dd-item"><a href="./book.php">BOOK</a></li>
        </ul>
    </nav>
    <header>
        <img    src="./images/shipLogoX1.png"
                srcset="./images/shipLogoX2.png 768w,
                        ./images/shipLogoX3.png 1080w"
                alt="ship logo"
        >
        <a href="tel:+18005559450" class="phone-num">1-800-555-9450</a>
    </header>
    <nav id="lg-nav">
        <div class="nav-body">
            <?php wp_nav_menu()?>
            <div class="search">
                <input type="search">
                <button><img src="./images/search-icon.png" alt="search icon"></button>
            </div>
        </div>
    </nav>

    <main>