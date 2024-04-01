<?php 
    //session_start();

    //if(!isset($_COOKIE['fflag']) or !isset($_COOKIE['wflag']) or !isset($_COOKIE['iflag'])){
        //header('location: /pw2/landing.php');
    //}

?>
<html lang="en">
<head>
    <title>Welcome Home</title>
</head>
<body>

<h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:150px">
                    <td><a href="#"><img src="http://localhost:8085/pw2/dflogo.png" alt="DigiFarm" width="80" height="80"></a></td>
                    <td><h1>Welcome to DigiFarm Dashboard</h1></td>
                    <td><a href="../controller/dfLogout.php">Logout</a><td>

                </tr>
                <tr style="height:600px" >
                    
                <td style="width:20%; vertical-align: top">
                <table>
                    <tr><td><a href="fnotification.php">Notifications</a></td></tr>
                
                <tr><td><a href="rns.php">Rent & Shop </a>
            </td></tr>
                
                <tr><td><a href="harvest.php">Harvest </a></td></tr>
                
                <tr><td><a href="fund.php">Fund Management </a></td></tr>
                
                <tr><td><a href="pest.php">Profit Estimator </a></td></tr>
                
                <tr><td><a href="fprojects.php">My Projects </a></td></tr>
                
                <tr><td><a href="dflibrary.php">DigiFarm Library </a></td></tr>
                
                <tr><td><a href="fhistory.php">History </a></td></tr>
                
                <tr><td><a href="fprofile.php">My Profile </a></td></tr>
                
                <td>
                
    </table>
                </td>

                <td style="width:60%; vertical-align: top" align="center">
                <form style="width:50%" method="POST" action="../controller/mfsVerify.php" enctype="">
                    <fieldset>
                        <legend><strong>Paying With Bkash</strong></legend>
                        <table>
                        <tr>
                        <td><strong>Phone:</strong></td><td><input type="tel" name="phone" value="" placeholder="017xxxxxxxx" pattern="[0-9\s]{11}" 
                     maxlength="11"></td></td>
    </tr>
    <tr>
                        <td>
                        <strong>Amount:</strong></td><td><input type="number" name="amount" value="" placeholder="Enter Amount" ></td>
                    
    </tr>
    <tr>
                    <td><strong>Wallet:</strong> </td><td><input type="tel" name="wallet"  value="" inputmode="numeric" pattern="[0-9\s]{11}" 
                     maxlength="16" placeholder="017xxxxxxxx" required>
                </td>
                    </tr>
                    <tr>
                    <td><strong>Pin:</strong></td><td><input type="number" name="pin" value="" placeholder="xxxx" pattern="[0-9\s]{4}" 
                     maxlength="3"></td> 
                    <td>
                    <strong>OTP:</strong> </td><td><input type="otp" name="otp" value="" placeholder="xxxxxx" pattern="[0-9\s]{4,6}" 
                     maxlength="6"></td>
</tr>
<tr>
                    <td align="right" colspan="2">
                    <input type="submit" name="deposit" value="Deposit" style="background-color:#0B5345; color:white; padding:5px 30px">
                    </td>
                </tr>
    </table>
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
</body>
</html>