<?php 

    setcookie('iflag', 'true', time()-10, '/');
    header('location: ../view/dilogin.php');
?>