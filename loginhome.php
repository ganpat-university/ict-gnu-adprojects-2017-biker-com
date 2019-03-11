<?php  
session_start();
if (!isset($_SESSION['username']))
{
  echo "You are Not Logged in<br> Go back to Login Page";
  echo "<br><a href='logout.php'><button class='btn btn-warning btn-block'> LOG IN </button></a>";
  exit();
}
else
{
include 'connect.php';
$uname = $_SESSION['username'];
}

?>
<!DOCTYPE html>
<html>
<head>
<body>
  <title>Bike's</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.7/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="loginhome.css">
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  
     <div class="logo">
     <img src="img/logomain.png">
     </div>

    <ul class="main-nav">
                 <?php  

       if (isset($_SESSION['username']))
       {

        $user= $_SESSION['username'];
        echo "<li><a> " .$user. "</a></li> ";

       }
       else
       {

       }

       ?>
       <li><a href="">HOME</a></li>

      <li><a id="showmain" data-toggle="collapse" data-target="hide" href="dropdown.php">EXPAND</a>
      
            </li>
     
             
    </ul>
  </div>
<header>
  <div Class = "hero">
  <h1> Hello Biker's <br>Ready For Race </h1>
  <div class="button-awesome">
  <a href="sample1.html" class="btn btn-half">Show me more</a>
   <a href="RENT.PHP" class="btn btn-full">I Want a Bike</a>
  </div>
  </div>

      </ul>
     
    </nav>
</header>

<section class="features">
<h2 align="center">The Risks of Not Riding a Motorcycle</h2>
<p class="copy">"Never fear a motorcycle, but always respect it", said my dad to an adolescent me. With a firm tone and extended index finger he coached me as I sat stiff-armed with my hands on the bars and unblinking wide eyes locked on him.
</p>

<div class="container">

  <div class="row"> 


<div class="col-md-3">
  <i class=" fa fa-certificate"></i>
  <h3 class="text-center">KTM</h3>
  
  <p class="arranging">KTM have been to the edge and back, winning the Dakar Rally for 16 years straight. With an unquenchable sense of adventure the KTM team truly lives the READY TO RACE motto!
 
  </p>

</div><div class="col-md-3">
  <i class=" fa fa-camera"></i>
   <h3 class="text-center">ROYAL ENFIELD</h3>
  <p class="arranging">"The logo and motto of the original Royal Enfield company reflect their background in weapons manufacturing. The original Royal Enfield logo featured a cannon, with the slogan “Made like a gun, goes like a bullet”
 
  </p>

</div><div class="col-md-3">
  <i class=" fa fa-envelope"></i>
   <h3 class="text-center">BMW</h3>
  <p class="arranging">From the original 'The Ultimate Driving Machine' and more recent 'Sheer Driving Pleasure' and 'JOY' advertising campaigns, the slogans and taglines BMW has come up with have been some of the most memorable in the industry.
 
  </p>

</div><div class="col-md-3">
  <i class=" fa fa-cog"></i>
   <h3 align="center">HERO</h3>
  <p class="arranging">Hero MotoCorp's new logo and tagline was revealed in London at the time of unveiling its global identity. ... The earlier tagline of Hero Honda was 'Dhak Dhak Go' and with the name change to Hero MotoCorp,.
 
  </p>

</div>

</div>

</div>
 </section>
 <section>
   <div class="bike" clearfix>

<a href="img/bmw.jpg" data-lighbox="mygallery"><img src="img/bmw_tn.jpg"></a>
<a href="img/re.png"><img src="img/re_tn.jpg"></a>
<a href="img/harly.jpg"><img src="img/harly_tn.jpg"></a>
<a href="img/hero.jpg"><img src="img/hero_tn.jpg"></a>
<a href="img/ktm.png"><img src="img/ktm_tn.jpg"></a>
<a href="img/beneli.jpg"><img src="img/beneli_tn.jpg"></a>
<a href="img/bajaj.jpg"><img src="img/bajaj_tn.jpg"></a>
<a href="img/yamaha.jpg"><img src="img/yamaha_tn.jpg"></a>
<a href="img/suzuki.png"><img src="img/suzuki_tn.jpg"></a>
<a href="img/triamph.jpg"><img src="img/triamph_tn.jpg"></a>
<a href="img/kawasaki.jpg"><img src="img/kawasaki_tn.jpg"></a>
<a href="img/honda.jpg"><img src="img/honda_tn.jpg"></a>
   </div>
 </section>
 <section class="mobile">
   
<h2 class="text-center"> HOW IT WORK AS SIMPLE 1,2,3</h2>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="pic">
      <img src="img/ip.png">
      </div>
    </div>
    <div class="col-md-6">
      <div class="works-step">
        <div>1</div>

        <p>
          
Now poorvikamobiles Becomes an Apple Authorized reseller Apple Store at #Shine poorvika  #Mogappair!!

For our customer buy original Apple Product in Our shop….

Poorvikamobiles have online shopping site.

Want to buy any other mobiles for #EMI offers visit our nearest #Showroom (Or) Visit our #Website.

        </p>  <div>2</div>

        <p>
          
Now poorvikamobiles Becomes an Apple Authorized reseller Apple Store at #Shine poorvika  #Mogappair!!

For our customer buy original Apple Product in Our shop….

Poorvikamobiles have online shopping site.

Want to buy any other mobiles for #EMI offers visit our nearest #Showroom (Or) Visit our #Website.

        </p>  <div>3</div>

        <p>
          
Now poorvikamobiles Becomes an Apple Authorized reseller Apple Store at #Shine poorvika  #Mogappair!!

For our customer buy original Apple Product in Our shop….

Poorvikamobiles have online shopping site.

Want to buy any other mobiles for #EMI offers visit our nearest #Showroom (Or) Visit our #Website.

        </p>
        <a href=" "><img src="  img/android.png"></a>
        <a href=" "><img src="  img/appstore.png"></a>
      </div>
    </div>
  </div>
</div>

 </section>
 <section class="cities">
  <h3 class="text-center">WE ARE CURRENTLY  RENTING BIKES IN THESE CITIES</h3>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="img/12345.jpg"> 
        <h4>GOA</h4>
        <p><i class="fa fa-cog">500+ Happy Riders</i></p> 
        <p><i class="fa fa-cog">500+ Happy Riders</i></p>
         <p><i class="fa fa-cog">500+ Happy Riders</i></p>
      </div>  <div class="col-md-3">
        <img src="img/GIR.jpg"> 
        <h4>GIR</h4>
        <p><i class="fa fa-cog">500+ Happy Riders</i></p> 
        <p><i class="fa fa-cog">500+ Happy Riders</i></p>
         <p><i class="fa fa-cog">500+ Happy Riders</i></p>
      </div>  <div class="col-md-3">
        <img src="img/pune1.jpg"> 
        <h4>PUNE</h4>
        <p><i class="fa fa-cog">500+ Happy Riders</i></p> 
        <p><i class="fa fa-cog">500+ Happy Riders</i></p>
         <p><i class="fa fa-cog">500+ Happy Riders</i></p>
      </div>  <div class="col-md-3">
        <img src="img/diu1.jpg"> 
        <h4>DIU</h4>
        <p><i class="fa fa-cog">500+ Happy Riders</i></p> 
        <p><i class="fa fa-cog">500+ Happy Riders</i></p>
         <p><i class="fa fa-cog">500+ Happy Riders</i></p>
      </div>
    </div>
  </div>
   
 </section>
 <section class="testimonials">
   <h3 class="text-center">OUR BIKERS CAN'T LIVE WITHOUT US</h3>
<div class="container">
  <div class="row gap">
    <div class="col-md-4">

        <p>
Now poorvikamobiles Becomes an Apple Authorized reseller Apple Store at #Shine poorvika  #Mogappair!!

For our customer buy original Apple Product in Our shop….

Poorvikamobiles have online shopping site.

Want to buy any other mobiles for #EMI offers visit our nearest #Showroom (Or) Visit our #Website.

        </p>
        <cites>
          <img src="img/jj.jpg"> jatin
        </cites>




    </div>  <div class="col-md-4">

        <p>
Now poorvikamobiles Becomes an Apple Authorized reseller Apple Store at #Shine poorvika  #Mogappair!!

For our customer buy original Apple Product in Our shop….

Poorvikamobiles have online shopping site.

Want to buy any other mobiles for #EMI offers visit our nearest #Showroom (Or) Visit our #Website.

        </p>
        <cites>
          <img src="img/jj.jpg"> MJ
        </cites>




    </div>  <div class="col-md-4">
   
        <p>
Now poorvikamobiles Becomes an Apple Authorized reseller Apple Store at #Shine poorvika  #Mogappair!!

For our customer buy original Apple Product in Our shop….

Poorvikamobiles have online shopping site.

Want to buy any other mobiles for #EMI offers visit our nearest #Showroom (Or) Visit our #Website.

        </p>
        <cites>
          <img src="img/jj.jpg"> jack
        </cites>
   



    </div>
  </div>
</div>

 </section>
 <section class="form">
  <form method="POST">
  <div class="container">
   <h3 class="text-center">COMMENT SECTION</h3>
   <div class="row">
     <div class="col-md-4">
       <input type="text" placeholder="USERNAME" class="form-control"><br>
            <input type="Email" placeholder="Email" class="form-control">
            

     </div><div class="col-md-8">
             <textarea class="form-control" rows="8" placeholder="COMMENTS" name="cm1" ></textarea>  
             <?php

             if (isset($_POST['cm1']))
             {

              $c1= ($_POST['cm1']);

              $cms1 = "UPDATE `user` SET comments = '$c1' WHERE `username` = '$uname'";
              
              $result=(mysqli_query($connection, $cms1));
              
              if($result) {
                echo "Comment Inserted";
                   echo "<button type='submit' class='btn btn-warning btn-block'>SUBMIT</button>
                  <form align='right' name='form1' method='POST'>

 
</form>";
                exit();
              } 
              else {
                echo "Error";
              }

             }

             else
             {
              echo "Enter Value in Comments";
           

             }

               ?>  
            <button type="submit" class="btn btn-warning btn-block">SUBMIT</button>
                  <form align="right" name="form1" method="POST">
  <label>
<form align="right" name="form1" method="post" action="mainlog.php">
  <label>

 </section>