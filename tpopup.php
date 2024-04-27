<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylepopup1.css">


</head>

<body>
<div class="popup center">
        <div class="icon">
            <i class="fa fa-check"></i>
        </div>
        <div class="tittle">
            Thank You!!
        </div>
        <div class="description">
            We are happy that you Accepted our terms of services, we will surely don`t disapointed you.
        </div>

        <div class="dismiss_btn">
        
                <a href="home.php">
                    <button id="dismiss-popup-btn">Dismiss</a>
                                       </button>
            
        </div>
    </div>

    
    
    
</body>
</html>