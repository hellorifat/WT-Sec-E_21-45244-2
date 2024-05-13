<?php
session_start();
if(null==($_COOKIE['fflag'] || $_COOKIE['wflag'] || $_COOKIE['iflag'] ||$_COOKIE['aflag'])){
header('location: dflogin.php');
}
$currentUser= $_SESSION['userlevel'];

require_once('../model/dfdb.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
  </head>
  <body>
    <table border = 1 cellspacing = 0 cellpadding = 10>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Image</td>
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM allusers where phone=$currentUser")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td> <img src="img/<?php echo $row["uimage"]; ?>" width = 200 title="<?php echo $row['uimage']; ?>"> </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="../uploadimagefile">Upload Image File</a>
  </body>
</html>