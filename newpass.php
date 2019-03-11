<?php 
session_start();
?>

<html>
<head>
<title>Forgot Password tunnel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="forgotpass.css">

</head>
<style> 
body {
    background-image: url("bt.jpg");
    background-size: 100%;
</style>
<body align="center">


    <form class="signup-form" method="POST">
  <br><br>
  
  
  <div class=sqn>

  <p class="sqn">
  
  <?php

require('connect.php');

$un = $_SESSION['forgotuname'];
	if (isset($un))
 			{
			
			
			echo "<p id='unm'>Username: $un </p>";
			}
			else
			{
				echo "Values Not set";
			}

			if (isset($_POST['seca'])){
				$abc= $_POST['seca'];
			}
			else {
				

			}
					
			$positive = "SELECT `secq` FROM `user` WHERE `username` ='$un'";
		 	$resp = mysqli_query($connection, $positive);
		 	($row = mysqli_fetch_row($resp));
			echo "<p id='fixline'> Your Security Question is </p>";
			$cd= implode($row);
			echo "<p id=secuq>$cd</p>";

if (isset($abc))
  {

  	$qu = "SELECT * FROM `user` WHERE secq='$cd' and seca='$abc'";
			$result = mysqli_query($connection, $qu) or die(mysqli_error($connection));
			$count = mysqli_num_rows($result);
			
			if ($count == 1)
			{
				
				header('Location: reset.php');
			} else {
				echo "Incorrect Security Answer";

			}
  }
  else {
  }

			

				

						
		?>

   </p> 
   </div>

  <br>
  <input type="text" name="seca" placeholder="Enter Your Answer"><br>
  <input type="submit" name="submit" value="Submit Answer" class="btn-submit"><br>
  <br><a class=fpd href = "mainlog.php"><p class=fpd>BACK TO LOGIN PAGE</p></a>
  </div>
  
</form>

</div>
</html>

