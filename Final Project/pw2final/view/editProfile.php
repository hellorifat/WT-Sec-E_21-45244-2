<?php
    require_once('../model/dfdb.php');
    session_start();
    if(null==($_COOKIE['fflag'] || $_COOKIE['wflag'] || $_COOKIE['iflag'] ||$_COOKIE['aflag'])){
    header('location: dflogin.php');
    }
    $currentUser= $_SESSION['userlevel'];


    
    if(isset($_POST["submitimage"])){
        $name = $currentUser;
        if($_FILES["myimage"]["error"] == 4){
          echo
          "<script> alert('Image Does Not Exist'); </script>"
          ;
        }
        else{
          $fileName = $_FILES["myimage"]["name"];
          $fileSize = $_FILES["myimage"]["size"];
          $tmpName = $_FILES["myimage"]["tmp_name"];
      
          $validImageExtension = ['jpg', 'jpeg', 'png'];
          $imageExtension = explode('.', $fileName);
          $imageExtension = strtolower(end($imageExtension));
          if ( !in_array($imageExtension, $validImageExtension) ){
            echo
            "
            <script>
              alert('Invalid Image Extension');
            </script>
            ";
          }
          else if($fileSize > 1000000){
            echo
            "
            <script>
              alert('Image Size Is Too Large');
            </script>
            ";
          }
          else{
            $con=dbConnection();
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
      
            move_uploaded_file($tmpName, '../' . $newImageName);
            $query = "insert into allusers where phone='{$currentUser}' VALUES('', '', '','','','', '$newImageName')" ;
            mysqli_query($con, $query);
            echo
            "
            <script>
              alert('Successfully Added');
              document.location.href = 'viewImage.php';
            </script>
            ";
          }
        }
      }
?>

<html lang="en">
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="http://localhost:8085/pw2final/assets/dfstyle.css">
    <body>
        <h1></h1>
            <table style="width:100%; border:0, align:center">
                <tr style="height:200px vertical-align: top">
                    <td><a href="fhome.php"><img src="http://localhost:8085/pw2/dflogo.png" alt="DigiFarm" width="80" height="80"></a></td>
                    <td align="center"><h1>Welcome to DigiFarm</h1></td>
                    <td><a href="../controller/dfLogout.php" class="logout">Logout</a></td>

                </tr>

                <tr style="height:600px" >
                <br><br>
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
                <br>
        <form style="width:50%"  onsubmit="return validateupForm()" method="POST" action="../controller/profileupdateVerify.php" enctype="">
            <fieldset>
            <legend><h2 style="color:#b1e21f">Update Profile</h2></legend>
            <table>
            <tr>
                <td style="color:white; font-size:18px; font-weight:bold">
                    <strong>Registered Phone: </strong></td><td style="color:white; text-align:center; font-size:18px; font-weight:bold"> <?php echo "$currentUser" ?>
                </td>
</tr>
            <tr>
            <td><label class="form-label">Name: <label></td>
                        <td>
                            <div class="form-item">
                            <input type="text" id="name" name="name" value="" placeholder="Alif Hasan">
                            <div class="hint">Enter your full name</div>
                            </div>
                            <span id="name-error" class="error-message"></span>
                        </td></tr>
            <tr>
            <td>
                <label class="form-label">NID: <label></td>
                        <td>
                          <div class="form-item">
                            <input type="number" id="nid" name="nid" value="" placeholder="10 digit Smart ID">
                            <div class="hint">Enter your NID</div>
                            </div>
                            <span id="nid-error" class="error-message"></span>
                        </td>
                      </tr>
            <tr>
            <td>
              
            <label class="form-label">Password: <label></td>
                        <td>
                            <div class="form-item">
                            <input type="password" id="password" name="password" value="" placeholder="Upper, Lower Case, Digit and Special character">
                            <button class="show-password" id="show-password" type="button" role="switch" aria-label="Show password" aria-checked="false">Show</button>
                            <div class="hint">Enter a strong password</div>
                            </div>
                            <span id="password-error" class="error-message"></span>
    </td>
    </tr>
            
<tr>  
                <td colspan="2" align=right><input type="submit" name='submit' value="Update" class="loginbutton"></tr>

                <br>
                <br>
</table>
            </fieldset>
        </form>
        <br>
        <br>
        <form style="width:50%"  onsubmit="return validateFileSubmitType()" method="POST" enctype="multipart/form-data" action="">
            <fieldset>
                <legend><h2 style="color:#b1e21f"> Update Image</h2></legend>
                <table>
                <tr>
                <td><label class="form-label">Profile Image: <label></td>
                <td>
                    <div class="form-item">
                    <input type="file" id="myimage" name="myimage" value="" accept=".jpg,.jpeg,.png" >
                    <div class="hint">Passport size .jpg image only</div>
                    </div>
                    <span id="image-error" class="error-message"></span>
                </td>
                </tr>
                <tr>
                  <td></td>
                <td align="right"><input type="submit" name='submitimage' value="Upload Image" class="loginbutton"></td>
              </tr>
                <br><br>
                <tr style="align:center">
                <td colspan="2"><a style="color:white; font-size:18px; font-weight:bold; align:center" href="#">View Profile Image</a>
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
                    <td colspan="3" style="height:50px; text-align:center"> DigiFarm Copyright@2024</td>
                
            </tr>
        
            <script src="script.js">
        </script>
</body>
</html>