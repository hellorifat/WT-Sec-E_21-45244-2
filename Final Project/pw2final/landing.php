
<html>
    <body>
        <head>
        <link rel="stylesheet" href="assets/dfstyle.css">
        </head>
            <table class="homeTable">
                <tr style="height:150px">
                    <td><a href="#"><img src="dflogo.png" alt="DigiFarm" class="logoStyle"></a></td>
                   
                    <td align="center">
                        <div>
                        <h1 style="font-size:40px;" class="landingTitle">DigiFarm</h1>
                        <span style="color:#b1e21f">Digitizing Agriculture Financing and Supply Chain</span>
</div>
                    </td>
             
                    <td><a href="/pw2final/aboutus.php" class="logout">About US</a>&nbsp;&nbsp;&nbsp; <a href="/pw2final/view/dfcontactus.php" class="logout">Contact DigiFarm</a><td>
                </tr>

                <tr>
                    <td colspan="3" class="lowheaderStyle"></td>
                </tr>

                <tr style="height:600px" >
                    <td style="width:20%; padding-top: 50px; vertical-align: top"><h3 style="color:#b1e21f">Trending Articles</h3>
                        <br>
                        <ul>
                            <li><a href="#"><figure>
                                <img src="mango-litchi.png" alt="Mango-Litchi" style="height:160px; width:250px"/>
                                <figcaption>Bangladesh heatwave threatens mango-litchi yields</figcaption>
                            </figure></a><br></li>
                            <li><a href="#"><figure>
                                <img src="shrimp.png" alt="Shrimps" style="height:160px; width:250px"/>
                                <figcaption>Bangladesh’s shrimp season: Heatwave Sets Back Season Openning</figcaption>
                            </figure></a><br></li>
                            <li><a href="#"><figure>
                                <img src="cattle-farming.png" alt="Cattle-Investment" style="height:160px; width:250px"/>
                                <figcaption>Top 9 investments for cattle profits in Eid-Al-Adha 2024
                            </figcaption>
                            </figure></a><br></li>
                        </ul></td>
                    <td style="height:600px width:60%; vertical-align: top">
                        <br><br>
                        <table align="center">
                            <tr>
                                <td>
                                    <div class="df-bannerSize">
                                    <img class="dfSlides df-bannerSize" src="df-slide0.png">
                                    <img class="dfSlides df-bannerSize" src="df-slide8.png">
                                    <img class="dfSlides df-bannerSize" src="df-slide8.jpg">
                                    <img class="dfSlides df-bannerSize" src="df-slide1.png">
                                    <img class="dfSlides df-bannerSize" src="df-slide2.png">
                                    <img class="dfSlides df-bannerSize" src="df-slide6.png">
                                    <img class="dfSlides df-bannerSize" src="homebanner.webp">
                                </td>
                            </tr>
                        </table>
                        <br><br>
                        <table style="width:50%; height:100px" align=center>

                        <tr align=center>
                                
                                <td style="color:#b1e21f; font-size:150%"><strong> Already a Member?</strong></td>
                                <td style="color:#b1e21f; font-size:150%"><strong> Not a Member yet? </strong></td>
                            </tr>
                            <tr align=center>
                                <td><a href="/pw2final/view/dflogin.php"> <button class="loginButton" type="button"  role="button">Login Now</button></a></td>
                                <td><a href="/pw2final/view/registration.php"> <button class="regButton" type="button">Register Here</button></a></td>
                            </tr>
                            <tr>

                                <td colspan="3" style="padding-top: 50px; align:center" >
                                    <video width="800" height="450" autoplay muted>

                                        <source src="digifarm-glimpse.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </td>
                            </tr>
                            
                        </table>
                        <br><br>
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
                                <img src="tractor-ad.png" alt="Cattle-Investment" style="height:460px; width:325px"/>
                                <center>Shop Your Tractor @ 0% Interest!</center>
                            </a><br>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="footerStyle"> DigiFarm Copyright©2024</td>
                </tr>
            </table>
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("dfSlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 2000); // Change image every 2 seconds
            }
            
        </script>
    </body>
</html>