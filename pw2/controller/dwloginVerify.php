<?php

    require_once('../model/userModel.php');

    $phone=$_REQUEST['phone'];
    $password=$_REQUEST['password'];

    if($phone=="" || $password==""){
        echo "Null Username or Password";

    }

    else {
        $status=loginWholesaler($phone, $password);
        if ($status){
            setcookie('wflag', 'true',time()+3600,'/');
            header('location:../view/whome.php');
        }
        else{
            echo"Incorrect username or password";
        }
    }
?>