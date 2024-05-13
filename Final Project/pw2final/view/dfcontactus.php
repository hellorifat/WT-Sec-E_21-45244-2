
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
                    <td><a href="http://localhost:8085/pw2final/landing.php"><img src="http://localhost:8085/pw2final/dflogo.png" alt="DigiFarm" class="logoStyle"></a></td>
                    <td><h1 style="color:white">Contact with DigiFarm</h1></td>
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
                <form style="width:50%" method="POST" action="../controller/cardVerify.php" enctype="">
                    <fieldset>
                        <legend> <strong style="color:#b1e21f; font-size:25px">Share Your Queries</strong></legend>
                        <table>
                        <tr>
                        <td><label class="form-label">Your Phone:</label></td>
                        <td>
                        <div class="form-item">
                            <input type="tel" name="phone" id="phone" value="">
                            <div class="hint">Enter deposit amount</div>
                            </div>
                    <span id="expiry-error" class="error-message" ></span>
    </td>
    </tr>
    
    <tr>
    <td><label class="form-label">Enter Email</label></td>
                        <td>
                        <div class="form-item">
                            <input type="text" name="useremail" id="useremail" value="">
                            <div class="hint">Enter Your Email: </div>
                            </div>
                    <span id="expiry-error" class="error-message" ></span>
                </td>
                            
    </tr><tr>
    <td><label class="form-label">Your Message: </label></td>
                            <td>

<textarea rows="5" id="content_txt" name="TextArea1" runat="server" maxlength="50"></textarea>
<p id="message" style="color:#b1e21f"></p> <br>
</td>
    </tr>
    <tr><td align="right" colspan="2">
                    <input type="submit" name="contact" value="Send Message" class="loginbutton" onsubmit="return !!(emailValidation() & phoneValidation())"; ">
                    </td>
                </tr>
    </table>
    </fieldset>
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
<script>
    var area = document.getElementById("content_txt");
var message = document.getElementById("message");
var maxLength = 50;
var checkLength = function() {
    if(area.value.length <= maxLength) {
        message.innerHTML = (maxLength-area.value.length) + " characters remaining";
    }
}
setInterval(checkLength, 300);


function emailValidation(){
                    let useremail=document.getElementById('useremail').value;
                    let atSymbol = useremail.indexOf("@");
                    let dotSymbol = useremail.lastIndexOf(".");
                    let spaceSymbol = useremail.indexOf(" ");
                    isValid=true;
 
                    if ((atSymbol != -1) &&
                        (atSymbol != 0) &&
                        (dotSymbol != -1) &&
                        (dotSymbol != 0) &&
                        (dotSymbol > atSymbol + 1) &&
                        (useremail.length > dotSymbol + 1) &&
                        (spaceSymbol == -1)) {
                alert("Email address is valid.");
                isValid=true;
            } else {
                alert("Error !!! Email address is not valid.");
                isValid=false;
            }

            return isValid;
                }
function phoneValidation(){

        let phone=document.getElementById('phone').value;

        isValid=true;

                if (phone === "") {
            alert("Please enter your phone.");
            isValid = false;
        }

        if (phone.length!=11) {
            alert("11 Digit Only");
            isValid = false;
        }
        return isValid;
    }
    </script>

</html>