<html>
    <body style="background-color:#b1e21f">
        <head>
            <link rel="stylesheet" href="http://localhost:8085/pw2final/assets/dfstyle.css">
        </head>
            <table style="homeTable">
                <tr style="height:200px vertical-align: top">
                    <td><a href="http://localhost:8085/pw2final/landing.php"><img src="http://localhost:8085/pw2final/dflogo.png" alt="DigiFarm" class="logoStyle"></a></td>
                    <td align=center style="color:white"><h1>DigiFarm Registration Panel</h1></td>
                    <td><a href="loclhost:8085/pw2final/view/aboutus.php" class="logout">About US</a><td>

                </tr>

                <tr style="height:600px" >
                <br><br>
                <td style="width:20%; vertical-align: top">
                    </td>
                
                
                <td style="width:60%; vertical-align: top" align="center">
                <br>
                
                <form  name ="regform" onsubmit="return validateForm()" style="width:50%" method="POST" action="../controller/regVerify.php" enctype="">
        <fieldset>
            <legend><strong><h2 style="color:#b1e21f">Register as</h2></strong></legend>
                <table>
                    <tr>
                        <td colspan="2">
                            <input type="radio" id="usertype" name="usertype" value="farmer" checked /> <label class="form-label">Farmer<label>
                            <input type="radio" id="usertype" name="usertype" value="wholesaler"/> <label class="form-label">Wholesaler<label>
                            <input type="radio" id="usertype" name="usertype" value="investor"/> <label class="form-label">Investor<label>
                            <input type="radio" id="usertype" name="usertype" value="admin"/> <label class="form-label">Admin<label>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Phone number: <label></td> 
                        <td>
                            <div class="form-item">
                            <input type="tel" id="phone" name="phone" value="" placeholder="Your phone no.">
                            <div class="hint">Enter your phone number</div>
                            </div>
                            <span id="phone-error" class="error-message" ></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Name: <label></td>
                        <td>
                            <div class="form-item">
                            <input type="text" id="name" name="name" value="" placeholder="Alif Hasan" id="name">
                            <div class="hint">Enter your full name</div>
                            </div>
                            <span id="name-error" class="error-message"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">NID: <label></td>
                        <td>
                            <div class="form-item">
                            <input type="number" id="nid" name="nid" value="" placeholder="10 digit Smart ID">
                            <div class="hint">Enter your NID</div>
                            </div>
                            <span id="nid-error" class="error-message"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Password: <label></td>
                        <td>
                            <div class="form-item">
                            <input type="password" id="password" name="password" value="" placeholder="Upper, Lower Case, Digit and Special character">
                            <div class="hint">Enter a strong password</div>
                            </div>
                            <span id="password-error" class="error-message"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="form-label">Confirm Password: <label></td>
                        <td>
                            <div class="form-item">
                            <input type="password" id="cfpassword" name="cfpassword" value="" placeholder="Enter the password again">
                            <div class="hint">Enter the password again</div>
                            </div>
                            <span id="cfpassword-error" class="error-message"></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" id="tnc" name="tnc" value="tncagreed" checked>
                            <strong style="color:white" >I agree to the <a href="#">terms and conditions</a></strong>
                            <span id="tnc-error" class="error-message"></span>

                            <br><br>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" align=center>
                            <input type="submit" name="submit" value="Register" class="loginButton" >
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align=center><br><br><label class="form-label">Already a Member? <a href="http://localhost:8085/pw2final/view/dflogin.php" style="color:#b1e21f">Login here... </label></td>
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

            function regajax(){
                let usertype=document.getElementByID('usertype').value;
                let phone=document.getElementByID('phone').value;
                let name=document.getElementByID('name').value;
                let nid=document.getElementByID('nid').value;
                let password=document.getElementByID('password').value;
                let cfpassword=document.getElementByID('cfpassword').value;
                
                let xhttp=new XMLHttpRequest();
                xhttp.open("POST", '../controller/regVerify.php?usertype='+usertype+"&phone"+phone+"&name"+name+"&nid"+nid+"&password"+password+"&cfpassword"+cfpassword, true);
                xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xhttp.send();
                xhttp.onreadystatechange=function(){
                    if (this.readyState==4 & this.status==200){
                        alert(this.responseText);
                    }
                }

            }
        </script>

    </body>
</html>