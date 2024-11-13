    <?php include "header.php"; ?>
    <?php require "function.php"; ?>

    <div id="banner">
        <h1>Portfolio</h1>
        <h3>Arbeitsnachweise von Rico Malzacher</h3>
    </div>
    
    <main>
        <a href="diy.php?page=diy">
            <h2 class="section-heading">DIY-Projekte</h2>
        </a>
        <section>
            <?php getcard_diy(4)?>
        </section>
        <a href="hs.php?page=hs">
            <h2 class="section-heading">Hochschulprojekte</h2>
        </a>
        <section>
            <?php getcard_hs_ia(2)?>  
            <?php getcard_hs_ccd(2)?>
        </section>

        <h2 class="section-heading">Quellcode</h2>
        
        <section id="section-source">
            <p>
                Der verwendete Quellcode dieser Portfolio-Webseite ist über Github einsehbar.
            </p>
            <a href="https://github.com/rmalzacher" class="btn-readmore">GitHub Profil</a>
        </section>

        <?php include "footer.php"; ?>
         
        
    
    <script src="main.js"></script>

