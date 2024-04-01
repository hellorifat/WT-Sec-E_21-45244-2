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
        $result=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result);

        if ($count==1){
            $query = "SELECT balance FROM farmers WHERE phone = $phone";
            $result = mysql_query($query);
            while ($row = mysql_fetch_assoc($result))
            {
                $balance = $row['balance'];
                $balance = $balance + $amount;
                $query="update farmers set balance=$balance where phone=$phone";
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
        $result=mysqli_query($con, $sql);
        $count=mysqli_num_rows($result);

        if ($count==1){
            $query = "SELECT balance FROM farmers WHERE phone = $phone";
            $result = mysql_query($query);
            while ($row = mysql_fetch_assoc($result))
            {
                $balance = $row['balance'];
                $balance = $balance + $amount;
                $query="update farmers set balance=$balance where phone=$phone";
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