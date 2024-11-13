<?php
    function getcard_diy($maxPost){
        $i = 0;
        $j = true;
        
        for ($i = 1; $j != false || $i <= $maxPost; $i++) {
            $dir ="./diy_post/post{$i}";
            $postname = "{$dir}/titel.txt";
            $posttext = "{$dir}/text.txt";
            $postimg = "{$dir}/img1.png";
            $postdetail = "{$dir}/details.xml";
            if (is_dir($dir)) {
                if(file_exists($postname)){
                    if(file_exists($posttext)){
                        if(file_exists($postimg)){
                            if(file_exists($postdetail)){
                                //all paths checked, all files exist
                                $ptitel = file_get_contents($postname, false, null, 0, null);
                                $ptext = file_get_contents($posttext, false, null, 0, 500);
                                $pdetail = simplexml_load_file($postdetail);
                                $postbtn = "/project.php?page=diy&pnr={$i}&pca=d";
                                $pdetailL = $pdetail->language;
                                if($pdetailL == ""){$pdetailL=$pdetail->software;}
                                echo"
                                    <div class='card'>
                                        <div class='card-image'>
                                            <a href=' $postbtn '>
                                                <img src= ' $postimg ' alt='Card Image'>
                                            </a>
                                        </div>
                                        <div class='card-description'>
                                            <a href=' $postbtn '>
                                                <h3> $ptitel </h3>
                                            </a>
                                            <div class='card-meta'>
                                                $pdetailL / $pdetail->duration
                                            </div>
                                            <p>
                                                $ptext ... 
                                            </p>
                                            <a href=' $postbtn ' class='btn-readmore'>
                                                weiterlesen
                                            </a>
                                        </div>
                                    </div>
                                ";
                                
                                
                            }else{
                                echo"Error: Missing details.xml";
                                $j=false;
                                break;
                            }
                        }else{
                            echo "ERROR: Missing img1.png";
                            $j=false;
                            break;
                        }
                    }else{
                        echo "ERROR: Missing text.txt";
                        $j=false;
                        break;
                    }
                }else{
                    echo "ERROR: Missing title.txt";
                    $j=false;
                    break; 
                }
            } else {
                
                $j=false;
                break; 
            }
            
        }
    }
    function getcard_hs_ia($maxPost){
        $i = 0;
        $j = true;
            
            for ($i = 1; $j != false || $i <= $maxPost; $i++) {
                $dir ="./hs_post/post{$i}";
                $postname = "{$dir}/titel.txt";
                $posttext = "{$dir}/text.txt";
                $postimg = "{$dir}/img1.png";
                $postdetail = "{$dir}/details.xml";
                if (is_dir($dir)) {
                    if(file_exists($postname)){
                        if(file_exists($posttext)){
                            if(file_exists($postimg)){
                                if(file_exists($postdetail)){
                                    //all paths checked, all files exist
                                    $ptitel = file_get_contents($postname, false, null, 0, null);
                                    $ptext = file_get_contents($posttext, false, null, 0, 500);
                                    $pdetail = simplexml_load_file($postdetail);
                                    if($pdetail->category == "Informatics Application"){
                                        $pca="i";
                                        $postbtn = "/project.php?page=hs&pnr={$i}&pca={$pca}";
                                        $pdetailL = $pdetail->language;
                                        if($pdetailL == ""){$pdetailL=$pdetail->software;}
                                        if($pdetail->category == "Informatics Application"){
                                            echo"
                                                <div class='card'>
                                                    <div class='card-image'>
                                                        <a href=' $postbtn '>
                                                            <img src= ' $postimg ' alt='Card Image'>
                                                        </a>
                                                    </div>
                                                    <div class='card-description'>
                                                        <a href=' $postbtn '>
                                                            <h3> $ptitel </h3>
                                                        </a>
                                                        <div class='card-meta'>
                                                            $pdetailL / $pdetail->duration
                                                        </div>
                                                        <p>
                                                            $ptext ... 
                                                        </p>
                                                        <a href=' $postbtn ' class='btn-readmore'>
                                                            weiterlesen
                                                        </a>
                                                    </div>
                                                </div>
                                            ";
                                        }else{
                                            break;
                                        }
                                    }else{
                                        
                                    }
                                }else{
                                    echo"Error: Missing details.xml";
                                    $j=false;
                                    break;
                                }
                            }else{
                                echo "ERROR: Missing img1.png";
                                $j=false;
                                break;
                            }
                        }else{
                            echo "ERROR: Missing text.txt";
                            $j=false;
                            break;
                        }
                    }else{
                        echo "ERROR: Missing title.txt";
                        $j=false;
                        break; 
                    }
                } else {
                        
                    $j=false;
                    break; 
                }   
            }
    }

    function getcard_hs_ccd($maxPost){
        $i = 0;
            $j = true;
            
            for ($i = 1; $j != false || $i <= $maxPost ; $i++) {
                $dir ="./hs_post/post{$i}";
                $postname = "{$dir}/titel.txt";
                $posttext = "{$dir}/text.txt";
                $postimg = "{$dir}/img1.png";
                $postdetail = "{$dir}/details.xml";
                if (is_dir($dir)) {
                    if(file_exists($postname)){
                        if(file_exists($posttext)){
                            if(file_exists($postimg)){
                                if(file_exists($postdetail)){
                                    //all paths checked, all files exist
                                    $ptitel = file_get_contents($postname, false, null, 0, null);
                                    $ptext = file_get_contents($posttext, false, null, 0, 500);
                                    $pdetail = simplexml_load_file($postdetail);
                                    if($pdetail->category == "Creative Content Design"){
                                        $pca="c";
                                        $postbtn = "/project.php?pnr={$i}&pca={$pca}";
                                        $pdetailL = $pdetail->language;
                                        if($pdetailL == ""){$pdetailL=$pdetail->software;}
                                        if($pdetail->category == "Creative Content Design"){
                                            echo"
                                                <div class='card'>
                                                    <div class='card-image'>
                                                        <a href=' $postbtn '>
                                                            <img src= ' $postimg ' alt='Card Image'>
                                                        </a>
                                                    </div>
                                                    <div class='card-description'>
                                                        <a href=' $postbtn '>
                                                            <h3> $ptitel </h3>
                                                        </a>
                                                        <div class='card-meta'>
                                                            $pdetailL / $pdetail->duration
                                                        </div>
                                                        <p>
                                                            $ptext ... 
                                                        </p>
                                                        <a href=' $postbtn ' class='btn-readmore'>
                                                            weiterlesen
                                                        </a>
                                                    </div>
                                                </div>
                                            ";
                                        }else{
                                            break;
                                        }
                                    }else{
                                        
                                    }
                                    
                                    
                                }else{
                                    echo"Error: Missing details.xml";
                                    $j=false;
                                    break;
                                }
                            }else{
                                echo "ERROR: Missing img1.png";
                                $j=false;
                                break;
                            }
                        }else{
                            echo "ERROR: Missing text.txt";
                            $j=false;
                            break;
                        }
                    }else{
                        echo "ERROR: Missing title.txt";
                        $j=false;
                        break; 
                    }
                } else {
                    
                    $j=false;
                    break; 
                }
                
            }
    }

    function searchPost($target){
        switch ($target) {
            case "Informatics Application":
                echo '<meta http-equiv="refresh" content="0; url=./hs.php?page=hs#IA">'; 
                break;
            case "Creative Content Design":
                echo '<meta http-equiv="refresh" content="0; url=./hs.php?page=hs#CCD">';
                break;
            default;
                $dirarray = [
                    0 => "./hs_post",
                    1 => "./diy_post",
                ];
                foreach($dirarray as $dir){
                    //print_r($dir);
                    $scan = scandir($dir);
                    //print_r($scan);
                    foreach ($scan as $value) {
                        if( $value ==='.' || $value === '..') { continue;}
                        //echo $value;
                        $dirpost ="{$dir}/{$value}";
                        //echo $dirpost;
                        $posttext = "{$dirpost}/text.txt";
                        $postdetail = "{$dirpost}/details.xml";

                        if(file_exists($posttext) && file_exists($postdetail)) {
                            $ptext = file_get_contents($posttext, false, null, 0, null);
                            $pdetail = simplexml_load_file($postdetail);

                            if(str_contains($ptext,$target) || str_contains($pdetail,$target)){
                                $postname = "{$dirpost}/titel.txt";
                                $postimg = "{$dirpost}/img1.png";
                                $ptitel = file_get_contents($postname, false, null, 0, null);
                                if($pdetail->category == "Creative Content Design"){$pca="c";$page="hs";}
                                else if($pdetail->category == "Informatics Application"){$pca="i";$page="hs";}
                                else{$pca="d";$page="diy";}
                                $i= substr($value, 4);
                                $postbtn = "/project.php?page={$page}&pnr={$i}&pca={$pca}";
                                $pdetailL = $pdetail->language;
                                if($pdetailL == ""){$pdetailL=$pdetail->software;}
                                echo"
                                    <div class='card'>
                                        <div class='card-image'>
                                            <a href=' $postbtn '>
                                                <img src= ' $postimg ' alt='Card Image'>
                                            </a>
                                        </div>
                                        <div class='card-description'>
                                            <a href=' $postbtn '>
                                                <h3> $ptitel </h3>
                                            </a>
                                            <div class='card-meta'>
                                                $pdetailL / $pdetail->duration
                                            </div>
                                            <p>
                                                $ptext ... 
                                            </p>
                                            <a href=' $postbtn ' class='btn-readmore'>
                                                weiterlesen
                                            </a>
                                        </div>
                                    </div>
                                ";
                                
                            }else{
                                echo "Es wurden keine Beiträge gefunden.";
                                break;
                            }
                        }else{
                            break;
                        }
                    }
                }
                
                break;
                
        }
    }
?>