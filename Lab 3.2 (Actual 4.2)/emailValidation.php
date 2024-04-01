<?php
$email = $_REQUEST['email'];


if ($email== "") {
    echo "Name Cannot Be Null";
} 

else if (($email== trim($email) && strpos($email, ' ') !== false) ) {
    echo "Cannot contain any space in between";
}

else {
    if (!stristr($email,"@") OR !stristr($email,".")) {
        echo "Email address is not correct "; 
        
        } else {

        echo "email address is correct ";
        }
}

?>