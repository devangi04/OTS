<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

    <section class="about">
            <div class="main">
                <img src="images/lady3.jpg">
            <div class="about-text">
                    <h1 style="color:orange">ABOUT US</h1>
                    
                    <p style="color:white"><span>OTS Tiffine Service</span>is Tricity's first food-commerce which allows
                        you to order delicious home-style food in a convenient manner. 
                    <br><br>
                    We have partnered with home-makers in Tricity who love to cook &
                    serve.The food is prepared in their very own houses,they put in all the
                effort to make the food fresh ,hot,healthy & hygienic,and we deliver
                their efforts to you in a nealthy packed meal box.           
                <br><br>
                We absorb skillful home cooks from the locality into our network,and
                 thereby enable them to make a daily chore a source of financial stability.
                 Currently our network of home cooks is over 100 people strong and is spread over cities.
                 <br><br>
                 In our endeavor to make homemade food more accessible,OTS
                Tiffin Service hopes to empower homemakers while making all 
                natural,homely meals and delicious available at doorsteps across the country.
                </p>

                
                        
            </div>
    
            </div>
    
 </section>















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>



</body>
</html>