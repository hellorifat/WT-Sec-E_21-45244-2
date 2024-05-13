<?php

    require_once('dfdb.php');

    function checkUser($phone){
        $con=dbConnection();
        $sql="select * from allusers where phone='{$phone}'";
        $result1=mysqli_query($con, $sql);
        $count1=mysqli_num_rows($result1);

        /*$sql="select * from wholesalers where phone='{$phone}'";
        $result2=mysqli_query($con, $sql);
        $count2=mysqli_num_rows($result2);

        $sql="select * from investors where phone='{$phone}'";
        $result3=mysqli_query($con, $sql);
        $count3=mysqli_num_rows($result3);*/

        if ($count1==1){
            return true;
        }
        else{
            return false;
        }
    }

    function verifyCard($phone, $amount, $card, $cvc, $expiry, $otp){
        $con=dbConnection();
        $sql="select * from cards where card='{$card}'and cvc='{$cvc}' and expiry='{$expiry}' and otp='{$otp}'";
        $result1=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result1);

        if ($count==1){
            $query = "SELECT balance FROM allusers WHERE phone = '{$phone}'";
            $result2 = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result2))
            {
                $balance = $row['balance'];
                $balance = $balance + $amount;
                $query2="update allusers set balance='$balance' where phone='$phone'";
                $result3 = mysqli_query($con, $query2);
            }
            return true;
        }
        else{
            return false;
        }
    }

    function verifyMfs($phone, $amount, $wallet, $pin, $otp){
        $con=dbConnection();
        $sql="select * from mfs where wallet='{$wallet}'and pin='{$pin}' and otp='{$otp}'";
        $result1=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result1);

        if ($count==1){
            $query = "SELECT balance FROM allusers WHERE phone = {'$phone'}";
            $result2 = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result2))
            {
                
                $balance = $row['balance'];
                $balance = $balance + $amount;
                $query2="update allusers set balance='$balance' where phone='$phone'";
                $result3 = mysqli_query($con, $query2);
            }
            return true;
        }
        else{
            return false;
        }
    }

    function pMfs($phone, $amount, $wallet, $pin, $otp){
        $con=dbConnection();
        $sql="select * from mfs where wallet='{$wallet}'and pin='{$pin}' and otp='{$otp}'";
        $result=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result);

        if ($count==1){
            return true;
        }
        else{
            return false;
        }
    }


    ?>