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
                    <td align="right"><a href="../Lab 5.2/home.php"> Home </a> | <a href="../Lab 5.2/xlogin.php">Login</a> |  <a href="../Lab 5.2/xregistration.php">Registration</a><td>

                </tr>
                <tr style="height:600px" >
                <td colspan="3" align="center">
<form  style="width:50%" method="POST" action="../Lab 5.2/controller/xloginVerify.php" enctype="">
        <fieldset>
            <legend><strong><h2>Login Here</h2></strong></legend>
        <table>
<tr>
        <td>Username: </td> <td><input type="text" name="username" value="" placeholder="rifat06"></td>
        </tr>
        <tr>
        <td>Password: <td><input type="password" name="password" value="" placeholder="Upper, Lower Case, Digit and Special character"></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="rememberme" value="" checked> Remember Me</td>
        </tr>
        <tr align="center">
        <td>
        <input type="submit" name="submit" value="Login" style="background-color:#0B5345; color:white; padding:5px 30px">
</td>
<td>
    <a href="../Lab 5.2/xforgotpassword.php">Forgot Password</a>
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