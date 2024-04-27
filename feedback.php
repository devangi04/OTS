
<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['send'])){

   $id = $_SESSION['user_id'];
   $id = filter_var($id, FILTER_SANITIZE_STRING);
   $messages = $_POST['messages'];
   $messages = filter_var($messages, FILTER_SANITIZE_STRING);

   $select_messages= $conn->prepare("SELECT * FROM `feedback1` WHERE  id = ?  AND message = ?");
   $select_messages->execute([ $id,  $messages]);

   if($select_messages->rowCount() > 0){
      $messages[] = ' sent message!';
   }else{

      $insert_messages = $conn->prepare("INSERT INTO `feedback1`( id,  message) VALUES(?,?)");
      $insert_messages->execute([$id, $messages]);

      $message[] = 'sent message successfully!';

   }

}

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
   <link rel="stylesheet"href="css/stylefeedback.css">
    

    <link rel="stylesheet" href="links/fontawesome-6/css/all.css">
</head>
<body>

<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->
    
    <div class="container">
        
       
            
        
        <div class="feedbackbox">
            <h3 class="txt">Rate Your Experience</h3>   
            <div class="emoji">
                <div id="emoji">
                <img src="images/poor.png">
                <img src="images/bad.png">
                <img src="images/okay.png">
                <img src="images/good.png">
                <img src="images/excellent.png">
                </div>
                
            </div>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <br><br>
            <form  action=""method="post">
                <header></header>
                
               <div class="textarea">
                   <textarea name="messages" cols="30" placeholder="Describe Your Experience" style="color:red"></textarea>
               </div>
                 <br>
               <div id="btn">
                   <center><button type="submit" name="send" >Post</button></center>
               </div>
           </form>
        </div>
        
        
    </div>
    
   
    
    
    
<script src="js/feedback.js"></script>
</body>
</html>