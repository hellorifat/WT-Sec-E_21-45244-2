<?php

function checkmydate($date) {
  $tempDate = explode('-', $date);
  return checkdate($tempDate[1], $tempDate[2], $tempDate[0]);
}

$dob = $_REQUEST['dob'];

/*$date1=$dob[3];
$date2=$dob[4];
$month1=$dob[0];
$month2=$dob[1];
$year1=$dob[6];
$year2=$dob[7];
$year3=$dob[8];
$year4=$dob[9];*/


if ($dob== "") {
    echo "Date Cannot Be Null";
} 

else if ($dob[3]==0 || $dob[3]==1 || $dob[3]==2 && $dob[4]<=8){

            if ($dob[0]==0 && $dob[1]<=9){
                if ($dob[6]==1 && $dob[7]>=0 && $dob[8]>0 & $dob[9]>=0 )
                {
                    echo "It's Valid";
                }
                else if ($dob[6]==2 && $dob[7]==0 && $dob[8]<=2 & $dob[9]<=4 )
                {
                    echo "It's Valid";
                }
                else {
                    echo "Invalid Year";
                }
            }
            else if ($dob[0]==1 && $dob[1]<=2){

                if ($dob[6]==1 && $dob[7]>=0 && $dob[8]>0 & $dob[9]>=0 )
                {
                    echo "It's Valid";
                }
                else if ($dob[6]==2 && $dob[7]==0 && $dob[8]<=2 & $dob[9]<=4 )
                {
                    echo "It's Valid";
                }
                else {
                    echo "Invalid Date";
                }
            }
            else {
                echo "Invalid Month";
            }
    }

    else if (($dob[3]==2 && $dob[4]==9) || ($dob[3]==3 && $dob[4]<=1)){

        if (($dob[0]==0 && $dob[1]<=1) || ($dob[0]==0 && $dob[1]>=9)){

            if ($dob[6]==1 && $dob[7]>=0 && $dob[8]>0 & $dob[9]>=0 )
            {
                echo "It's Valid";
            }
            else if ($dob[6]==2 && $dob[7]==0 && $dob[8]<=2 & $dob[9]<=4 )
            {
                echo "It's Valid";
            }
            else {
                echo "Invalid Year";
            }
        }

        else if ($dob[0]==1 && $dob[1]<=2){
            
            if ($dob[6]==1 && $dob[7]>=0 && $dob[8]>0 & $dob[9]>=0 )
            {
                echo "It's Valid";
            }
            else if ($dob[6]==2 && $dob[7]==0 && $dob[8]<=2 & $dob[9]<=4 )
            {
                echo "It's Valid";
            }
            else {
                echo "Invalid Year";
            }
        }
        else {
            echo "Invalid Month for Date. Cause It's february!";
        }
}
    
    else if ($dob[3]==3 && $dob[4]<=1){
        

        if ($dob[0]==0 && $dob[1]<=9){
            if ($dob[6]==1 && $dob[7]>=0 && $dob[8]>0 & $dob[9]>=0 )
            {
                echo "It's Valid";
            }
            else if ($dob[6]==2 && $dob[7]==0 && $dob[8]<=2 & $dob[9]<=4 )
            {
                echo "It's Valid";
            }
            else {
                echo "Invalid Year";
            }
        }
        else if ($dob[0]==1 && $dob[1]<=2){

            if ($dob[6]==1 && $dob[7]>=0 && $dob[8]>0 & $dob[9]>=0 )
            {
                echo "It's Valid";
            }
            else if ($dob[6]==2 && $dob[7]==0 && $dob[8]<=2 & $dob[9]<=4 )
            {
                echo "It's Valid";
            }
            else {
                echo "Invalid Date";
            }
        }
        else {
            echo "Invalid Month";
        }
    }

    else 
    {
        echo "Invalid Date";
    }


?>