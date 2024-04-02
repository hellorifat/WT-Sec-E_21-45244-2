<?php
session_start();
?>


<html>
    <body>
        <h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:150px">   
                <td align="left"><a href="#"><img src="dflogo.png" alt="XCompany" width="80" height="80"></a></td>
                    <td align="center"></td>
                    <td align="right"><a href="../Lab 5.2/home.php"> Home </a> | <a href="../xlogin.php">Login</a> |  <a href="../xregistration.php">Registration</a><td>

                </tr>
                <tr style="height:600px" >
                <td colspan="3" align="center">
<form  style="width:50%" method="POST" action="../Lab 5.2/controller/xresetVerify.php" enctype="">
        <fieldset>
            <legend><strong><h2>Login Here</h2></strong></legend>
        <table>
<tr>
        <td>Email: </td> <td><input type="email" name="email" value="" placeholder="rifat@gmail.com"></td>
        </tr>
        <tr align="center">
        <td>
        <input type="submit" name="forgotpassword" value="Reset Password" style="background-color:#0B5345; color:white; padding:5px 30px">
</td>
<td>
    <a href="../Lab 5.2/xlogin.php">Log in</a>
    </td>
    </tr>
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