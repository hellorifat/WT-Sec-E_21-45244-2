<html>
    <body style="background-color:#b1e21f">
        <head>
            <link rel="stylesheet" href="http://localhost:8085/pw2final/assets/dfstyle.css">
        </head>
        <h1></h1>
            <table style="homeTable">
                <tr style="height:150px">
                    <td><a href="http://localhost:8085/pw2final/landing.php"><img src="http://localhost:8085/pw2final/dflogo.png" alt="DigiFarm" class="logoStyle"></a></td>
                    <td align=center style="color:white"><h1>DigiFarm Login Panel</h1></td>
                    <td><a href="loclhost:8085/pw2/aboutus.php">About US</a><td>
                </tr>

                <tr style="height:600px" >
                    <br><br>
                    <td style="width:20%; vertical-align: top; padding-top: 50px; vertical-align: top"">
                    </td>
                <td style="width:60%; vertical-align: top" align="center">
                <br>
                <form name="loginForm" style="width:50%" method="POST" onsubmit="return validateloginForm()" action="../controller/dfloginVerify.php" enctype="">
                    <fieldset>
                        <legend><strong><h2 style="color:#b1e21f">Log in as</h2></strong></legend>
                        <table>
                            <tr>
                                <td colspan="2">
                                    <input type="radio" name="usertype" value="farmer" checked/> <label class="form-label">Farmer</label>
                                    <input type="radio" name="usertype" value="wholesaler"/> <label class="form-label">Wholesaler</label>
                                    <input type="radio" name="usertype" value="investor"/> <label class="form-label">Investor</label>
                                    <input type="radio" name="usertype" value="admin"/> <label class="form-label">Admin</label>
                                </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-box">
                                    <strong>
                                        <label class="form-label">Phone:</label>
                                    </strong> 
                                </td>
                                <td>
                                <div class="form-item">
                            <input type="tel" id="phone" name="phone" value="" placeholder="Enter registered phone">
                            <div class="hint">Enter your phone number</div>
                            </div>
                            <span id="phone-error" class="error-message" ></span>
                                </td>
                        </tr>
<tr>
                    <td>
                        <div class="user-box">
                            <strong>
                                <label class="form-label">Password:</label>
                                </strong> </td>
                                <td>
                                <div class="form-item">
                                    <input type="password" id="password" name="password" value="" placeholder="Upper, Lower Case, Digit and Special character">
                                    <div class="hint">Enter your password</div>
                                    </div>
                                    <span id="password-error" class="error-message"></span>
                                </td>
                        </div>
                    </tr>
<tr>

                    <td align="right" colspan="2">
                    <a href="#"> <button class="loginButton" type="button"  role="button">Forgot Password</button></a>
                    <input type="submit" name="submit" value="Login" class="loginButton">
                    </td>
</tr>
<tr>
                        <td colspan="2" align=center><br><br><label class="form-label">Not registered yet? <a href="http://localhost:8085/pw2final/view/registration.php" style="color:#b1e21f">Register here... </label></td>
                    </tr>
</table>
</fieldset>
                </form>
                <br>
                <br>

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

        <script src="script.js">
        </script>
    </body>
</html>