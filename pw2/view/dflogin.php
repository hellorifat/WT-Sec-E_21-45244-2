<!DOCTYPE  html>
<html>
    <body>
        <h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:200px vertical-align: top">
                    <td><a href="http://localhost:8085/pw2/landing.php"><img src="http://localhost:8085/pw2/dflogo.png" alt="DigiFarm" width="80" height="80"></a></td>
                    <td><h1>Welcome to DigiFarm</h1></td>
                    <td><a href="loclhost:8085/pw2/aboutus.php">About US</a><td>

                </tr>
                <tr style="height:600px" >
                    
                <td style="width:20%; vertical-align: top">
                    </td>
                
                
                <td style="width:60%; vertical-align: top; align:center">
                <br>
                <h3 align=center> Logging in as Farmer</h3> <br>
                <form method="POST" action="../controller/dfloginVerify.php" enctype="" align=center>
            Phone: <input type="tel" name="phone" value=""><br>
            Password: <input type="password" name="password" value=""><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <br>
        <br>
        <p align=center> Not registered yet? <a href="http://localhost:8085/pw2/view/registration.php">Register here...</a></p>

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