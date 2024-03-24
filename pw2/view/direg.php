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
                
    <form  style="width:50%" method="POST" action="../controller/iregVerify.php" enctype="">
        <fieldset>
            <legend><strong>Registering as an Investor</strong></legend>
        <table>
        <tr>
        <td>Phone number: </td> <td> <input type="tel" name="phone" value="" placeholder="Your phone no."></td>
</tr>
<tr>
        <td>Name: </td> <td><input type="text" name="name" value="" placeholder="Your name"></td>
        </tr><tr>
        <td>NID: </td> <td><input type="number" name="nid" value="" placeholder="10 digit Smart ID"></td>
        </tr><tr>
        <td>Password: <td><input type="password" name="password" value="" placeholder="Upper, Lower Case, Digit and Special character"></td>
        </tr><tr>
        <td>Confirm Password: </td><td><input style="height:20; width:40" type="password" name="cfpassword" value="" placeholder="Enter the password again">
        </tr><tr>
        <td colspan="2">
        <input type="checkbox" id="vehicle1" name="tnc1" value="Bike" checked>
        <label for="tnc1"> I agree to the <a href="#">terms and conditions</a></label><br><br>
        </tr><tr>
        <tr>
            <td colspan="2" align=right>
        <input type="submit" name="submit" value="Register" style="background-color:#0B5345; color:white; padding:5px 30px">
</td>
    </tr>
    </table>
    </fieldset>
    </form>
    <br>
        <br>
            <p align=center> Already a Member? <a href="http://localhost:8085/pw2/view/dilogin.php">Login here...</a></p>

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