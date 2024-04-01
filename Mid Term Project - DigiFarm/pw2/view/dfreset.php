<!DOCTYPE  html>
<html>
    <body>
        <h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:200px vertical-align: top">
                    <td><a href="http://localhost:8085/pw2/landing.php"><img src="http://localhost:8085/pw2/dflogo.png" alt="DigiFarm" width="80" height="80"></a></td>
                    <td align="center"><h1>Welcome to DigiFarm</h1></td>
                    <td><a href="loclhost:8085/pw2/aboutus.php">About US</a><td>

                </tr>

                <tr style="height:600px" >
                <br><br>
                <td style="width:20%; vertical-align: top">
                    </td>
                
                
                <td style="width:60%; vertical-align: top" align="center">
                <br>
                <form style="width:50%" method="POST" action="../controller/dwloginVerify.php" enctype="">
                    <fieldset>
                        <legend><strong>Reset Your Password</strong></legend>
                        <table>
                        <tr>
                    <td>
                    <strong>Phone:</strong> </td><td><input type="tel" name="phone" value="" placeholder="Enter registered phone"></td>
</tr>
<tr>
                    <td>
                    <strong>OTP:</strong> </td><td><input type="tel" name="phone" value="" placeholder="Enter registered phone"></td>
</tr>
<tr>
                    <td>
                    <strong>New Password:</strong> </td><td><input type="password" name="password" value="" placeholder="Enter password"></td>
</tr>
<tr>
                    <td align="right" colspan="2">
                    <input type="submit" name="submit" value="Reset" style="background-color:#0B5345; color:white; padding:5px 30px">
                    </td>
</tr>
<tr>
    <td align="right" colspan="2"> Remeber Password? <a href="http://localhost:8085/pw2/view/dflogin.php"> Login Here.</a></td>
</tr>
</table>
</fieldset>
                </form>
                <br>
                <br>
            <p align=center> Not registered yet? <a href="http://localhost:8085/pw2/view/dwreg.php">Register here...</a></p>

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
        </table>
    </body>
</html>