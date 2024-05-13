<?php

    require_once('dfdb.php');

    function userBalance($userlevel){
        $con=dbConnection();
        $sql="SELECT * FROM allusers WHERE phone = '$userlevel'";
        $result = mysql_query($sql);

            while($row = mysql_fetch_array($result)) {
            $ubalance=$row['balance']; // Print a single column data
            echo print_r($row);       // Print the entire row data
            
            return $ubalance;


  
    }
    }
    ?>