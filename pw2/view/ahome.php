<?php 
    session_start();

    if(!isset($_COOKIE['aflag'])){
        header('location: dalogin.php');
    }

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
                    <td><h1>Welcome to DigiFarm Dashboard: Admin</h1></td>
                    <td><a href="../controller/daLogout.php">Logout</a><td>

                </tr>
                <tr style="height:600px" >
                    
                <td style="width:20%; vertical-align: top">
                <table>
                    <tr><td><a href="fnotification.php">Notifications</a></td></tr>
                
                <tr><td><a href="rns.php">Rent & Shop </a>
            </td></tr>
                
                <tr><td><a href="harvest.php">Harvest </a></td></tr>
                
                <tr><td><a href="dfFund.php">Fund Management </a></td></tr>
                
                <tr><td><a href="pest.php">Profit Estimator </a></td></tr>
                
                <tr><td><a href="fprojects.php">My Projects </a></td></tr>
                
                <tr><td><a href="dflibrary.php">DigiFarm Library </a></td></tr>
                
                <tr><td><a href="fhistory.php">History </a></td></tr>
                
                <tr><td><a href="editProfile.php">My Profile </a></td></tr>
                
    </table>
                </td>

                <td style="width:60%; vertical-align: top" align="center">
                <br><br>
                <table style="font-size:150%">
                    <tr align="center">
                        <td>6</td>
                        <td>67</td>
                        <td>2</td>
                    </tr>
                    <tr align="center">
                        <td>Pending Order</td>
                        <td>Delivered</td>
                        <td>On Hold</td>
                    </tr>
                    <tr align="center">
                        <td>5K</td>
                        <td>32K</td>
                        <td>67K</td>
                    </tr>
                    <tr align="center">
                        <td>Payable</td>
                        <td>Incoming Payment</td>
                        <td>Incoming Investment</td>
                    </tr>
                    <tr align="center">
                        <td>328K</td>
                        <td>37K</td>
                        <td>295K</td>
                    </tr>
                    <tr align="center">
                        <td>Total Balance</td>
                        <td>Block Amount</td>
                        <td>Withdrawable Amount</td>
                    </tr>
                    <tr align="center">
                        <td>106K</td>
                        <td>297K</td>
                        <td>191K</td>
                    </tr>
                    <tr align="center">
                        <td>Estd. Expense</td>
                        <td>Estd. Sale</td>
                        <td>Estd. Income</td>
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