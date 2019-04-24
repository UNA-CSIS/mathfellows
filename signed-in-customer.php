<?php 

if ($_SESSION['user_type'] !== 4){
    header('location:do-sign-out.php');
}

?>
<!-- Signed in customer -->

<!-- Abdullah M -->

  <body>
    <div class="container">
      
      <div class="main_text">
        Welcome 'username'..
      </div>
    </div>
  </body>
</html>