<?php
include('./regcheck.php');

 ?>
 <!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
  </head>
  <body align="center">
    <form method="POST" action="regcheck.php">
    <table height="100" width="450" border="1" cellspacing="0" align="center">
    <tr>
        <th colspan="3"><h2> Registration </h2> </th>
    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Name</td>
      <td width="300" > <input type="text" name="name" style="font-size:12pt;" required><br></br></td>
      <td ></td>

    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Email</td>
      <td> <input type="email" name="email" style="font-size:12pt;" required> <br></br> </td>
      <td></td>
    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Password</td>
      <td> <input type="password" name="password" style="font-size:12pt;" required> <br></br> </td>
      <td></td>
    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Address</td>
      <td> <input type="text" name="address" style="font-size:12pt;" required> <br></br> </td>
      <td></td>
    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Contact</td>
      <td> <input type="text" name="contact" style="font-size:12pt;" required> <br></br> </td>
      <td></td>
    </tr>
    <tr>
        <td colspan="3" height="40"align="right">
        <input type="submit" name="submit" style="font-size:12pt;">
        <a href="./login.php"  style="font-size:12pt;">Login</a>
        </td>
    </tr>

    </table>
</form>
  </body>
</html>
