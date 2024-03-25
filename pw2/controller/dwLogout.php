<?php 

    setcookie('wflag', 'true', time()-10, '/');
    header('location: ../view/dwlogin.php');
?>