
  <html>
<head>
  <html>
<head>
<style>
body {
    background-image: url("img/homebg2.jpg");
     background-size: 100%;
}
</style>
</head>
<body align="center">
</body>
</html>
<br><br><br>
 <div class="logo">
     <img src="img/logomain.png">
     </div>
<h1> <font color="white">Registration form <align center></h1> </font>

<link rel="stylesheet" href="mainreg.css">

</head>

  <form class="signup-form" method="POST"><br><br>
  
  <input type="text" name="username" placeholder="Username" required><br><br>

  
  <input type="Email" name="email"  placeholder="Email Address" required><br><br>
  
  <input type="password" name="password"  placeholder="Password" required><br><br>

  <input type="password" name="password1" placeholder="Repeat Password" required><br><br>

    
<p>Enter Security Question</p><select name="secq"><br>
<option value="like">What do you like the most</option>
<option value="Hobby">What's your Hobby</option>
<option value="Bike">Which is your fav Bike</option>
<option value="food">Fav food</option>
required id= "quest"><br><br></select><br><br>

  <input type="text" name="seca" placeholder="Answer" required id="ans">
  <br><br>
  <input type="submit" name="submit"  class="btn-submit">
  
    <?php

 require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['secq'])){

        $username = mysqli_real_escape_string($connection, $_POST['username']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = md5($_POST['password']);
        $password1 = md5($_POST['password1']);

        $secq = mysqli_real_escape_string($connection, $_POST['secq']);
        
        $seca = mysqli_real_escape_string($connection, $_POST['seca']);
 
  
  if ($password1 != $password) {
         echo "<br> <p id ='pnm'> Passwords do not Match || Re-enter Details</p>";
          // 
        }
else {




$query = "INSERT INTO `user` (username, password, email, secq, seca) VALUES ('$username', '$password', '$email','$secq', '$seca')";

        $result = mysqli_query($connection, $query);
        if($result){
          header("lOCATION:mainlog.php"); 
              
        }else{
            $fmsg ="User Registration Failed";
        }
    }
}

?>
  

</div>
  
 </div>

</form>

</div>
</html>