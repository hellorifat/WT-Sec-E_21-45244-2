<?php

    $rows=3;
    for ($i=0; $i<=$rows; $i++)//i=2
    {
        for ($j=65; $j<65+$i; $j++){
            echo chr($j); 
        } 
        echo "<br>";
        }

?>