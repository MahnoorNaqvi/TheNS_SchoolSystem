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
    <link rel="stylesheet" type="text/css" href="about.css">
    <script src="javascript.js"></script>
    <?php include 'registercookie.php';  ?>

     <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
 

          <!-- GOOOGLE FONT -->
     
      <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Asap&family=Bangers&family=Chelsea+Market&family=Dancing+Script&family=Lobster&family=Piedra&family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
   
    
</head>
<body>
   
  

<!-- //////////////////////// Navbar  Start//////////////////////////////// -->


    
<div  class="header" id="topheader">

  
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top shadow-lg p-3 mb-5 bg-info">
        <div class="container navb" >
   
     <a class="navbar-brand  font-weight-bold navb" style="font-family: 'Lobster'; 
     color: rgb(11, 156, 156); font-size: 15px;"
      href="index.html"><img src="img/n6.jpg" width="25"
      height="25" class="d-inline-block align-top " 
      alt="" loading="lazy"> THE NS MONTESSORI SCHOOL SYSTEM</a> 
   
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
   
     <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
   
       <ul class="navbar-nav ml-auto">  <!-- ml-auto for margin left -->
   
         <li class="nav-item active">
           <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
         </li>

         <li class="nav-item">
          <a class="nav-link text-white " href="about.html">ABOUT US</a>
        </li>
   
         <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle  text-white  " href="#"
           id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" 
           aria-haspopup="true" aria-expanded="false">
            GALLERY
          </a>
          <div class="dropdown-menu  shadow-sm p-3 mb-5 bg-dark" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item font-weight-bold text-info " href="main gallery.html">Main Events</a>
            <a class="dropdown-item font-weight-bold text-info" href="activity gallery.html">CLass Activities</a>
          </div>
        </li>
   
         
   
        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle  text-white  " href="#"
             id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" 
             aria-haspopup="true" aria-expanded="false">
              ADMISSION 
            </a>
            <div class="dropdown-menu  shadow-sm p-3 mb-5 bg-dark" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item font-weight-bold text-info " href="admission.html">Fees Structure  </a>
              <a class="dropdown-item font-weight-bold text-info" href="sch.html">Schedule</a>
              <a class="dropdown-item font-weight-bold text-info" href="policy.html">Policy</a>
            </div>
          </li>
   
         <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle  text-white  " href="#"
           id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" 
           aria-haspopup="true" aria-expanded="false">
            REGISTRATION 
          </a>
          <div class="dropdown-menu  shadow-sm p-3 mb-5 bg-dark" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item font-weight-bold text-info " href="form.php">LOGIN FORM </a>
            <a class="dropdown-item font-weight-bold text-info" href="signup.php">SIGNUP FORM</a>

          </div>
        </li>
   
          
          <li class="nav-item ">
           <a class="nav-link text-white " href="contact.html">CONTACT US</a>
         </li>

   
       </ul>
   
               </div>
               
           </div>
       </nav>
       

     </div>
<section class="header-section">
</section>

  <!-- ---------------------heading ....................... -->

  <section>
    <div class="container headings text-center why mt-3 mb-2 ">

<!--     <h1 class="text-center font-weight-bold p-5 text-uppercase wel text-success" style="font-family: 'Dancing Script', cursive;" > -->
       <h1 class="text-center font-weight-bold say text-uppercase">
      <span class="text-white" id="mymove">WELCOME</span> <?php echo $_SESSION['username']; ?> 
        <!-- <span class="text-dark wel">WELCOME </span> 
        <hr> -->
     </h1>
     </div>

         <h1 class="text-center font-weight-bold p-5 text-uppercase feess" style="font-family: 'Indie Flower', cursive;" >
        <span class="text-info">Register </span> Yourself </h1>
  </section>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Login Successfull!</strong> Now You Can Register Yourself!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


  <section class="contact-us" id="contact">

    <div class="container text-center" id="forum">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                <form  name="myForm"  action="done.php" onsubmit="return validation()" method="POST">
                    <div class="form-row">
                      <div class="form-group col-md-6 ">
                        <label for="username">Student's Name</label>
                        <input type="text" class="form-control" name="name"  id="username" placeholder="Enter Your Name">
                      <span id="student" class="text-danger font-weight-bold" ></span>
                    </div>
                      <div class="form-group col-md-6">
                        <label for="username2">Father's Name</label>
                        <input type="text" class="form-control" name="faname" id="username2" placeholder="Enter Full Name">
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="surname">Surname</label>
                          <input type="text" class="form-control" id="surname"  placeholder="Enter Your SurName">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="religion">Religion</label>
                          <input type="text" class="form-control"  name="reli"  placeholder="Enter Your Religion">
                        </div>
                      </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" name="phn" id="phone" placeholder="Any Valid Mob/Phone Number">
                      </div>

                    <div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" name="adrs"  id="inputAddress" placeholder="Enter Your Full Address">
                    </div>
                    <div class="form-group">
                      <label for="admission">Addmission Required in Which Class</label>
                      <input type="text" class="form-control" name="admcls"
                       id="admission" placeholder="Enter Required Class">
                    </div>
                    <div class="form-group">
                        <label for="school">Name Of Last Attended School</label>
                        <input type="text" class="form-control" id="school"  placeholder="Enter your Previous School Name">
                      </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Country</label>
                        <input type="text" class="form-control" name="cntry" id="inputCity">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">City</label>
                        <select id="inputState" class="form-control" >
                          <option selected>...</option>
                          <option>Hyderabad</option>
                          <option value="">Karachi</option>
                          <option value="">Lahore</option>
                          <option>Any Other City</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" style="margin-bottom: 50px !important;">Register</button>
                  </form>
            </div>
        </div>
    </div>
  
    

</section>





<!-- ////////////////////////////////////FOOTER/////////////////////////// -->

<section>
    <footer class="footersection" id="footerdiv">
     <div class="container mt-10 ">
       <div class="row">
        
         <div class="col-lg-4 col-md-4 col-12 footer-div" >
           <div  class="">
             <h3 class="text text-warning ">For Further Details</h3>
             <hr class="light">
             <h5 id="h5"><i class="fa fa-user text-white"></i> CONTACT US!</h5>
    
             <p id="head"><i class="fa fa-phone icon"></i> CELL : 0333-2722813</p>
    
    
            <p id="head"><i class="fa fa-phone icon "></i>  PHONE NO : 022-3800866</p>
    
    
            <p id="head"><i class="fa fa-phone icon"></i>  CELL : 0334-3233246  </p>
    
    
            <p id="head"><i class="fa fa-envelope text-white-50"></i> thensschool@gmail.com</p>
    
           </div>
         </div>
    
         <div class="col-lg-4 col-md-4 col-12 footer-div" >
          <div  class="">
            
            <h3 class=" text-warning text">Connect With Us</h3>
            <hr class="light">
            <h5 id="h5"><i class="fa fa-thumbs-o-up text-white"></i> Let Us Be Social!</h5>
            <p><a href="https://www.facebook.com/Thensmontessorischoolsystem" target="_blank"><i class="fa fa-facebook fa-2x text-primary icons"></a></i>
             <a href="https://twitter.com/salmanzaidi101" target="_blank" > <i class="fa fa-twitter fa-2x text-info icons"></a></i>
             <a href="https://api.whatsapp.com/send?phone=<03332722813>"  target="_blank"> <i class="fa fa-whatsapp fa-2x text-success icons"></a></i> 
             <a href="https://www.instagram.com/syed_salman_haider_zaidi/" target="_blank">  <i class="fa fa-instagram fa-2x icons " style="color: #dc143c;"></a></i>
             </p>
            
            </p>
          </div>
        </div>
    
        <div class="col-lg-4 col-md-4 col-12 footer-div" >
          <div  class="">
           <h3 class="text-warning text">Visit Our School Branch</h3>
           <hr class="light">
           <h5 id="h5"><i class="fa fa-map-marker text-white"></i> Address!</h5>
           <p id="head">House No:239 Block-E Unit # 9 <br>Latifabad Hyerabad</p>
     
    
          </div> 
         </div>
    
    
    
    
    
    
       </div>
    
     </div>
    </footer>
    <div class="container-fluid bg-dark" id="footerid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <p>Copyright © 2020 The NS Montessori School System <br>
          <span id="theme">Theme By Mahnoor Naqvi</span></p>
    
        </div>
      </div>
    </div>
    
    
    </section>

 <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 

   <script type="text/javascript">
     

function validation() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Student's Name must be filled out");
    return false;
  }
}

function validation() {
    var y = document.forms["myForm"]["faname"].value;
    if (y == "") {
      alert("Father's Name can't be blank");
      return false;
    }
  }

  function validation() {
    var z = document.forms["myForm"]["phn"].value;
    if (z == "") {
      alert("Enter Valid Phone Number");
      return false;
    }
  }

  function validation() {
    var a = document.forms["myForm"]["adrs"].value;
    if (a == "") {
      alert("Must Given Your Address");
      return false;
    }
  }

  function validation() {
    var b = document.forms["myForm"]["admcls"].value;
    if (b == "") {
      alert("Requirement must be Filled! ");
      return false;
    }
  }
  
   </script>
    
    </body>
    </html>

    


