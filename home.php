<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

    <!-- bootstrap file link  -->

    <link rel="stylesheet" href="links/bootstrap-4.6.1/dist/css/bootstrap.css">
    <!--<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>-->
    <script src="links/bootstrap-4.6.1/dist/js/jquery.js"></script>
    <script src="links/bootstrap-4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="links/bootstrap-4.6.1/dist/js/bootstrap.bundle.js"></script>

     <!-- Angularjs file link  -->
    <script src="links/angular-1.8.2/angular.js"></script>
    

     <!-- custom css file link  -->
    <link rel="stylesheet" href="css/stylehome.css">

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="links/fontawesome-6/css/all.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    

</head>
<body>

<?php include 'components/user_header.php'; ?>








<section id="header">
    <div  class="banner-txt">
      <h1>ONLINE TIFFIN SERVICE</h1>
      
    </div>
  <!--<div class="banner-box">
      <h4>The Flavors come from the culture of nature.</h4>
    </div>-->
    
        
    
    <br><br><br><br><br><br><br><br><br><br><br>
    
    
   




</section>
<section class="features">
<h3>HOME MADE FOOD SERVICE</h3>
<h6>Get homemade Tiffen deliverd at your door step</h6>
<div class="container">
  <div class="row">
    <div class="col-md-4">
       <div class="fbox">
        <div class="fimg">
          <img src="images/breakfast2.jpg" class="img1">
          <div class="layer">
            <a href="menu.php">Breakfast</a>
          </div>
        </div>
       </div>
    </div>
    <div class="col-md-4">
      <div class="fbox">
        <div class="fimg">
          <img src="images/dishL.jpg" >
          <div class="layer">
            <a href="menu.php">Lunch</a>
          </div>
        </div>
       </div>
    </div>
    <div class="col-md-4">
      <div class="fbox">
        <div class="fimg">
          <img src="images/dinner.jpg" >
          <div class="layer">
            <a href="menu.php">Dinner</a>
          </div>
        </div>
       </div>
    </div>
  </div>
</div>
</section>
<!---Our Teamm -->
<section class="Team">
  <h1>Meet Our Staff Members</h1>
  <p> We are Food and also Service Specialist</p>

  <div class="row">
    <div class="col-md-3 profile-pic text-center">
      <div class="team-col">
        <div class="img-box">
        <img src="images/staff1.jpg" class="img-responsive">
        <ul>
          <a href=""><li class="instra"><i class="fa-brands fa-instagram"></i></li></a>
          <a href=""><li><i class="fa-brands fa-facebook-f"></i></li></a>
          <a href=""><li><i class="fa-brands fa-twitter"></i></li></a>
          
          
        </ul>
      </div>
        
      </div>
      <h3>Akshy Shrma</h3>
        
    </div>
    <div class="col-md-3 profile-pic text-center">
      <div class="img-box">
      <div class="team-col">
        <img src="images/staff2.jpg">
        <ul>
          <a href=""><li><i class="fa-brands fa-instagram"></i></li></a>
          <a href=""><li><i class="fa-brands fa-facebook-f"></i></li></a>
          <a href=""><li><i class="fa-brands fa-twitter"></i></li></a>
          
        </ul>
        </div>
        
      </div>
      <h3>Chirag Patel</h3>
        
    </div>
    <div class="col-md-3 profile-pic text-center">
      <div class="team-col">
        <div class="img-box">
        <img src="images/staff3.jpg">
        
        <ul>
          <a href=""><li><i class="fa-brands fa-instagram"></i></li></a>
          <a href=""><li><i class="fa-brands fa-facebook-f"></i></li></a>
          <a href=""><li><i class="fa-brands fa-twitter"></i></li></a>
        </div>
        </ul>
        
      </div>
      <h3>Riya Panchal</h3>
        
    </div>
    <div class="col-md-3 profile-pic text-center">
      <div class="team-col">
        <div class="img-box">
        <img src="images/staff4.jpg">
        <ul>
          <a href=""><li><i class="fa-brands fa-instagram"></i></li></a>
          <a href=""><li><i class="fa-brands fa-facebook-f"></i></li></a>
          <a href=""><li><i class="fa-brands fa-twitter"></i></li></a>
          
        </ul>
        </div>
        </div>
        
     
      <h3>Priya Patel</h3>
        
        </div>
    </div>
  </div>





</section>

<center><h2 class="steptxt">How it Works</h2></center>

<section class="steps">
  
  <div class="box">
    
    <img src="images/choose your meal.jpg" alt="" class="rounded-circle" id="simg">
    <h3>Choose Your Meal</h3>
  </div>
  <div class="box">
    <img src="images/free&fast delivery.jpg" alt="" class="rounded-circle" id="simg">
    <h3>Free and fast delivery</h3>
  </div>
  <div class="box">
    <img src="images/payment.jpg" alt=""  class="rounded-circle" id="simg">
    <h3>easy payments methods</h3>
  </div>
  <div class="box">
    <img src="images/enjoyfood.jpg" alt="" class="rounded-circle" id="simg">
    <h3>and finally ,enjoy your food</h3>
  </div>
</section>
<br><br><br><br>
<!---Our Story -->
<section class="ourstory">
    
     <div class="story">
        <h1 class="heading1">OUR STORY</h1>
        <br>
       
        <img src="images/collage1.jpg" class="storyimg" >
        <div class="storycontent ">
        <h3>HOME AWAY FROM HOME DELIVERED <br> AND SERVED IN YOUR CONFINES.</h3>
        <p>We have four delicious option of tiffin in our menu.<br>
            Which are in Breakfast Lunch. Dinner<br>
             There are two for Lunch.
            The option are:</p>
            <ul>
                <li><a href="menu.html">1.South indian Fix Tiffine</a></li>
               
                <li><a href="menu.html">2.Gujrati Fix Tiffine</a></li>
                <li><a href="menu.html">3.Punjabi Fix Tiffine </a>  </li>
            </ul>
        
        <br><br>
    </div>


     </div>
</section>
<br><br><br><br><br><br>



















<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>