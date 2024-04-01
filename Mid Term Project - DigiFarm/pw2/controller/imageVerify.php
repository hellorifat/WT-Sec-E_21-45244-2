<?php

    session_start();

    if(!isset($_COOKIE['fflag'] || $_COOKIE['wflag'] || $_COOKIE['iflag'] ||$_COOKIE['aflag'])){
    header('location: dflogin.php');
}
    $currentUser= $_SESSION['userlevel'];

    require_once('../model/userModel.php');


    $src= $_FILES['myimage']['tmp_name'];
    $des= "upload/".$_FILES['myimage']['name'];
    
    $phone = $_GET['phone'];
    $name = $_REQUEST['name'];
    $nid=$_REQUEST['nid'];
    $password=$_REQUEST['password'];
    $image=$_REQUEST['image'];


    validImage();

    if (!validImage()){
        echo "Invalid Image (Format/File Size)";

    }

    else{
        upImage();

    }

    ?>