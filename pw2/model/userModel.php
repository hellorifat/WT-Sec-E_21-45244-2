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
    function loginWholesaler($phone, $password){
        $con=dbConnection();
        $sql="select * from wholesalers where phone='{$phone}' and password='{$password}'";
        $result=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result);

        if ($count==1){
            return true;
        }
        else{
            return false;
        }
    }
    function loginInvestor($phone, $password){
        $con=dbConnection();
        $sql="select * from investors where phone='{$phone}' and password='{$password}'";
        $result=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result);

        if ($count==1){
            return true;
        }
        else{
            return false;
        }
    }
    function loginAdmin($phone, $password){
        $con=dbConnection();
        $sql="select * from admins where phone='{$phone}' and password='{$password}'";
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

    function regWholesaler($wholesaler){
        $con=dbConnection();
        $sql="insert into wholesalers values ('{$wholesaler['phone']}','{$wholesaler['name']}', '{$wholesaler['nid']}', '{$wholesaler['password']}')";
        
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }

  
    }

    function regInvestor($investor){
        $con=dbConnection();
        $sql="insert into investors values ('{$investor['phone']}','{$investor['name']}', '{$investor['nid']}', '{$investor['password']}')";
        
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }

  
    }


    ?>