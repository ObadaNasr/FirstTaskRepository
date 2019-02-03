<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign In</title>
        <meta charset="utf-8">

         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
         <style>
             .container{
                 width: 20%;
                 margin-top: 200px;
             }
             #submit{
                 margin-left: 35%;
                 margin-top: 5%;
             }
             #goToSignUp{
                 margin-left: 15%;
             }
         </style>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>
    <body>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

       <div class="header"></div>
       <div class="container">
           <form method="POST" id="SignInForm" action="index.php">
                <div class="form-group" >
                      <label for="EmailLabel">Email address</label>
                      <input type="text" class="form-control" id="Email" data-validation="email" name="Email" aria-describedby="emailHelp" placeholder="Enter email" margin="100">
                </div>
                <div class="form-group">
                      <label for="PasswordLabel">Password</label>
                      <input type="password" class="form-control" id="password" name="Password"placeholder="Password">
                             
                </div>
                   <button type="submit" class="btn btn-primary" id="submit">Sign In</button>
                   <a href="Sign_Up.php" id="goToSignUp">Sign up</a>      
      </form> 
       </div>
       <div class="footer"></div>
       <script src="SignInValidation.js" type="text/javascript"></script>
    </body>
</html>
