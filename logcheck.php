<?php
// including the database connection file
include("./dbconn.php");
if(isset($_POST['submit']))
{

    $email=$_POST['email'];
    $password=$_POST['password'];

        //updating the table
      $sql=mysqli_query($dbconn,"select * from users where email='$email' and password='$password'");

      if(mysqli_num_rows($sql))
			{
				while($row=mysqli_fetch_array($sql))
				{

					$id=$row["id"];
					$name=$row["full_name"];
					$email=$row["email"];
          $address=$row['address'];
          $contact=$row["contact"];

					session_start();
					$_SESSION["name"]=$name;
					$_SESSION["id"]=$id;
					$_SESSION["email"]=$email;
          $_SESSION["address"]=$address;
          $_SESSION["contact"]=$contact;

    }
    header('location:./home.php');
  }


    else{
      echo "invalid user";
    }
  }

?>
