<?php 
    //session_start();

    //if(!isset($_COOKIE['fflag']) or !isset($_COOKIE['wflag']) or !isset($_COOKIE['iflag'])){
        //header('location: /pw2/landing.php');
    //}

?>
<html lang="en">
<head>
<link rel="stylesheet" href="http://localhost:8085/pw2final/assets/dfstyle.css">
    <title>Submit Review</title>
</head>
<body style="background-color:#b1e21f">

<h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:150px">
                    <td><a href="http://localhost:8085/pw2final/view/fhome.php"><img src="http://localhost:8085/pw2final/dflogo.png" alt="DigiFarm" width="80" height="80"></a></td>
                    <td><h1 style="color:white">We value your feedbacks!</h1></td>
                    <td><a href="../controller/dfLogout.php" class="logout">Logout</a><td>

                </tr>
                <tr style="height:600px" >
                    
                <td style="width:20%; vertical-align: top; padding-top:20px">

            <nav>
                <label class="logo"> Menu </label>
                <ul>
                    <li><a href="fnotification.php">Notifications</a></li>
                    <li><a href="rns.php">Rent & Shop</a></li>
                    <li><a href="#">Submit a Review</a></li>
                    <li><a href="dfFund.php">Fund Management</a></li>
                    <li><a href="pest.php">Profit Estimator</a></li>
                    <li><a href="fprojects.php">My Projects</a></li>
                    <li><a href="dflibrary.php">DigiFarm Library</a></li>
                    <li><a class="active" href="editProfile.php">My Profile</a></li>
                    

                </ul>
            </nav>
                </td>

                <td align=center>
                <div class="">
        <div><h1 style="color:white">Order Number: </h1><input type="number" id="order" name="order" value=""></div>
        <h1 style="color:white">Rate Your Experience!</h1>
        <div class="rating">
            <span id="rating" style="color:white; font-size:30px">0</span><label style="color:white; font-size:30px">/5</label>
        </div>
        <div class="stars" id="stars">
            <span class="star" data-value="1" style="color:white; font-size:30px">★</span>
            <span class="star" data-value="2" style="color:white; font-size:30px">★</span>
            <span class="star" data-value="3" style="color:white; font-size:30px">★</span>
            <span class="star" data-value="4" style="color:white; font-size:30px">★</span>
            <span class="star" data-value="5" style="color:white; font-size:30px">★</span>
        </div>
        <h1 style="color:white">Comments:</h1>
        <textarea id="review" class="reviewTextArea"
                  placeholder="Write your review here">
          </textarea><br><br>
        <button id="submit" class="revloginbutton">Submit</button>
        <div class="reviews" id="reviews">
        </div>
    </div>
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

            const stars = document.querySelectorAll(".star");
const rating = document.getElementById("rating");
const reviewText = document.getElementById("review");
const submitBtn = document.getElementById("submit");
const reviewsContainer = document.getElementById("reviews");
const order = document.getElementById("order");
 
stars.forEach((star) => {
    star.addEventListener("click", () => {
        const value = parseInt(star.getAttribute("data-value"));
        rating.innerText = value;
 

        stars.forEach((s) => s.classList.remove("one", 
                                                "two", 
                                                "three", 
                                                "four", 
                                                "five"));
 
        stars.forEach((s, index) => {
            if (index < value) {
                s.classList.add(getStarColorClass(value));
            }
        });
 

        stars.forEach((s) => s.classList.remove("selected"));
        star.classList.add("selected");
    });
});
 
submitBtn.addEventListener("click", () => {
    const order = document.getElementById("order").value;
    const review = reviewText.value;
    const userRating = parseInt(rating.innerText);

    if (order===""){
        alert(
        "Please enter the order number first."
             );
             return;
    }
 
    if (!userRating || !review) {
        alert(
"Please select a rating and provide a review before submitting."
             );
        return;
    }
 
    if (userRating > 0) {
        const reviewElement = document.createElement("div");
        reviewElement.classList.add("review");
        reviewElement.innerHTML = 
`<p><strong>Order ID: ${order}<strong></p><p><strong>Rating: ${userRating}/5</strong></p><p>Comments: ${review}</p>`;
        reviewsContainer.appendChild(reviewElement);
 
        reviewText.value = "";
        rating.innerText = "0";
        stars.forEach((s) => s.classList.remove("one", 
                                                "two", 
                                                "three", 
                                                "four", 
                                                "five", 
                                                "selected"));
    }
});
 
function getStarColorClass(value) {
    switch (value) {
        case 1:
            return "one";
        case 2:
            return "two";
        case 3:
            return "three";
        case 4:
            return "four";
        case 5:
            return "five";
        default:
            return "";
    }
}
        </script>
</body>
</html>