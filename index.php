<?php 
require("Connection.php"); 
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
  <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <link rel="stylesheet" href="./mycss.css">
</head>
<body> 
    <div class="login-form">
        <h2 class="text-light header">ADMIN LOGIN PANEL</h2> 
        <form action="" method="POST"> 
            <div class="input-field">
                <i class="fa fa-user"></i> 
                <input type="text" class="TextEnter mt-5" placeholder="Admin Name" name="AdminName">
            </div> 

            <div class="input-field">
                <i class="fa fa-lock"></i> 
                <input type="password" class="TextEnter mt-5" placeholder="password" name="AdminPassword">
            </div> 

            <button type="submit" class="bg-info mt-4 btn" name="Signin">Sign In</button> 

            <div class="extra mt-4"> 
                <a href="#">Forgot Password ?</a>

            </div> 
        </form>
    </div>  
    <?php 
    if(isset($_POST['Signin'])){ 
        $query = "SELECT * FROM `adminpassword` WHERE  `AdminName` = '$_POST[AdminName]' AND `AdminPassword` = '$_POST[AdminPassword]'"; 
      $result =   mysqli_query( $con, $query); 
      if(mysqli_num_rows($result)==1){ 
        // echo "Correct"; 
        session_start(); 
        $_SESSION['AdminLoginId'] = $_POST['AdminName']; 
        header("location: dashboard.php"); 

      }else{
        // echo "incorrect"; 
        echo "<script>alert('Incorrect password')</script>";
      }
    } 




?> 
    
</body>
</html>