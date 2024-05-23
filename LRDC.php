<?php
include("code.php");

?>

<!---------- Meta HTML Starts --------->
<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
<!---------- Meta HTML Ends --------->

<!---------- Logo HTML Starts --------->
<div class="container">
   <img src="images/logo.png" class="logo">
   </div>
   <!---------- Logo HTML Ends --------->

   <!---------- Main Menu HTML Starts --------->
<nav>
   <div class="container"> 
      <a href="index.php">Home</a>
    <a href="About_us.php">About us</a>
    <a href="CDC.php">CDC</a>
    <a href="LRDC.php">LRDC</a>
    <a href="Training.php">Training</a>
    <a href="Notice_Board.php">Notice Board</a>
    <a href="Contact_us.php">Contact us</a> 
    <!-- <a href="Registration.php">Registration</a> -->
    <!-- <a href="login.php">Login</a> -->
    
   </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mt-4" id="login-container">
            <div class="card">
               <div class="card-header text-center">
                  <h5>User Login</h5>
               </div>
               <div class="card-body">
                     <form action="code.php" method="post" enctype="multipart/form-data">
                     <span>Select whether you ara a participant or coordinator </span>
                        <div class = "form-group mt-2 mb-2">
                           <a href="registration.php " class="text-decoration-none" type="radio" name="login"><input type="radio" name="login" value="participant" >Participant</a>
                           <a href="" class="text-decoration-none" type="radio" name="login"><input type="radio" name="login" value="coordinator" >NITTTR Coordinator</a>
                           
                        </div>
                        <div class = "form-group mt-2 mb-3">
                           <label for="" class = "mb-2"><b>Email</b></label>
                           <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class = "form-group mt-3 mb-2">
                        <label for="" class = "mb-2"><b>password</b></label>
                           <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class = "form-group mt-3 mb-2">
                       
                        <a href="registration.php"  class=" text-decoration-none ">New users click here to register</a>
                        </div>

                        <div class = "form-group mt-3 text-center">
                           <input type="submit" name="login" class="btn btn-primary" value = "Log in">
                           <a href="#"  class="btn btn-primary text-decoration-none text-white">cancel</a>
                        </div>
                        <div class = "form-group mt-5 text-center">
                           
                           <a href="#"  class=" text-decoration-none">Forgot Password</a>
                        </div>
                  </form>
               
               </div>
            </div>
        </div>

        <!-- Homepage -->
        <div class="col-md-8" id="homepage-container">
            <div class = "mt-4">
            <h3 style = "height:40px; width : 100%; background-color:blue; color:#fff;text-align:center;border-radius:5px;padding:5px;">Welcome to  the online Training Management System</h3>
            <h5 style = "text-align:center;color:brown;">Interactive Online Training Management System </h5>

            <p style = "text-align:center;margin-top:30px;">
               <a href="#" style = "font-size: 16px;">Click here to view list of upcoming courses <img src="images/new.gif" alt="gif" height="30px" width = "30px"></a>
            </p>
           
               <p style = "height:33px; width : 80%; background-color:red; color:#fff; text-align:center;border-radius:5px; font-size:18px; margin-left:70px;">Training and Activities Calender 2023-2024</p>
               <p style = "height:33px; width : 90%; background-color:green; color:#fff; text-align:center;border-radius:5px; font-size:18px; margin-left:28px;">Training and Activities Calender 2023-2024</p>

               <p><b>Steps for applying for Short Term Course :-</b></p>
               <p><b>Step 1 :- </b>All participants are required to create their online account through one time registration as new user. <a href = "registration.php">Register Here</a><br>
               After registration  participants : <b>a)</b> can manage/Update their profile . <b>b)</b> Apply for Training Programme. <b>c)</b> View all the Trainings they have applied and attended.
            </p>
               <p><b>Step 2 :- </b>Verify mobile no through OTP .(without mobile no verification participants will not be able to login to their account)</p>
               <p><b>Step 3 :- </b>After login , participant has to click on Apply for STC menu in the left panel .</p>
               <p><b>Step 4 :- </b>Select the Department and Mode to search the Course . </p>
               <p><b>Step 5 :- </b>Apply for the desired Training / Short Term Course .</p>
               <p><b>Step 6 :- </b>Download Application from under STC Applied menu in the left panel , Print it , get it duly signed by competent Authority of your</p>

            
            </div>
           
        </div>
    </div>
</div>
   </body>
   <script src="js/script.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>



