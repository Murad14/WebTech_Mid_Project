<?php
  function checkemailPattern($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
  }

  function EmailCheck()
  {
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $sEmail = $_POST['email'];

      if($sEmail == "" || !checkemailPattern($sEmail))
      {
        echo "<span style='color:red;'>*Email is invalid</span>";
      }
    }

  }



 ?>
<?php
include("./dbconn.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];

  		if($name == "" || strlen($name) < 4 || ctype_digit($name[0]) )
  		{
  			echo "<span style='color:red;'>*Please enter a valid name</span>";
  		}
  	else{

        //updating the table
        $query = "INSERT INTO users (full_name,email, password,address, contact)
                VALUES ('$name','$email','$password','$address','$contact')";

        $result = mysqli_query($dbconn,$query);

        if($result){
            echo "succseesss";
            header('Location:login.php');
        }

    }
      }

?>
