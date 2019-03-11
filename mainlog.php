<html>
<head>
<style>
body {
    background-image: url("jt.jpg");
    background-size: 100%;
}
</style>
</head>
<body>
  
</body>
</html>

<?php 
session_start();
?>
<?php
 require('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])) {

$username = mysqli_real_escape_string($connection ,$_POST['username']);
$password = md5($_POST['password']);
  
$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);


if ($count == 1)
{

$_SESSION['username'] = $username;
} else {

$fmsg = "Invalid Login Credentials.";
}
}

if (isset($_SESSION['username']))
{
header('Location: loginhome.php');
 
} else {
  
}


?>

<html>
<head>
<title>Signup |jatin</title>
<link rel='stylesheet' href='mainlog.css'>

</head>

 <body align="center">
  <font color="orange">
  <h1>Bikers Login Page</h1>
  <form class='signup-form' method='POST'>
  <br><br><br><br>
  <input type='text' name='username' value= '<?php if (isset($_POST['username']))
{ echo $username; }
  else{ }
    ?>'
  placeholder='Username'>
  
  <input type='password' name='password' value='<?php if (isset($_POST['password']))
{ echo $password; }
  else{ }
    ?>'

  placeholder='Enter Password'>
  

  <br>
  <input type='submit' name='submit'  class='btn-submit'>
  <a href='mainreg.php'> <button type ='button' id='stylea'> Signup </button></a>

  <br><a class=fpd href = 'forgotpass.php'><p class=fpd> <font color="orange">FORGOT PASSWORD</p></a>
  <?php
  
  if (!isset($fmsg))
  {
  }
  else {
  echo "<p id='unsf'>$fmsg</p>";
  }
  ?>

</div>
  
</form>

</div>
<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>
</html>
