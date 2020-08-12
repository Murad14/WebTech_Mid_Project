<?php
session_start();
?>

<html>
	<head>
		<title>Welcome</title>
	</head>
	<body>
        <h1><center>Welcome <?php echo $_SESSION["name"]  ?> </center></h1>
        <a href="view_profile.php" style="float: right;">My Profile</a>
        <br>
        <a href="login.php" style="float: right;">Logout</a>
        <p><h3>All Fund Riser Post</h3></p>
        <form action="/form/submit" method="GET">
        <input type="text" name="text" class="search" placeholder="Search here!">
        <input type="submit" name="submit" class="submit" value="Search">
        </form>
        <br>
        <p><h4>Your Every single donation towards Corona relief matters a lot !! </h4></p>
          <p>In Bangladesh COVID-19 pandemic marks as an unprecedented time in medical history that will require the best of humanity to overcome. The coronavirus, widely known as COVID19 has taken thousands of lives across the globe and spread in Bangladesh. Your donation to this fund will support immediate and long-term relief and recovery in vulnerable communities during one of the most challenging times we have collectively faced.......<a href="view_post.php">View Details</a><p>
            <img src="image.jpg" width="250" alt="">
            <br>
            <p><h4>Your Every single donation towards Corona relief matters a lot !! </h4></p>
              <p>In Bangladesh COVID-19 pandemic marks as an unprecedented time in medical history that will require the best of humanity to overcome. The coronavirus, widely known as COVID19 has taken thousands of lives across the globe and spread in Bangladesh. Your donation to this fund will support immediate and long-term relief and recovery in vulnerable communities during one of the most challenging times we have collectively faced.......<a href="view_post.php">View Details</a><p>
                <img src="image.jpg" width="250" alt="">
                <br>
                <p><h4>Your Every single donation towards Corona relief matters a lot !! </h4></p>
                  <p>In Bangladesh COVID-19 pandemic marks as an unprecedented time in medical history that will require the best of humanity to overcome. The coronavirus, widely known as COVID19 has taken thousands of lives across the globe and spread in Bangladesh. Your donation to this fund will support immediate and long-term relief and recovery in vulnerable communities during one of the most challenging times we have collectively faced.......<a href="view_post.php">View Details</a><p>
                    <img src="image.jpg" width="250" alt="">
  </body>
</html>
