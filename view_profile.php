<?php
session_start();
?>

<html>
  <head>
    <title>Edit Profile</title>
  </head>
  <body>
<center>
    <fieldset>
        <a href="./home.php" style="float: left;"><h2>Home</h2></a>
        <a href="login.php" style="float: right;">Logout</a>
        <legend><b>My Profile</b></legend>
        <br><br><br>
        <p>Name:<?php echo $_SESSION["name"]  ?> </p>
        <p>Email:<?php echo $_SESSION["email"]  ?> </p>
        <p>Address:<?php echo $_SESSION["address"]  ?> </p>
        <p>Contact:<?php echo $_SESSION["contact"]  ?> </p>

        </fieldset>
      </center>

  </body>
</html>
