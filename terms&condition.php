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
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styleterms.css">


</head>

<body style="background-image: url(images/termsbg);
    background-size: cover;">
    <style>
        body{
    background-image: url(images/termsbg);
    background-size: cover;
    font-size: 12px;
}

        </style>
<div class="wrapper flex_align_justify">
            <div class="term_service">
                <div class="tc_item tc_head flex_align_justify">
                    <div class="icon flex_align_justify">
                        <ion-icon name="terminal"></ion-icon> <!--link of icon-->
    
                    </div>
                    <div class="text">
                        <h2>TERMS OF SERVICES</h2>
                        <p>Last update on September 12,2022</p>
                    </div>
                </div>
                <div class="tc_item tc_body">
                    <ol>
                        <li>
                        <p>Order must be book in advance.</p>   
                        </li>
                        <li>
                        <p>All prices are without including GST.</p>
                           <li> 
                            <p>Method of payment we accept only in cash.</p>
                            </li>
                           <li>
                           <p>You will not receive any comfirmation of your booking until your payment has been approved.</p>
                        </li>
                           <li> 
                        <p>If there are any complaints the managemnet needs to be informed immediately. Appropriate actions will be taken as soon as possible.</p>    
                        </li>
                        <li>
                            <p>For any Queries regarding the website or placing order please contact our Kitchen Manager: Contact no:- +919856324157 or email:- tiffinservices145@gmail.com</p>
                        </li>
                    </ol>
                </div>
                <!--
                <div class="tc_item tc_foot flex_align">
                    <a href="home.php" id="link">
                    <button class="decline_btn" >Decline</a>
                       
                    </button>
                    <a href="login.php" id="link">
                    <button class="accept_btn">Accept</a>
                                       </button>
                </div>-->
            </div>
    
        </div>
    
    
    
</body>
</html>