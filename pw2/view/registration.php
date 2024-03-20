<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
</head>
<body>
    <form method="POST" action="../controller/regVerify.php" enctype="">
    
        Phone number: <input type="tel" name="phone" value=""><br>
        Name: <input type="text" name="name" value=""><br>
        NID: <input type="number" name="nid" value=""><br>
        Password: <input type="password" name="password" value="" ><br>
        Confirm Password: <input type="password" name="cfpassword" value=""><br>
        <input type="checkbox" id="vehicle1" name="tnc1" value="Bike">
        <label for="tnc1"> I agree to the terms and conditions</label><br>
                  <input type="submit" name="submit" value="Sign Up" >
    </form>
</body>
</html>