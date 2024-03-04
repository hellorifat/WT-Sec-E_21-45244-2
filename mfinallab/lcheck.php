<?php

session_start();

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == "" || $password == "") {

  header('location: mlogin.php?error=null');
} else if ($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']) {
  $_SESSION['status'] = "true";
  header('location: mpanel.php');
} else {
  echo "invalid user";
}