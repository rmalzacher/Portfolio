<?php 
    include "header.php"; 

    $pnr = $_GET["pnr"];
    $pca = $_GET["pca"];
    if($pca == "i" || $pca == "c"){$pcd="hs";}else{$pcd="diy";}
    $dir ="./{$pcd}_post/post{$pnr}";
    $postname = "{$dir}/titel.txt";
    $posttext = "{$dir}/text.txt";
    $postimg = "{$dir}/img1.png";
    $postdetail = "{$dir}/details.xml";
    if(!empty($pnr) && $pnr>0){
        if(is_dir($dir) && file_exists($postname) && file_exists($postimg) && file_exists($posttext) && file_exists($postdetail)){
            $ptitel = file_get_contents($postname, false, null, 0, null);
            $ptext = file_get_contents($posttext, false, null, 0, null);
            $pdetail = simplexml_load_file($postdetail);
            $pdate = date("d.m.Y  H:i", filemtime($posttext));
            if(!empty($pdetail->language)){
                $lang="
                    <li>
                        <p>Programmiersprache:
                        <br>$pdetail->language</p>
                    </li>
                ";
            }else{
                $lang=null;
            }
            if(!empty($pdetail->role)){
                $role="
                    <li>
                        <p>Position:
                        <br>$pdetail->role</p>
                    </li>
                ";
            }else{
                $role= null;
            }
            if(!empty($pdetail->course)){
                $course="
                    <li>
                        <p>Modul:
                        <br>$pdetail->course</p>
                    </li>
                ";
            }else{
                $course= null;
            }
            if(file_exists("{$dir}/img2.png")){
                $img2 = "
                    <div class='card-image'>
                        <img src='{$dir}/img2.png' alt='Card Image'>
                    </div>
                ";
            }else{
                $img2 = null;
            }
            if(file_exists("{$dir}/img3.png")){
                $img3 = "
                    <div class='card-image'>
                        <img src='{$dir}/img3.png' alt='Card Image'>
                    </div>
                ";
            }else{
                $img3 = null;
            }
            if(file_exists("{$dir}/text2.txt")){
                $ptext2 =  file_get_contents("{$dir}/text2.txt", false, null, 0, null);
                $text2="
                    <div class='card-description'>
                        <h3>Wissenswertes</h3>
                        <p> $ptext2 </p>
                    </div>
                ";
            }else{
                $text2 = null;
            }
            if(file_exists("{$dir}/anim1.gif")){
                $gif = "
                <div class='card-image'>
                    <img src='{$dir}/anim1.gif' alt='Card Image'>
                </div>
                ";
            }else{
                $gif = null;
            }
            if(file_exists("{$dir}/anim2.gif")){
                $gif2 = "
                <div class='card-image'>
                    <img src='{$dir}/anim2.gif' alt='Card Image'>
                </div>
                ";
            }else{
                $gif2 = null;
            }
            echo"
                <h2 class='page-heading'>$ptitel</h2>
                <div id ='topbar'>
                        <h3>Details</h3>
                            <ul>
                                <li>
                                    <p> Kategorie:
                                    <br> $pdetail->category </p>
                                </li>
                                <li>
                                    <p> Dauer: 
                                    <br> $pdetail->duration </p>
                                </li>
                                <li>
                                    <p> Software: 
                                    <br> $pdetail->software </p>
                                </li>
                                $lang
                                $role
                                $course
                            </ul>
                    </div>
                <div id='post-container'>
                    <section id='projectpost'>
                        <div class='card'>
                            <div class='card-meta-projectpost'>
                                Letzte Änderung am Beitrag zum $pdate Uhr.
                            </div>
                            <div class='card-image'>
                                <img src='$postimg' alt='Card Image'>
                            </div>
                            <div class='card-description'>
                                <h3>Projektbeschreibung</h3>
                                <p> $ptext </p>
                                
                            </div>
                            $img2
                            $img3
                            $gif
                            $gif2
                            $text2
                        </div>
                    </section>

                        <aside id='sidebar'>
                            <h3>Details</h3>
                            <ul>
                                <li>
                                    <p> Kategorie:
                                    <br> $pdetail->category </p>
                                </li>
                                <li>
                                    <p> Dauer: 
                                    <br> $pdetail->duration </p>
                                </li>
                                <li>
                                    <p> Software: 
                                    <br> $pdetail->software </p>
                                </li>
                                $lang
                                $role
                                $course
                            </ul>
                         </aside>
                </div>
            ";

        } else {
            echo"ERROR: Required project file is missing";
        }
    } else {
        echo "ERROR: Project doesnt exist";
    }
    
    include "footer.php";
         
?>
    <script src="main.js"></script>