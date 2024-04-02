<?php
    $sfa="cookies";
    $wt = array ("xml","html", "php", "session", "cookies", "file", "project");


    for ($i=0; $i<=sizeof($wt); ++$i){
        if($wt[$i]==$sfa){
            echo $wt[$i]."<br>"."found at position". $i;
        }
    }


?>