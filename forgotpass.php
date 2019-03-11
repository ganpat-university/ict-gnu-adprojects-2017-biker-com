<?php 
session_start();
?>

<html>
<head>
<title>Forgot Password for bikers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="forgotpass.css">

<style> 
body {
    background-image: url("img/jj.jpg");
    background-size: 100%;
</style>
<body align="center">
</body>
</html>


    <form class="signup-form" method="POST">
  <br><br>
  <input type="text" name="forgotuname" placeholder="Username">
  
  <div class=sqn>

  <p class="sqn">
  
  <?php

require('connect.php');
if (isset($_POST['forgotuname']))
{
$fn= $_POST['forgotuname'];



echo "<p id='unm'>Username: $fn </p>";

$sql = "SELECT * FROM `user` WHERE `username` ='$fn'";
		$result =mysqli_query($connection, $sql);
		$resultCheck=mysqli_num_rows($result);

		if ($resultCheck >1)
		 {
		 	$positive = "SELECT `secq` FROM `user` WHERE `username` ='$fn'";
		 	$resp = mysqli_query($connection, $positive);
		 	($row = mysqli_fetch_row($resp));
			
			$cd= implode($row);
			if (isset($cd))
  {
  	$_SESSION['forgotuname'] = $fn;
  	header('Location: newpass.php');
  }

			
			// New Window Redirect Settings !
			
			

			} else { 
				echo "<p id='dne'> User Does not Exists </p>"; 
			}
		}
		else {
			echo "<p id='Waiting'>Waiting for User Input</p>";
			}
			?>

   </p> 
   </div>

  <br>

  <input type="submit" name="submit" value="Get Security Question" class="btn-submit"><br>
  <br><a class=fpd href = "mainlog.php"><p class=fpd> <font color="black">BACK TO LOGIN PAGE</font></p></a>
  </div>
  
</form>

</div>
</html>

