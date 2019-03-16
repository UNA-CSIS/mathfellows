<html>

<!-- Abdullah M -->

<!-- Signed in admin header -->
  
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="stylesheet.css">
  
  
    <div class="admin_header">
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
      
      <div class="manage_tutors_bttn">
        <form action="tutors.php" method="post">
          <button class="button" type="submit">Tutors</button>
        </form>
      </div>  
      
      <div class="account_and_sign_out_bttns">
        <form id="sign_out_bttn" action="#" method="post">
          <button class="button" type="submit">Sign out</button>
        </form>
        
        <form id="account_bttn" action="admin-account.php" method="post">
          <button class="button" type="submit">Account</button>
        </form>
      </div>
      
    </div>
  </head>