<?php 

  if ($_SESSION['user_type'] !== 3){
    header('location:do-sign-out.php');
  }
?>

<!-- Holleigh Landers -->

  <body>
    <div class="container">
      
      <div class="main_text">
        Welcome 'username'..
      </div>
    </div>
  </body>
</html>