<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=egde">
        <title>NS Montessori School</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="form.css">
    <script src="javascript.js"></script>
     

     <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
 

          <!-- GOOOGLE FONT -->
     
      <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Asap&family=Bangers&family=Chelsea+Market&family=Dancing+Script&family=Lobster&family=Piedra&family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
      
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
    
</head>
<body>
   
  <section>
    <div class="container headings text-center ">
   <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-10">
           <img src="img/verify.png">
       </div>
       <div class="col-lg-12 col-md-12 col-sm-12 col-10">
           <h1 class="text-center font-weight-bold p-5 text-uppercase  text-success  "
    style="font-family: ''Piedra'',cursive; letter-spacing: 5px;" >
        <span class="text-success">THANK YOU! </span> <?php echo $_SESSION['username']; ?> 
     </h1>
       </div>

       <div class="col-lg-12 col-md-12 col-sm-12 col-10">
           <h3 class="text-dark">Your Form Has Been Successfully Submitted</h3>
       </div>
<div class="col-lg-12 col-md-12 col-sm-12 col-10">
       <a href="index.html">Go Back</a>
</div>

   </div>
     </div>
  </section>

</body>
</html>
