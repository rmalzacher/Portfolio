<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/icon.png">
    <link rel ="stylesheet" href ="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9c6d9486e4.js" crossorigin="anonymous"></script>
    <title>Portfolio-Rico_Malzacher</title>
</head>
<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="./index.php?page=start"
                    <?php 
                    if(isset($_GET["page"])){
                        if($_GET["page"] =="start"){ 
                            echo 'class="active"';
                        }
                    }else{
                        echo 'class="active"';
                    }?>
                >Start</a>
            </li>
            <li>
                <a href="./diy.php?page=diy"
                    <?php if(isset($_GET["page"])){if($_GET["page"] =="diy"){ echo 'class="active"';}}?>
                >DIY-Projekte</a>
            </li>
            <li>
                <a href="./hs.php?page=hs"
                    <?php if(isset($_GET["page"])){if($_GET["page"] =="hs"){ echo 'class="active"';}}?>
                >Hochschulprojekte</a>
            </li>
            <li>
                <a href="./about.php?page=about"
                    <?php if(isset($_GET["page"])){if($_GET["page"] =="about"){ echo 'class="active"';}}?>
                >Über</a>
            </li>
            <li>
                <form id="search-form" action="./searchlist.php?page=search" method="POST">
                    <input id = "searchbar" type="search" name="query" placeholder="Hier Suchanfrage eintragen" list="search-suggestions">
                    <datalist id ="search-suggestions">
                        <option value="Informatics Application">
                        <option value="Creative Content Design">
                        <option value="Unity Engine">
                        <option value="Unreal Engine">
                    </datalist>
                    <button id ="search-btn" type="submit">
                        <span class ="fas fa-search" aria-hidden="true"></span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
    <nav>
    <div id="logo-img">
            <a href ="./about.php?page=about">
                <img src="./img/PFlogo.png" alt="Logo">
            </a>
        </div>
        <div id ="menu-icon">
            <i class ="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="./index.php?page=start"
                <?php 
                    if(isset($_GET["page"])){ 
                        if($_GET["page"] == "start"){
                            echo 'class="active"';
                        }
                    }else{
                        echo 'class="active"';
                    }
                ?>
                >Start</a>
            </li>
            <li>
                <a href="./diy.php?page=diy"
                    <?php if(isset($_GET["page"])){if($_GET["page"] =="diy"){ echo 'class="active"';}}?>
                >DIY-Projekte</a>
            </li>
            <li>
                <a href="./hs.php?page=hs"
                <?php if(isset($_GET["page"])){if($_GET["page"] =="hs"){ echo 'class="active"';}}?>
                >Hochschulprojekte</a>
            </li>
            <li>
                <a href="./about.php?page=about"
                <?php if(isset($_GET["page"])){if($_GET["page"] =="about"){ echo 'class="active"';}}?>
                >Über</a>
            </li>
            <li>
                <div id="search-icon" >
                    <i class="fas fa-search" <?php if(isset($_GET["page"])){if($_GET["page"] =="search"){ echo 'style="color: white"';}}?>></i>
                </div>
            </li>
        </ul>
    </nav>
    <div id="searchbox">
        <form id="search-form" action="./searchlist.php?page=search" method="POST">
            <input id = "searchbar" type="search" name="query" placeholder="Hier Suchanfrage eintragen" list="search-suggestions">
            <datalist id ="search-suggestions">
                <option value="Informatics Application">
                <option value="Creative Content Design">
                <option value="Unity Engine">
                <option value="Unreal Engine">
            </datalist>
            <button id ="search-btn" type="submit">
                <span class ="fas fa-search" aria-hidden="true"></span>
            </button>
        </form>
    </div>