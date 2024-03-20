<?php 
    //session_start();

    if(!isset($_COOKIE['flag'])){
        header('location: dflogin.php');
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
                    <td><h1>Welcome to DigiFarm Dashboard</h1></td>
                    <td><a href="../controller/logout.php">Logout</a><td>

                </tr>
                <tr style="height:600px" >
                    
                <td style="width:20%; vertical-align: top">
                <ul>
                <li><a href="fnotification.php">Notification</a></li>
                <li><a href="rns.php">Rent & Shop </a></li>
                <li><a href="harvest.php">Harvest </a></li>
                <li><a href="fund.php">Fund Management </a></li>
                <li><a href="pest.php">Profit Estimator </a></li>
                <li><a href="fprojects.php">My Projects </a></li>
                <li><a href="dflibrary.php">DigiFarm Library </a></li>
                <li><a href="fhistory.php">History </a></li>
                <li><a href="fprofile.php">My Profile </a></li>
                </ul>
                </td>

                <td style="width:60%; vertical-align: top">
                <br><br>
                
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