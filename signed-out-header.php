<html>
<!-- Signed out header -->

<!-- Abdullah M -->
	<?php
		//$ROOT_PATH = '/Applications/XAMPP/xamppfiles/htdocs/math-fellows-project';
	?>
	
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="stylesheet.css">
  
    <div class="signed_out_header">
      <div class="logo">
        <a href="index.php">
          <img src="UNA-logo.png">
        </a>
      </div>
      
      <div class="nav_bar">
        <a href="index.php">
          <div class="website_name website_name_in_signed_out">
            Math Fellows
          </div>
        </a>

        <ul class="nav_menu">          
          <li class="home_link"><a href="index.php">Home</a></li>
        </ul>
      </div>
    </div>
    
    <form class="sign_in_form" action="verify-login.php" method="post">
      <input id="sif_input" type="text" name="username" placeholder="username">
        
      <input id="sif_input" type="password" name="password" placeholder="password">
        
      <button class="sign_in_button" type="submit">Sign in</button>
    </form>        
  </head>
  