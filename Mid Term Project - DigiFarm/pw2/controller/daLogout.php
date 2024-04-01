<?php 

    setcookie('aflag', 'true', time()-10, '/');
    header('location: ../view/dalogin.php');
?>