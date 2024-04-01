<?php

    require_once('../model/paymentModel.php');

    $phone=$_REQUEST['phone'];
    $amount=$_REQUEST['amount'];
    $wallet=$_REQUEST['wallet'];
    $pin=$_REQUEST['pin'];
    $otp=$_REQUEST['otp'];

    $chkdigit=1;
    $userExist=checkUser($phone);

    /*for(int i=0; i<$length; ++i){

            if($card[i]<'0' || $card[i]>'9'){
            $chkdigit=0;
            }
    }*/
    
    if($phone=="" || $amount=="" || $wallet=="" || $pin="" || $otp=""){
        echo "All fields are required";

    }

    /*else if($chkdigit=0){
        echo "Card number has to be digits";
    }*/

    else if (!$userExist){
        echo "User doesn't exist";
    }

    else {
        $status=verifyMfs($phone, $amount, $wallet, $pin, $otp);
        if ($status){
            //setcookie('fflag', 'true',time()+3600,'/');
            //header('location:../view/fhome.php');
            echo"Successful";
            
        }
        else{
            echo"Incorrect Data";
        }
    }
?>