<?php
    require_once('../model/userModel.php');
    
    $phone = $_REQUEST['phone'];
    $name = $_REQUEST['name'];
    $nid=$_REQUEST['nid'];
    $password=$_REQUEST['password'];
    $cfpassword=$_REQUEST['cfpassword'];
    

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

    
    if ($phone == "" || $name == "" || $nid == "" || $password == "" || $cfpassword == "") {
        echo "Every field is required";

    } 

    /*else if($password!=$cfpassword){
        echo "Both Password does not match";
    }*/
    
    else {
        //function validateRegister($userid, $password, $cPassword, $name, $email, $usertype);

        //$con = getConnection();
        /*if($con === false){
            die("ERROR: Could not connect." . mysqli_connect_error());
          }*/
        
        $farmer=['phone'=>$phone, 'name'=>$name, 'nid'=>$nid, 'password'=>$password];
        //$sql = "INSERT INTO user VALUES('{$user['userid']}', '{$user['password']}', '{$user['name']}', '{$user['email']}'), '{$user['usertype']}')";

        //$status = mysqli_query($con, $sql);
        $status=regFarmer($farmer);


        if($status) {
            //$_SESSION['user'] = $user;
            header('location: ../view/dflogin.php');
        } else {
            echo "<h2> Database Error! </h2>";
        }
        
    }


?>