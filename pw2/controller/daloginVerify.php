<?php

    require_once('../model/userModel.php');

    $phone=$_REQUEST['phone'];
    $password=$_REQUEST['password'];

    if($phone=="" || $password==""){
        echo "Null Username or Password";

    }

    else {
        $status=loginAdmin($phone, $password);
        if ($status){
            setcookie('aflag', 'true',time()+3600,'/');
            header('location:../view/ahome.php');
        }
        else{
            echo"Incorrect username or password";
        }
    }
?>