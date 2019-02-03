<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
          <style>
             .container{
                 width: 40%;
                 margin-top: 100px;
             }
             #submit{
                 margin-left: 40%;
                 margin-top: 5%;
             }
            
             .error {
                color: red;
                
             }
          </style>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
    
    <body>
        <?php
             if (session_status() == PHP_SESSION_NONE) {
                 session_start();
             }
              if(isset($_SESSION['EmailBack'])){
                 echo "<script>"
                  . " alert('This Email is Exist');"
                         . "</script>";
             }
         ?>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
       <div class="header"></div>
       <div class="container">
       
       
           <form id="myForm" method="POST" action="StoreInDB.php" >
               <div class="form-group" >
                   
                      <label for="FirstNameLabel">First Name</label>
                      <input type="text" class="form-control" name="firstName" id="fname" placeholder="Enter first name" class="name" value=<?php if(isset($_SESSION['firstNameBack'])) echo $_SESSION['firstNameBack'] ?>>
               </div> 
               <div class="form-group" >
                      <label for="LastNameLabel">Last Name</label>
                      <input type="text" class="form-control" name="lastName"  id="lname" placeholder="Enter last name" class="name" value=<?php if(isset($_SESSION['lastNameBack']))  echo $_SESSION['lastNameBack']; ?>>
               </div>
                <div class="form-group" >
                      <label for="EmailLabel">Email address</label>
                      <input type="text" class="form-control" id="emailAddress" name="SignUpEmail" aria-describedby="emailHelp" placeholder="Enter email" value=<?php if(isset($_SESSION['EmailBack']))  echo $_SESSION['EmailBack']; ?> >
                </div>
                <div class="form-group">
                      <label for="PasswordLabel">Password</label>
                      <input type="password" class="form-control" id="pass" name="SignUpPassword" placeholder="Password">
                </div>
               <div class="form-group">
                      <label for="ConfirmPasswordLabel">Confirmed Password</label>
                      <input type="password" class="form-control" name="ConfirmPassword"  id="Cpass" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Sign Up</button>
      </form>
       </div>
       <div class="footer"></div>
       <script src="SignUpValidate.js" type="text/javascript"></script>
       <?php
        session_destroy();
       ?>
      
    </body>
</html>
