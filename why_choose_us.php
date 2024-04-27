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
    <title>Why_choose_us</title>
    <link rel="stylesheet" href="css/styleWhychooseus.css">
    <link rel="stylesheet" href="links/bootstrap-4.6.1/dist/css/bootstrap.css">
   
    <script src="links/bootstrap-4.6.1/dist/js/jquery.js"></script>
    <script src="links/bootstrap-4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="links/bootstrap-4.6.1/dist/js/bootstrap.bundle.js"></script>

     <!-- Angularjs file link  -->
    <script src="links/angular-1.8.2/angular.js"></script>
</head>
<body>

    <!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->
    
    <div class="container-fluid">
        <h1 class="text-center mt-5 display-3 fw-bold">Why To Choose Us?</h1>
        <hr class="mx-auto mb-5 w-25">
        
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <div class="card shadow">
                    <img src="images/mummy-ke-hathon-ka.webp" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Ghar Ka Khana</h3>
                        <hr class="mx-auto w-75">
                        <p>Delicious home-cooked food with minimum oil, Our main focus is on providing homemade food.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <div class="card shadow">
                    <img src="images/tiffin-variety.webp" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Amazing Variety</h3>
                        <hr class="mx-auto w-75">
                        <p>We are the only tiffin service provider in ahmedabad that allows you to provide various food in tiffin.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <div class="card shadow">
                    <img src="images/fsaai-license.webp" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Fssai Certified</h3>
                        <hr class="mx-auto w-75">
                        <p>Our box is registered with Govt. Certificate.Hygience is our top priority.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                <div class="card shadow">
                    <img src="images/free-delivery.webp" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Free Delivery</h3>
                        <hr class="mx-auto w-75">
                        <p>We provide delivery at your doorstep free of cost up.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
       
       <script src="js/why_choose_us.js"></script>
      

</body>
</html>