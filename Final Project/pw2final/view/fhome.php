<?php 
    session_start();
    if(!isset($_COOKIE['fflag'])){
    header('location: dflogin.php');
    }
    $currentUser= $_SESSION['userlevel'];

    require_once('../model/retriveUserData.php');

?>

<html>
<head>
<link rel="stylesheet" href="http://localhost:8085/pw2final/assets/dfstyle.css">
    <title>Welcome Home</title>
</head>
<body>

<h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:150px">
                    <td><a href="#"><img src="http://localhost:8085/pw2final/dflogo.png" alt="DigiFarm" class="logoStyle"></a></td>
                    <td><h1 class="landingTitle">Welcome to DigiFarm Dashboard</h1></td>
                    <td><a class="logout" href="../controller/dfLogout.php">Logout</a><td>

                </tr>
                <tr>
                    <td colspan="3" class="lowheaderStyle"></td>
                </tr>
                <tr style="height:600px" >
                    
                <td style="width:20%; vertical-align: top; padding-top:20px">

            <nav>
                <label class="logo"> Menu </label>
                <ul>
                    <li><a href="notification.php">Notifications</a></li>
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

                <td style="width:60%; vertical-align: top; padding-top:50px" align="center">
                <h2 class="landingTitle">At a Glance</h2>
                <br><br>
                <table style="font-size:150%" class="fd-home">
                <tbody>
                    <tr class="fd-home">
                        <td>6</td>
                        <td>67</td>
                        <td>2</td>
                    </tr>
                    <tr >
                        <td>Pending Order</td>
                        <td>Delivered</td>
                        <td>On Hold</td>
                    </tr>
                    <tr >
                        <td>5K</td>
                        <td>32K</td>
                        <td>67K</td>
                    </tr>
                    <tr >
                        <td>Payable</td>
                        <td>Incoming Payment</td>
                        <td>Incoming Investment</td>
                    </tr>
                    <tr>
                        <td>100K<?php 
                        //require_once('../model/retriveUserData.php');
                        //$balance=$userBalance($currentUser);
                        //echo "$balance";
                        ?></td>
                        <td>37K</td>
                        <td>295K</td>
                    </tr>
                    <tr>
                        <td>Total Balance</td>
                        <td>Block Amount</td>
                        <td>Withdrawable Amount</td>
                    </tr>
                    <tr >
                        <td>106K</td>
                        <td>297K</td>
                        <td>191K</td>
                    </tr>
                    <tr >
                        <td>Estd. Expense</td>
                        <td>Estd. Sale</td>
                        <td>Estd. Income</td>
                    </tr>
</tbody>
                </table>
                
                </td>
                
                <td style="width:20%; padding-top: 50px; vertical-align: top"><strong><h3 style="color:#b1e21f">External Links</h3></strong>
                        <br>
                        <ul>
                            <li><a href="https://moa.gov.bd/">Ministry of Agriculture</a><br></li>
                            <li><a href="http://www.dae.gov.bd/">Department of Agricultural Extention</a></li>
                            <li><a href="https://dam.portal.gov.bd/">Department of Agricultural Marketing</a></li>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <a href="#" style="color:#b1e21f" >
                                <img src="http://localhost:8085/pw2final/tractor-ad.png" alt="Cattle-Investment" style="height:460px; width:325px"/>
                                <center>Shop Your Tractor @ 0% Interest!</center>
                            </a><br>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="footerStyle"> DigiFarm Copyright©2024</td>
                </tr>
        </table>
</body>
</html>