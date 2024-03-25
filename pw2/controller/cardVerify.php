<?php

    require_once('../model/userModel.php');

    $phone=$_REQUEST['phone'];
    $amount=$_REQUEST['amount'];
    $card=$_REQUEST['card'];
    $cvc=$_REQUEST['cvc'];
    $expiry=$_REQUEST['expiry'];
    $otp=$_REQUEST['otp'];
    $length = strlen($card);

    for(int i=0; i<$length; ++i){

            if($card[i]<'0' || $card[i]>'9'){
            $chkdigit=0;
            }
    }
    
    if($phone=="" || $password=="" || ){
        echo "Null Username or Password";

    }

    else if($chkdigit=0){
        echo "Card number has to be digits";
    }


    else {
        $status=loginFarmer($phone, $password);
        if ($status){
            setcookie('fflag', 'true',time()+3600,'/');
            header('location:../view/fhome.php');
        }
        else{
            echo"Incorrect username or password";
        }
    }
?>