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
    <form align="center" style="width:50%" method="POST" action="dobvalidityCheck.php" enctype="">
        <table>
        <tr><td align="center"><strong>Select Gender: </strong></td></tr>
        <input type="text" name="dob" value="" placeholder="mm-dd-yyyy">
        <tr><td align="center"><input type="submit" name="submit" value="Submit" ></td></tr>
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
