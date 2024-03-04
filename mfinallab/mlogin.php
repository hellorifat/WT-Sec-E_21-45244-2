<?php 

    if(isset($_GET['error'])){
        if($_GET['error'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }

?>


<html>

<head>
    <title>HTML Site</title>
</head>

<body>
    <table border="1" align="center" width="100%"">
        <tr>
            <td><img src="attch\logo.jfif" alt="Logo" width="100px" height="100px" /><a href="mhome.php" style="width: 100px" style="margin: 40px">Home</a> &nbsp; |&nbsp; <a href="mlogin.php">Login</a> &nbsp;|&nbsp; <a href="mregister.php">Registration</a></td>
        </tr>

        <tr>
            <td>
                <form method="request" action="lCheck.php" enctype="">

                    <fieldset>
                        <legend>LOGIN</legend>
                        <table>
                            <tr>
                                <td>User Name </td>
                                <td>:</td>
                                <td><input type="text" name="username" value="" required></td>
                            </tr>
                            <tr>
                                <td>Password </td>
                                <td>:</td>
                                <td><input type="password" name="password" value="" required></td>
                        </table>
                        <hr>
                        <table>
                            <tr><input type="checkbox">Remember Me</tr>
                            <tr><br><br></tr>
                            <tr>
                                <td>
                                    <td><input type="submit" name="btn" value="Submit"></td>
                                </td>
                                <td><a href="mcpass.php">Forgot Password?</a></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
            </tr>

            <tr align="center">
                <td>
                    <footer style="margin: 10px">Copyright &copy; 2017</footer>
                </td>
            </tr>

    </table>

</body>

</html>