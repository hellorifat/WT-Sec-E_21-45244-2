<?php

    require_once('../model/userModel.php');

    $phone=$_REQUEST['phone'];
    $password=$_REQUEST['password'];

    if($phone=="" || $password==""){
        echo "Null Username or Password";

    }

    else {
        $status=loginFarmer($phone, $password);
        if ($status){
            setcookie('flag', 'true',time()+3600,'/');
            header('location:../view/fhome.php');
        }
        else{
            echo"Incorrect username or password";
        }
    }
?>