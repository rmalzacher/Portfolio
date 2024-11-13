<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9c6d9486e4.js" crossorigin="anonymous"></script>
    <title>Portfolio</title>
</head>
<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.php">Start</a>
            </li>
            <li>
                <a href="project.php">DIY-Projekte</a>
            </li>
            <li>
                <a href="project.php">Hochschulprojekte</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <input type="text" placeholder="Search Here">
            </li>
        </ul>
    </div>
    <nav>
    <div id="logo-img">
            <a href ="#">
                <img src="img/PlateauFlash.png" alt="Logo">
            </a>
        </div>
        <div id ="menu-icon">
            <i class ="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="index.php">Start</a>
            </li>
            <li>
                <a href="project.php">DIY-Projekte</a>
            </li>
            <li>
                <a href="project.php">Hochschulprojekte</a>
            </li>
            <li>
                <a href="about.php">Über</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>
    <div id="searchbox">
        <input type="text" placeholder="Search Here">
    </div>
    
    <main>
        <h2 class="page-heading">Projekttitel</h2>
        <div id="post-container">
            <section id="projectpost">
                <div class="card">
                    <div class="card-meta-projectpost">
                        Posted by Admin on 01/10/2024 in <a href="#">Web Dev</a>
                    </div>
                    <div class="card-image">
                        <img src="img/Planetsystem.PNG" alt="Card Image">
                    </div>
                    <div class="card-description">
                        <h3>The Introduction</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vero aliquam praesentium laboriosam asperiores quisquam, laudantium distinctio sunt qui officia optio exercitationem veritatis numquam assumenda quis debitis culpa, vel, facere vitae adipisci? Ex quidem impedit rem consequatur suscipit aut quia?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vero aliquam praesentium laboriosam asperiores quisquam, laudantium distinctio sunt qui officia optio exercitationem veritatis numquam assumenda quis debitis culpa, vel, facere vitae adipisci? Ex quidem impedit rem consequatur suscipit aut quia?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vero aliquam praesentium laboriosam asperiores quisquam, laudantium distinctio sunt qui officia optio exercitationem veritatis numquam assumenda quis debitis culpa, vel, facere vitae adipisci? Ex quidem impedit rem consequatur suscipit aut quia?</p>
                    </div>
                </div>
                

                
            </section>
            <aside id="sidebar">
                <h3>Sidebar Heading</h3>
                <p>Sidebar 1</p>
            </aside>
        </div>
        <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <ul>
                    <li>
                        <a href="#">Start</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#">Impressum</a>
                    </li>
                </ul>
            </div>
            <div id="right-footer">
                <h3>Contact Links</h3>
                <ul>
                    <li>
                        <a href="#">Start</a>
                    </li>
                    <li>
                        <a href="#">DIY-Projekte</a>
                    </li>
                    <li>
                        <a href="#">Hochschulprojekte</a>
                    </li>
                </ul>
                <p>This website is developed by Rico Malzacher</p>
            </div>
        </footer>
    </main>
    
    <script src="main.js"></script>

    <?php
        

    ?>
</body>
</html>