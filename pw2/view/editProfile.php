<?php
    session_start();
    $currentUser= $_SESSION['userlevel'];

?>

<html lang="en">
<head>
    <title>Edit Profile</title>
    <body>
        <h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:200px vertical-align: top">
                    <td><a href="http://localhost:8085/pw2/landing.php"><img src="http://localhost:8085/pw2/dflogo.png" alt="DigiFarm" width="80" height="80"></a></td>
                    <td align="center"><h1>Welcome to DigiFarm</h1></td>
                    <td><a href="../controller/dfLogout.php">Logout</a></td>

                </tr>

                <tr style="height:600px" >
                <br><br>
                <td style="width:20%; vertical-align: top">
                    </td>
                
                
                <td style="width:60%; vertical-align: top" align="center">
                <br>
        <form style="width:50%"  method="POST" action="../controller/profileupdateVerify.php" enctype="">
            <fieldset>
            <legend><h2>Update Profile</h2></legend>
            <table>
            <tr>
                <td>
                    <strong>Registered Phone: </strong> <?php echo "$currentUser" ?>
                </td>
</tr>
            <tr>
            <td>
            Name: </td><td><input type="text" name='name' value=""/> </td></tr>
            <tr>
            <td>NID: </td><td><input type="number" name='nid' value=""/> </td></tr>
            <tr>
            <td>Password: </td><td><input type="password" name='password' value=""/></td></tr>
            
<tr>  
                <td colspan="2"><input type="submit" name='submit' value="update"/></tr>

                <br>
                <br>
</table>
            </fieldset>
        </form>
        <br>
        <br>
        <form style="width:50%"  method="POST" action="../controller/profileupdateVerify.php" enctype="">
            <fieldset>
                <legend><h2> Update Image</h2></legend>
                <table>
                <tr>
                <td> Image: </td><td><input type="file" name="image" accept=".jpg,.jpeg,.png" /></td>
                </tr>
                <tr>
                <td colspan="2" align="right"><input type="submit" name='submit' value="updateimage"/></td></tr>
                <br><br>
                <td><a href="#">View Profile Image</a>
                </td>
</table>
            </fieldset>
        </form>
</td>

<td style="width:20%; vertical-align: top"><strong>External Links</strong><br><ul>
                        <li><a href="https://moa.gov.bd/">Ministry of Agriculture</a><br></li>
                        <li><a href="http://www.dae.gov.bd/">Department of Agricultural Extention</a></li>
                        <li><a href="https://dam.portal.gov.bd/">Department of Agricultural Marketing</a></li>
                      </ul>
</td>
</tr>
                
<tr>
                    <td colspan="3" style="height:50px; text-align:center"> DigiFarm Copyright@2024</td>
                
            </tr>
        

</body>
</html>