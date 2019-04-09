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
    <?php 
    /*<link rel="stylesheet" href=<?php echo $ROOT_PATH.'/stylesheet.css'?>*/
    ?>
  
    <div class="signed_out_header">
      <div class="logo">
        <a href="index.php">
          <img src="UNA-logo.png">
        </a>
      </div>
                
      <a href="index.php">
        <div class="website_name">
          Math Fellows
        </div>
      </a>
                
      <div class="home_button">
        <form action="index.php" method="post">
          <button class="button" type="submit">Home</button>
        </form>
      </div>
                
      <div class="sign_in" >
        
        <form action="index.php" method="post">
          <span> 
            <label for="username">Username:</label>
            <input id="sif_input" type="text" name="username">
          </span>
                        
          <span>
            <label for="password">Password:</label>
            <input id="sif_input" type="password" name="password">
          </span>
                        
          <span>
            <button class="button" type="submit">Sign in</button>
          </span>                
        </form>
                
      </div>
    </div>
  </head>
  