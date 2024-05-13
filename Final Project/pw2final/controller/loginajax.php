<?php
    //$status = checkUsername($username);
    echo "Your username is: ".$username;


    require_once('../model/userModel.php');

    $usertype=$_REQUEST['usertype'];
    $phone=$_REQUEST['phone'];
    $password=$_REQUEST['password'];


    if($phone=="" || $password==""){
        echo "Null Username or Password";

    }

    else ($usertype=="farmer"){
        $status=loginFarmer($usertype, $phone, $password);
        if ($status){
            echo "Login Successful";
        }
        else{
            echo"Incorrect username or password";
        }
    }
?>