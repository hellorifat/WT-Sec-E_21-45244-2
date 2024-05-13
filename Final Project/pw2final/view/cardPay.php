<?php 
    //session_start();

    //if(!isset($_COOKIE['fflag']) or !isset($_COOKIE['wflag']) or !isset($_COOKIE['iflag'])){
        //header('location: /pw2/landing.php');
    //}

?>
<html lang="en">
<head>
<link rel="stylesheet" href="http://localhost:8085/pw2final/assets/dfstyle.css">
    <title>Welcome Home</title>
</head>
<body style="background-color:#b1e21f">

<h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:150px">
                    <td><a href="http://localhost:8085/pw2final/view/fhome.php"><img src="http://localhost:8085/pw2final/dflogo.png" alt="DigiFarm" width="80" height="80"></a></td>
                    <td><h1>Deposit using Cards</h1></td>
                    <td><a href="../controller/dfLogout.php" class="logout">Logout</a><td>

                </tr>
                <tr style="height:600px" >
                    
                <td style="width:20%; vertical-align: top; padding-top:20px">

            <nav>
                <label class="logo"> Menu </label>
                <ul>
                    <li><a href="fnotification.php">Notifications</a></li>
                    <li><a href="rns.php">Rent & Shop</a></li>
                    <li><a href="submitReview.php">Submit a Review</a></li>
                    <li><a href="dfFund.php">Fund Management</a></li>
                    <li><a href="pest.php">Profit Estimator</a></li>
                    <li><a href="fprojects.php">My Projects</a></li>
                    <li><a href="dflibrary.php">DigiFarm Library</a></li>
                    <li><a class="active" href="editProfile.php">My Profile</a></li>
                    

                </ul>
            </nav>
                </td>

                <td style="width:60%; vertical-align: top" align="center">
                <form style="width:50%" method="POST" onsubmit="return validateCard()" action="" enctype="">
                    <fieldset>
                        <legend><strong style="color:#b1e21f; font-size:25px">Paying With A Card</strong></legend>
                        
                        <table>
                        <tr>
                            <td><label class="form-label">Phone: <label></td> 
                            <td>
                                    <div class="form-item">
                                    <input type="tel" id="phone" name="phone" value="" placeholder="017xxxxxxxx">
                                    <div class="hint">Enter deposit account phone number.</div>
                                    </div>
                                    <span id="phone-error" class="error-message" ></span>
                            </td>
                        </tr>
    
                        <tr>
                        <td>
                        <label class="form-label">Amount:</label>
                        </td>
                        
                        <td>
                        <div class="form-item">
                            <input type="number" name="amount" id="amount" value="" placeholder="Enter Amount" >
                            <div class="hint">Enter deposit amount</div>
                            </div>
                            <span id="amount-error" class="error-message" ></span>
                        </td>
                    
    </tr>

    <tr>
                    <td><label class="form-label">Card Number:</label> </td>
                    <td>
                    <div class="form-item">
                        <input type="number" name="card" id="card"  value="" inputmode="numeric" placeholder="xxxx xxxx xxxx xxxx" >
                     <div class="hint">Enter card number</div>
                    </div>
                    <span id="card-error" class="error-message" ></span>
                    </td>

                    </tr>

                    <tr>
                    <td><label class="form-label">CVC/CVV:</label></td>
                    <td>
                    <div class="form-item">
                        <input type="number" name="cvc" id="cvc" value="" placeholder="xxx" pattern="[0-9\s]{3}" 
                     maxlength="3">
                     <div class="hint">Enter CVC/CVV code</div>
                    </div>
                    <span id="cvc-error" class="error-message" ></span>
                </td> 
    </tr>

    <tr>
    <td><label class="form-label">Expiry:</label> </td>
    <td>
    <div class="form-item">
                    <input type="text" id="expiry" name="expiry" value="" placeholder="mm/yy">
                    <div class="hint">Enter expiry date</div>
                    </div>
                    <span id="expiry-error" class="error-message" ></span>
                </td>

                </tr>
                    <tr>
                    <td>
                    <label class="form-label">OTP:</label> </td>
                    <td>
                    <div class="form-item">
                        <input type="tel" id="otp" name="otp" value="" placeholder="xxxxxx">
                        <div class="hint">Enter OTP within 120 seconds</div>
                    </div>
                    <span id="otp-error" class="error-message" ></span>

                </td>
</tr>
<tr>
                    <td align="right" colspan="2">
                    <input type="submit" name="deposit" value="Deposit" class="loginbutton">
                    </td>
                </tr>
    </fieldset>
    </table>
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
                    <td colspan="3" style="height:50px; text-align:center"> DigiFarm Copyright©2024</td>
                </tr>
        </table>
        <script src="script.js">
        </script>
</body>
</html>