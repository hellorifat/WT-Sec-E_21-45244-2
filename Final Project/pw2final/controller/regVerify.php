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
    else if (strlen($phone)<=10){
        echo "Invalid Phone Number";
    }
    
    

    else if (($name.count('@') > 0) || ($name.count('_') > 0) || ($name.count(  '#') > 0) || ($name.count(  '$') > 0) 
    || ($name.count(  '%') > 0) || ($name.count(  '/') > 0) || ($name.count(  '*') > 0) || ($name.count(  '+') > 0) 
    || ($name.count(  '(') > 0) || ($name.count(  ')') > 0) || ($name.count(  '!') > 0) || ($name.count(  '^') > 0)
    || ($name.count(  '1') > 0) || ($name.count(  '2') > 0) || ($name.count(  '3') > 0) || ($name.count(  '4') > 0) || ($name.count(  '5') > 0)
    || ($name.count(  '6') > 0) || ($name.count(  '7') > 0) || ($name.count(  '8') > 0) || ($name.count(  '9') > 0) || ($name.count(  '0') > 0)) {

        echo "Name can contain alphabets, period and dash only!";

    }

    else if (strlen($nid)<=9){
        echo "Invalid NID Number";
    }
    else if(($password.count('@')<0) || ($password.count('#')<0) || ($password.count('!')<0) ||($password.count('$')<0) ||($password.count('%')<0) ||($password.count('^')<0) ||($password.count('&')<0) ||
    ($password.count('*')<0) ||($password.count('(\)')<0) || ($password.count('+')<0) ||($password.count('-')<0) ||($password.count('.')<0) ||($password.count(',')<0) ||($password.count(';')<0) ||
    ($password.count(':')<0) ||($password.count('_')<0)){
        echo "Incluse a Special Character";
    }

    else if(($password.count('0')<0) || ($password.count('1')<0) || ($password.count('2')<0) ||($password.count('3')<0) ||($password.count('4')<0) ||($password.count('5')<0) ||($password.count('6')<0) ||
    ($password.count('7')<0) ||($password.count('8')<0) || ($password.count('9')<0)){
        echo "Password Must Contain Digits";
    }

    else if(($password.count('a')<0) || ($password.count('b')<0) || ($password.count('c')<0) ||($password.count('d')<0) ||($password.count('e')<0) ||($password.count('f')<0) ||($password.count('g')<0) ||
    ($password.count('h')<0) ||($password.count('i')<0) || ($password.count('j')<0) ||($password.count('k')<0) ||($password.count('l')<0) ||($password.count('m')<0) ||($password.count('n')<0) ||
    ($password.count('o')<0) ||($password.count('p')<0)||($password.count('q')<0)||($password.count('r')<0)||($password.count('s')<0)||($password.count('t')<0)||($password.count('u')<0)||
    ($password.count('v')<0)||($password.count('w')<0)||($password.count('x')<0)||($password.count('y')<0)||($password.count('z')<0)){
        echo "Password Must Contain Lowercase";
    }

    else if(($password.count('A')<0) || ($password.count('B')<0) || ($password.count('C')<0) ||($password.count('D')<0) ||($password.count('E')<0) ||($password.count('F')<0) ||($password.count('G')<0) ||
    ($password.count('H')<0) ||($password.count('I')<0) || ($password.count('J')<0) ||($password.count('K')<0) ||($password.count('L')<0) ||($password.count('M')<0) ||($password.count('N')<0) ||
    ($password.count('O')<0) ||($password.count('P')<0)||($password.count('Q')<0)||($password.count('R')<0)||($password.count('S')<0)||($password.count('T')<0)||($password.count('U')<0)||
    ($password.count('V')<0)||($password.count('W')<0)||($password.count('X')<0)||($password.count('Y')<0)||($password.count('Z')<0)){
        echo "Password Must Contain Uppercase";
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
            echo"Registration Successful";
            //header('location: ../view/dflogin.php');
        } else {
            echo "<h2> Database Error! </h2>";
        }
        
    }
?>