<?php 
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user = $_POST['username'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $msg   = $_POST['message'];
    $formErrors =array();  
 
    if (strlen($user) <= 3 or strlen($user)> 20){
        $formErrors[]='User Name must be between <strong> 3 & 20 </strong> character ';
    }
    if (str_word_count($msg) < 10 ){
        $formErrors[]='Message Must be at least <strong> 10 </strong> words ';
    }
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" >

    <title>Toka Contact Form</title>
</head>
<body>
     
       <div class="container">
       <h1 class="text-center">Contact Me</h1>


        <!-- start Form-->
       <form class="contact-form" action="<?php echo $_SERVER ['PHP_SELF']?>" method="POST">
       <?php 
            if (isset($formErrors)){?>
       
       <div class="alert alert-danger d-flex align-items-center alert-dismissible" role="alert">
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      
            <div>
            <?php    
            foreach($formErrors as $error){
                echo '<i class="fa-solid fa-triangle-exclamation"></i>  ', $error , '<br>';
                }
        
        ?>
            </div>
        </div>
        <?php   }?>
            <input 
                type="text" 
                name="username" 
                class="form-control"  
                placeholder="Type Your Username">
                <i class="fa-solid fa-user fa-fw"></i>
            <input 
                type="email"
                name="email" 
                class="form-control" 
                placeholder="Please Type a Valid Email">
                <i class="fa-solid fa-envelope fa-fw"></i>
            <input 
                type="tel" 
                name="phone" 
                class="form-control" 
                placeholder="Please Type Your Telephone Number">
                <i class="fa-solid fa-square-phone fa-fw"></i>
            <textarea 
                class="form-control"
                name="message"
                placeholder="Write Your Message Here....."></textarea>
            <input 
                type="submit" 
                value="Send Message" 
                class="btn btn-success ">
             <i class="fa-regular fa-paper-plane fa-fw"></i>
                

       </form>
       <!-- End Form-->
    </div>
     


    
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>