<?php
    require_once('../model/dfdb.php');
    session_start();
    if(null==($_COOKIE['fflag'] || $_COOKIE['wflag'] || $_COOKIE['iflag'] ||$_COOKIE['aflag'])){
    header('location: dflogin.php');
    }
    $currentUser= $_SESSION['userlevel'];

?>

<html>
    <body>
        <form style="width:50%"  method="POST" action="../controller/submitClaim" enctype="">
            <fieldset>
            <legend><h2>Submit Claim</h2></legend>
            <table>
            <tr>
                <td>
                    <strong>Registered Phone: </strong> <?php echo "$currentUser" ?>
                </td>
</tr>
<tr>
    <td>Order ID: </td><td><input type="tel" name="phone" value="" placeholder="Enter Order Id"></td>
</tr>
</td>
</tr>
<tr>
    <td>Description:</td><td>
<textarea  name="description" rows="4" cols="50">
  I am submiting this claim because...
</textarea></td>
</tr>
<tr>
<td align="right" colspan="2">
                    <input type="submit" name="submit" value="Submit" style="background-color:#0B5345; color:white; padding:5px 30px">
                    </td>
</tr>