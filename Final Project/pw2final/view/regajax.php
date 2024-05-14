<?php
    require_once('../model/userModel.php');
    
    $usertype=$_REQUEST['usertype'];
    $phone = $_REQUEST['phone'];
    $name = $_REQUEST['name'];
    $nid=$_REQUEST['nid'];
    $password=$_REQUEST['password'];
    $cfpassword=$_REQUEST['cfpassword'];

    $userexist=['phone'=>$phone];
    //$uExist= userExist($userexist);
    
    $allusers=['usertype'=>$usertype, 'phone'=>$phone, 'name'=>$name, 'nid'=>$nid, 'password'=>$password];
        //$sql = "INSERT INTO user VALUES('{$user['userid']}', '{$user['password']}', '{$user['name']}', '{$user['email']}'), '{$user['usertype']}')";

        //$status = mysqli_query($con, $sql);
    $status=regAlluser($allusers);

    if($status) {
            //$_SESSION['user'] = $user;
        header('location: ../view/dflogin.php');
        echo "Done";
            
    } else {
        echo "<h2> Database Error! </h2>";
    }
        
    
?>