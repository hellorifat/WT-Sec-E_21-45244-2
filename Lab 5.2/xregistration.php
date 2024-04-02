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
<form  style="width:50%" method="POST" action="../Lab 5.2/controller/xregVerify.php" enctype="">
        <fieldset>
            <legend><strong><h2>Register as</h2></strong></legend>
        <table>
        <tr>
        <td>Name: </td> <td><input type="text" name="name" value="" placeholder="Alif Hasan"></td>
        </tr>
        <tr>
        <td>Email: </td> <td> <input type="email" name="email" value="" placeholder="rifat@gmail.com"></td>
</tr>
<tr>
        <td>Username: </td> <td><input type="text" name="username" value="" placeholder="rifat06"></td>
        </tr><tr>
        <td>Password: <td><input type="password" name="password" value="" placeholder="Upper, Lower Case, Digit and Special character"></td>
        </tr><tr>
        <td>Confirm Password: </td><td><input type="password" name="cfpassword" value="" placeholder="Enter the password again">
        </tr>
        <tr>
            <td>Gender: </td>
            <td>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female  
            <input type="radio" name="gender" value="others"> Others
        </td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="dob" value="">
        </td>
        </tr>
        <tr>
        <td colspan="2">
        <input type="checkbox" id="tnc" name="tnc" value="tncagreed" checked>
        I agree to the <a href="#">terms and conditions</a><br><br>
        </tr><tr>
        <tr>
            <td colspan="2" align=center>
        <input type="submit" name="submit" value="Register" style="background-color:#0B5345; color:white; padding:5px 30px">
        <input type="reset" name="reset" value="Reset" style="background-color:#4C6555; color:white; padding:5px 30px">
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