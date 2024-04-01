<?php

    require_once('../model/userModel.php');

    $usertype=$_REQUEST['usertype'];
    $phone=$_REQUEST['phone'];
    $password=$_REQUEST['password'];


    if($phone=="" || $password==""){
        echo "Null Username or Password";

    }
    else if ($usertype=="farmer"){
        $status=loginFarmer($usertype, $phone, $password);
        if ($status){
            session_start();
            $_SESSION['userlevel'] = $phone;
            setcookie('fflag', 'true',time()+3600,'/');
            header('location:../view/fhome.php');
        }
        else{
            echo"Incorrect username or password";
        }
    }
    else if ($usertype=="wholesaler"){
        $status=loginWholesaler($phone, $password);
        if ($status){
            session_start();
            $_SESSION['userlevel'] = $phone;
            setcookie('wflag', 'true',time()+3600,'/');
            header('location:../view/whome.php');
        }
        else{
            echo"Incorrect username or password";
        }
    }
    else if ($usertype=="investor"){
        $status=loginInvestor($phone, $password);
        if ($status){
            session_start();
            $_SESSION['userlevel'] = $phone;
            setcookie('iflag', 'true',time()+3600,'/');
            header('location:../view/ihome.php');
        }
        else{
            echo"Incorrect username or password";
        }
    }
    else {
        $status=loginAdmin($phone, $password);
        if ($status){
            session_start();
            $_SESSION['userlevel'] = $phone;
            setcookie('aflag','true',time()+3600,'/');
            header('location:../view/ahome.php');
        }
        else{
            echo"Incorrect username or password";
        }
    }
?>