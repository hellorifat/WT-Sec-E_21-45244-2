<?php 
    //session_start();

   // if(!isset($_COOKIE['fflag']) or !isset($_COOKIE['wflag']) or !isset($_COOKIE['iflag'])){
     //   header('location: /pw2/landing.php');
   // }

?>

<html lang="en">
<head>
<link rel="stylesheet" href="http://localhost:8085/pw2final/assets/dfstyle.css">
    <title>DigiFarm Deposit</title>
</head>
<body style="background-color:#b1e21f">

<h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:150px">
                    <td><a href="#"><img src="http://localhost:8085/pw2/dflogo.png" alt="DigiFarm" width="80" height="80"></a></td>
                    <td><h1>Welcome to DigiFarm Dashboard</h1></td>
                    <td><a href="../controller/dfLogout.php">Logout</a><td>

                </tr>
                <tr style="height:600px" >
                    
                <td style="width:20%; vertical-align: top; padding-top:20px">

            <nav>
                <label class="logo"> Menu </label>
                <ul>
                    <li><a href="fnotification.php">Notifications</a></li>
                    <li><a href="rns.php">Rent & Shop</a></li>
                    <li><a href="dfFund.php">Fund Management</a></li>
                    <li><a href="pest.php">Profit Estimator</a></li>
                    <li><a href="fprojects.php">My Projects</a></li>
                    <li><a href="dflibrary.php">DigiFarm Library</a></li>
                    <li><a class="active" href="editProfile.php">My Profile</a></li>
                    

                </ul>
            </nav>
                </td>

                <td style="width:60%; vertical-align: top" align="center">
                <table style="width:50%; height:100px" align="center" border=0px>
                    <br><br>
                    <tr align="center">
                        <td><a href="/pw2final/view/deposit.php"> <button type="button" class="revloginbutton">Deposit</button></a></td>
                        <td><a href="/pw2final/view/wMoney.php"> <button class="revloginbutton" type="button">Withdraw Money</button></a></td>
                        <td><a href="/pw2final/view/balance.php"> <button class="revloginbutton" type="button">Balance</button></a></td>
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
                    <td colspan="3" style="height:50px; text-align:center"> DigiFarm Copyright@2024</td>
                </tr>
        </table>
</body>
</html>