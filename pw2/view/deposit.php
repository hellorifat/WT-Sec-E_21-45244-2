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
                    <td><h1>DigiFarm Payment Methods</h1></td>
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
                
    </table>
                </td>

                <td style="width:60%; vertical-align: top" align="center">
                <table style="width:50%; height:100px" align="center" border=0px>
                    <br><br>
                    <tr align="center">
                    <td colspan="4" style="color:#873600; font-size:125%"><strong> Choose a Method:</strong></td>
                        <td><a href="/pw2/view/mfsPay"> <button style="background-color:#0B5345; color: White; border:none; padding:10px 30px" type="button">MFS</button></a></td>
                        <td><a href="/pw2/view/cardPay.php"> <button style="background-color:#0B5345; color: White; border:none; padding:10px 30px" type="button">CARD</button></a></td>
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