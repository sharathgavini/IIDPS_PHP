
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>IIDPS-Register User</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin"action="" method="post">
       <br><br><br><br>
        <h2 class="form-signin-heading" align="center">IIDPS-REGISTER</h2>
        <input type="text" id="inputText" class="form-control" placeholder="First Name" required autofocus name="first_name">
        <input type="text" id="inputText" class="form-control" placeholder="Last Name" required autofocus name="last_name">
        <input type="text" id="inputText" class="form-control" placeholder="username" required autofocus name="username">
        <input type="email" id="inputEmail" class="form-control" placeholder="email address" required autofocus name="email">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit1">Register</button>
      </form>

    </div> 

  </body>
</html>
<?php include "includes/functions.php";
    if(isset($_POST['submit1']))
    {
        checkUser();
        if(!$userErr)
        {
            insertUser();
            createTable();
         header("Location:profile.php");
        }
            else
        echo" <center>username unavailable<center>";
    }
    
?>