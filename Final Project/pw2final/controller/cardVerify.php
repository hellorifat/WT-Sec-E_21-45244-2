<?php

    require_once('../model/userModel.php');
    require_once('../model/paymentModel.php');

    $phone=$_REQUEST['phone'];
    $amount=$_REQUEST['amount'];
    $card=$_REQUEST['card'];
    $cvc=$_REQUEST['cvc'];
    $expiry=$_REQUEST['expiry'];
    $otp=$_REQUEST['otp'];
    $length = strlen($card);

    $chkdigit=1;
    $userExist=checkUser($phone);

    /*for(int i=0; i<$length; ++i){

            if($card[i]<'0' || $card[i]>'9'){
            $chkdigit=0;
            }
    }*/
    
    if($phone=="" || $amount=="" || $card=="" || $cvc=="" || $expiry=="" || $otp==""){
        echo "All fields are required";

    }

    /*else if($chkdigit=0){
        echo "Card number has to be digits";
    }*/

    else if (!$userExist){
        echo "User doesn't exist";
    }

    else {
        $status=verifyCard($phone, $amount, $card, $cvc, $expiry, $otp);
        if ($status){
            //setcookie('fflag', 'true',time()+3600,'/');
            //header('location:../view/fhome.php');
            echo"Successful";
        }
        else{
            echo"Incorrect Data";
            echo $phone;
            echo $amount;
            echo $card;
            echo $cvc;
            echo $expiry;
            echo $otp;
        }
    }
?>