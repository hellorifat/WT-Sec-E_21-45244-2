<?php
    require_once('../model/userModel.php');
    
    $usertype=$_REQUEST['usertype'];
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
    $userexist=['phone'=>$phone];
    $uExist= userExist($userexist);
    
    if ($phone == "" || $name == "" || $nid == "" || $password == "" || $cfpassword == "") {
        echo "All fields are required";

    } 
    else if (!preg_match('/^[0-9]{11}+$/', $phone)){
        echo "Invalid Phone Number";
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

    else if ($password !== $cfpassword) {
        echo "Password didn't Match! Try Again.";
     }
    else if (!isset($_POST['tnc'])){
        echo "You have to agree with the T&C";
    }

    else if ($uExist){
        echo "Phone number is already registered. Try with a different one";
    }
    else {
    
        
        $allusers=['usertype'=>$usertype, 'phone'=>$phone, 'name'=>$name, 'nid'=>$nid, 'password'=>$password];
        //$sql = "INSERT INTO user VALUES('{$user['userid']}', '{$user['password']}', '{$user['name']}', '{$user['email']}'), '{$user['usertype']}')";

        //$status = mysqli_query($con, $sql);
        $status=regAlluser($allusers);


        if($status) {
            //$_SESSION['user'] = $user;
            header('location: ../view/dflogin.php');
        } else {
            echo "<h2> Database Error! </h2>";
        }
        
    }
?>