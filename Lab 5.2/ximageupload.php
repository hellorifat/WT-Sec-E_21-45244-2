<?php
session_start();
require_once ('../Lab 5.2/upProfile.php');
?>


<html>
    <body>
        <h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:150px">   
                <td align="left"><a href="#"><img src="dflogo.png" alt="XCompany" width="80" height="80"></a></td>
                    <td align="center"></td>
                    <td align="right">Logged in as Bob | <a href="../xlogout.php">Logout</a><td>

                </tr>
                <tr style="height:600px" >
                <td align="left">
                    <h4>Account</h4><br>
                    <ul>
                        <li><a href="../Lab 5.2/xdash.php">Dashboard</a><br></li>
                        <li><a href="../Lab 5.2/xprofile.php">My Profile</a></li>
                        <li><a href="../Lab 5.2/xeditprofile.php">Edit Profile</a></li>
                        <li><a href="../Lab 5.2/ximageupload.php">Change Profile Picture</a></li>
                        <li><a href="../Lab 5.2/xchangepass.php">Change Password</a></li>
                        <li><a href="../Lab 5.2/xlogout.php">Logout</a></li>
                      </ul>
    </td>
    <td>
    <form  style="width:50%" method="POST" action="../Lab 5.2/controller/xviewProfile.php" enctype="">
    <fieldset>
            <legend><strong><h2>Update Profile Image</h2></strong></legend>
        <table>
        <tr><input type="file" name="xpimage" value=""></tr>
        <tr><input type="submit" name="submitxpimage" value="Upload Image"></tr>
</table>
</fieldset>
</form>
</td>
</tr>

<tr>
                    <td colspan="3" style="height:50px; text-align:center"> XCompany Copyright©2024</td>
                </tr>
        </table>
    </body>
</html>