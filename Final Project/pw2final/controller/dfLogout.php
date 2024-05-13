<?php 

    setcookie('fflag', 'true', time()-10, '/');
    header('location: ../view/dflogin.php');
?>