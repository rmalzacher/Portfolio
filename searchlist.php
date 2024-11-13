<?php 
    include "header.php"; 
    require "function.php"; 
?>

<main>
    <h3 class="page-heading">Suchergebnisse</h3>
    <section>
        <?php
            if (isset($_POST["query"]) && !empty($_POST["query"])){
                $searchQuery = $_POST["query"];
                //echo "Suchanfrage: ". htmlspecialchars($searchQuery);
                searchPost(htmlspecialchars($searchQuery));
            }else{

                echo "Entschuldigung, die Suchanfrage war leer!";
            }
        ?>
    </section>

<?php include "footer.php"; ?>

<script src="main.js"></script>