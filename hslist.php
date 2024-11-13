<main>
    <h3 class="page-heading">Hochschulprojekte</h3>
    <section>
        <div>
            <p>Im Rahmen meines Medieninformatik Studiums 
            an der Hochschule Mittweida habe ich vielfältiges 
            Wissen durch praktisches Umsetzen innerhalb 
            verschiedener Projekte erlernen dürfen. 
            Die Projekte unterscheiden sich hierbei zwischen
            <b><a href ="#IA">Informatics Application</a></b> 
            mit einem programmierlastigen Schwerpunkt und 
            <b><a href ="#CCD">Creative Content Design</a></b>
            mit dem Schwerpunkt Gestaltung.</p>
        </div>
    </section>
    <a href="">
        <h2 id="IA" class="section-heading">Informatics Application</h2>
    </a>
    <section>
        <?php 
            require "function.php";
            getcard_hs_ia(null);
        ?>
    </section>
    <br>
    <a href="">
        <h2 id="CCD" class="section-heading">Creative Content Design</h2>
    </a>
    <section>
        <?php 
            
            getcard_hs_ccd(null);
        ?>
    </section>