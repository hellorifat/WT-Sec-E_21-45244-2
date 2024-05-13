<?php

    require_once('../model/userModel.php');

    $phone=$_REQUEST['phone'];
    $password=$_REQUEST['password'];

    if($phone=="" || $password==""){
        echo "Null Username or Password";

    }

    else {
        $status=loginInvestor($phone, $password);
        if ($status){
            setcookie('iflag', 'true',time()+3600,'/');
            header('location:../view/ihome.php');
        }
        else{
            echo"Incorrect username or password";
        }
    }
?>