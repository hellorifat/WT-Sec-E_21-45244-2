<html>
  <head>
    <title>Lab Task</title>
  </head>
  <body>
    <table
      border="1" align="center" width="100%">
      <tr>
      <td><img src="attch\logo.jfif" alt="Logo" width="100px" height="100px" /><a href="mhome.php" style="width: 100px" style="margin: 40px">Home</a> &nbsp; |&nbsp; <a href="mlogin.php">Login</a> &nbsp;|&nbsp; <a href="mregister.php">Registration</a></td>
      </tr>

      <tr>
        <td ><form method="post" action="mregcheck.php" enctype="">
        <fieldset>
            <legend>REGISTRATION</legend>
            <table>
                <tr>
                    <td>Name </td>
                    <td>:</td>
                    <td><input type="text" name="name" value=""></td>
                </tr>

                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td>User Name </td>
                    <td>:</td>
                    <td><input type="text" name="username" value=""></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td>Confirm Password </td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="" /> Male
                        <input type="radio" name="gender" value= /> Female
                        <input type="radio" name="gender" value="" /> Other
                    </fieldset>
                </tr>
                <tr>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="dob">
                    </fieldset>
                </tr>
            </table>
            <hr>
            <input type="submit" name="btn" id="Submit">
            <input type="reset" id="Reset">
        </fieldset>
    </form></td>
      </tr>

      <tr align="center">
        <td>
          <footer style="margin: 10px">Copyright &copy; 2017</footer>
        </td>
      </tr>

    </table>

  </body>
</html>

<?php

    session_start();

    
?>