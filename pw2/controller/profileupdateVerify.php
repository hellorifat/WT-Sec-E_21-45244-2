<?php

    session_start();

    if(!isset($_COOKIE['fflag'] || $_COOKIE['wflag'] || $_COOKIE['iflag' ||$_COOKIE['aflag']])){
    header('location: dflogin.php');
}



    require_once('../model/userModel.php');
    
    $phone = $_GET['phone'];
    $name = $_REQUEST['name'];
    $nid=$_REQUEST['nid'];
    $password=$_REQUEST['password'];
    $image=$_REQUEST['image'];

    /*if($phone == "" || $name == "" || $email == ""){
        echo "Null username/password/email";
    }else {
        $user = ['username'=> $username, 'email'=>$email, 'password'=>$password];
        $status = createUser($user);
        if($status) {
            header('location: ../view/login.php');
        }else{
            echo "DB Error, please try again";
        }
    }*/


    validImage();
    
    if ($name == "" || $nid == "" || $password == "") {
        echo "All fields are required";

    } 

    else if (!preg_match ("/^[a-zA-z\s]*$/", $name)){
        echo "Invalid Name input";
    }

    else if (!preg_match('/^[0-9]{10}+$/', $nid)){
        echo "Invalid NID Number";
    }
    else if((!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', $password))){
        echo "Enter a Strong Password";
    }

    else if (!validImage()){
        echo "Invalid Image (Format/File Size)";

    }

    else {
    
        
        $upprofile=['phone'=>$phone, 'name'=>$name, 'nid'=>$nid, 'password'=>$password, 'image'=>$image];
        //$sql = "INSERT INTO user VALUES('{$user['userid']}', '{$user['password']}', '{$user['name']}', '{$user['email']}'), '{$user['usertype']}')";

        //$status = mysqli_query($con, $sql);
        $status=updateProfile($upprofile);

        if($status) {
            //$_SESSION['user'] = $user;
            echo "<h2> Updatation Successful</h2>";
        } else {
            echo "<h2> Database Error! </h2>";
        }
        
    }
?>