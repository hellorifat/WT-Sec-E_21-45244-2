<?php
?>

<html>
<head>
    <title>Name Validity Check</title>
</head>
<body>
    <table align="center">
        <tr><td width="30%"></td></tr>
        <tr >
            <td align="center" style="width:50%">
    <fieldset>
        <legend> <h2>Gender Validation</h2></legend>
    <form align="center" style="width:50%" method="POST" action="gendervalidityCheck.php" enctype="">
        <table>
        <tr><td align="center"><strong>Select Gender: </strong></td></tr>
        <div>
        <tr><td><input type="checkbox" name="gender" value="male" >Male</td></tr>
        <tr><td><input type="checkbox" name="gender" value="female" >Female</td></tr>
        <tr><td><input type="checkbox" name="gender" value="others" >Others</td></tr>
</div>
        <div>
        <tr><td align="center"><input type="submit" name="submit" value="Submit" ></td></tr>
</div>
    </table>
    </form>
</fieldset>
</td>
</tr>
<tr>
<td width="30%"></td>
</tr>
</table>
</body>
</html>
