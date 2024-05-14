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
    //$userexist=['phone'=>$phone];
    //$uExist= userExist($userexist);
    
    if ($phone == "" || $name == "" || $nid == "" || $password == "" || $cfpassword == "") {
        echo "All fields are required";

    } 
    else if (strlen($phone)<=10){
        echo "Invalid Phone Number";
    }
 
    else if ((substr_count($name, '@') > 0) || (substr_count($name, '_') > 0) || (substr_count($name, '#') > 0) || (substr_count($name, '$') > 0) 
    || (substr_count($name, '%') > 0) || (substr_count($name, '/') > 0) || (substr_count($name, '*') > 0) || (substr_count($name, '+') > 0) 
    || (substr_count($name, '(') > 0) || (substr_count($name, ')') > 0) || (substr_count($name, '!') > 0) || (substr_count($name, '^') > 0)
    || (substr_count($name, '1') > 0) || (substr_count($name, '2') > 0) || (substr_count($name, '3') > 0) || (substr_count($name, '4') > 0) || (substr_count($name, '5') > 0)
    || (substr_count($name, '6') > 0) || (substr_count($name, '7') > 0) || (substr_count($name, '8') > 0) || (substr_count($name, '9') > 0) || (substr_count($name, '0') > 0)) {

        echo "Name can contain alphabets, period and dash only!";

    }

    else if (strlen($nid)<=9){
        echo "Invalid NID Number";
    }
    else if((substr_count($password, '@')<0) || (substr_count($password,'#')<0) || (substr_count($password,'!')<0) ||(substr_count($password,'$')<0) ||(substr_count($password,'%')<0) ||(substr_count($password,'^')<0) ||(substr_count($password,'&')<0) ||
    (substr_count($password,'*')<0) ||(substr_count($password,'(\)')<0) || (substr_count($password,'+')<0) ||(substr_count($password,'-')<0) ||(substr_count($password,'.')<0) ||(substr_count($password,',')<0) ||(substr_count($password,';')<0) ||
    (substr_count($password,':')<0) ||(substr_count($password,'_')<0)){
        echo "Incluse a Special Character";
    }

    else if((substr_count($password,'0')<0) || (substr_count($password,'1')<0) || (substr_count($password,'2')<0) ||(substr_count($password,'3')<0) ||(substr_count($password,'4')<0) ||(substr_count($password,'5')<0) ||(substr_count($password,'6')<0) ||
    (substr_count($password,'7')<0) ||(substr_count($password,'8')<0) || (substr_count($password,'9')<0)){
        echo "Password Must Contain Digits";
    }

    else if((substr_count($password,'a')<0) || (substr_count($password,'b')<0) || (substr_count($password,'c')<0) ||(substr_count($password,'d')<0) ||(substr_count($password,'e')<0) ||(substr_count($password,'f')<0) ||(substr_count($password,'g')<0) ||
    (substr_count($password,'h')<0) ||(substr_count($password,'i')<0) || (substr_count($password,'j')<0) ||(substr_count($password,'k')<0) ||(substr_count($password,'l')<0) ||(substr_count($password,'m')<0) ||(substr_count($password,'n')<0) ||
    (substr_count($password,'o')<0) ||(substr_count($password,'p')<0)||(substr_count($password,'q')<0)||(substr_count($password,'r')<0)||(substr_count($password,'s')<0)||(substr_count($password,'t')<0)||(substr_count($password,'u')<0)||
    (substr_count($password,'v')<0)||(substr_count($password,'w')<0)||(substr_count($password,'x')<0)||(substr_count($password,'y')<0)||(substr_count($password,'z')<0)){
        echo "Password Must Contain Lowercase";
    }

    else if((substr_count($password,'A')<0) || (substr_count($password,'B')<0) || (substr_count($password,'C')<0) ||(substr_count($password,'D')<0) ||(substr_count($password,'E')<0) ||(substr_count($password,'F')<0) ||(substr_count($password,'G')<0) ||
    (substr_count($password,'H')<0) ||(substr_count($password,'I')<0) || (substr_count($password,'J')<0) ||(substr_count($password,'K')<0) ||(substr_count($password,'L')<0) ||(substr_count($password,'M')<0) ||(substr_count($password,'N')<0) ||
    (substr_count($password,'O')<0) ||(substr_count($password,'P')<0)||(substr_count($password,'Q')<0)||(substr_count($password,'R')<0)||(substr_count($password,'S')<0)||(substr_count($password,'T')<0)||(substr_count($password,'U')<0)||
    (substr_count($password,'V')<0)||(substr_count($password,'W')<0)||(substr_count($password,'X')<0)||(substr_count($password,'Y')<0)||(substr_count($password,'Z')<0)){
        echo "Password Must Contain Uppercase";
    }

    else if ($password !== $cfpassword) {
        echo "Password didn't Match! Try Again.";
     }
    /*else if (!isset($_POST['tnc'])){
        echo "You have to agree with the T&C";
    }

    else if ($uExist){
        echo "Phone number is already registered. Try with a different one";
    }*/
    else {
    
        
        $allusers=['usertype'=>$usertype, 'phone'=>$phone, 'name'=>$name, 'nid'=>$nid, 'password'=>$password];
        //$sql = "INSERT INTO user VALUES('{$user['userid']}', '{$user['password']}', '{$user['name']}', '{$user['email']}'), '{$user['usertype']}')";

        //$status = mysqli_query($con, $sql);
        $status=regAlluser($allusers);


        if($status) {
            //$_SESSION['user'] = $user;
            echo"Registration Successful";
            //header('location: ../view/dflogin.php');
        } else {
            echo "<h2> Database Error! </h2>";
        }
        
    }

/*$allusers=['usertype'=>$usertype, 'phone'=>$phone, 'name'=>$name, 'nid'=>$nid, 'password'=>$password];
        //$sql = "INSERT INTO user VALUES('{$user['userid']}', '{$user['password']}', '{$user['name']}', '{$user['email']}'), '{$user['usertype']}')";

        //$status = mysqli_query($con, $sql);
        $status=regAlluser($allusers);


        if($status) {
            //$_SESSION['user'] = $user;
            echo"Registration Successful";
            //header('location: ../view/dflogin.php');
        } else {
            echo "<h2> Database Error! </h2>";
        }*/
?>