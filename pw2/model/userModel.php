<?php

    require_once('dfdb.php');

    function loginFarmer($phone, $password){
        $con=dbConnection();
        $sql="select * from farmers where phone='{$phone}' and password='{$password}'";
        $result=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result);

        if ($count==1){
            return true;
        }
        else{
            return false;
        }
    }

    function regFarmer($farmer){
        $con=dbConnection();
        $sql="insert into farmers values ('{$farmer['phone']}','{$farmer['name']}', '{$farmer['nid']}', '{$farmer['password']}')";
        
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }

  
    }


    ?>