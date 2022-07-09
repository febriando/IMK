<?php 
session_start();
include_once('db_connect_IMK.php');
$database = new database();
 
if(isset($_SESSION['is_login'])){
    header('location:landing_page.php');
}
 
if(isset($_COOKIE['username'])){
  $database->relogin($_COOKIE['username']);
  header('location:landing_page.php');
}
 
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(isset($_POST['remember'])){
      $remember = TRUE;
    }
    else{
      $remember = FALSE;
    }
 
    if($database->login($username,$password,$remember)){
      header('location:landing_page.php');
    }
    else{
      $username = false;
      $password = false;
    }
  
}


?>

<!DOCTYPE html>
<html>
  <head>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style4.css">

    <title>Login</title>

  </head>
  <body class="efek">
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2>LOGIN</h2>
          <div class="underline-title"></div>
        </div>

        
        <form method="post" class="form">
          <label style="padding-top:13px">&nbsp;Username</label>
          <input 
          class="form-content"
          type="username" 
          name="username" 
          autocomplete="on" 
          required />
          <div class="form-border"></div>
          <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
          <input
          id="user-password"
          class="form-content"
          type="password"
          name="password"
          required />
          <div class="form-border"></div>
          
          <input id="submit-btn" type="submit" name="login" value="LOGIN" />
          <a href="Register_IMK.php" id="signup">Don't have account yet?</a>
          <div>
            <?php if(isset($username) ): ?>
              <p style="color: red; font-style : italic; text-align: center;">Username salah</p>
            <?php endif; ?>  
            <?php if(isset($password) ): ?>
              <p style="color: red; font-style : italic; text-align: center;">Password salah</p>
            <?php endif; ?>
          </div>
          
        </form>
        
      </div>
    </div>   
  </body>
  </html>