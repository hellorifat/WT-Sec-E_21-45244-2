<?php

$name = $_REQUEST['name'];
echo $name;

if ($name = "") {
    echo "Name Cannot Be Null";

} 

if ($name == trim($name) && strpos($name, ' ') !== false){
    /*if (substr_count($name, '/s') < 1){
        echo "<h2>Sorry! Validation failed: Usename must contain atleast two parts</h2>";
    } 

    if ($name == trim($name) && str_contains($name, '/s') !== fa) {
        echo "Must contain at least two parts";
    }
    else{*/
    if ((substr_count($name, '@') > 0) || (substr_count($name, '_') > 0) || (substr_count($name, '#') > 0) || (substr_count($name, '$') > 0) 
        || (substr_count($name, '%') > 0) || (substr_count($name, '/') > 0) || (substr_count($name, '*') > 0) || (substr_count($name, '+') > 0) 
        || (substr_count($name, '(') > 0) || (substr_count($name, ')') > 0) || (substr_count($name, '!') > 0) || (substr_count($name, '^') > 0)
        || (substr_count($name, '1') > 0) || (substr_count($name, '2') > 0) || (substr_count($name, '3') > 0) || (substr_count($name, '4') > 0) || (substr_count($name, '5') > 0)
        || (substr_count($name, '6') > 0) || (substr_count($name, '7') > 0) || (substr_count($name, '8') > 0) || (substr_count($name, '9') > 0) || (substr_count($name, '0') > 0)) {
            echo "<h2>Sorry! Validation failed: Username can contain alphabets, period and dash only! </h2>";
        }
        else {
            echo "<h2>Congratulations! It's a valid name!</h2>";
        }
    }
else {
        echo "Must contain at least two parts";
    }


?>