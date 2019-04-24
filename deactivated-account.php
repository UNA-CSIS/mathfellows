<?php
	 
  /*** Abdullah Alharbi ***/
  session_start();
  include('tutor-header.php');
  
  if ($_SESSION['user_type'] !== 3){
    header('location:do-sign-out.php');
  }
?>

<body>
  <div class="container">
    
    <div class="instructions_msg">
      <div class="msg">
        Your account has been deactivated by an admin.
      </div>
      
      <div class="msg">
        Please, resolve the issue bfore you can log in.
      </div>
    </div>
    
  </div>
</body>
</html>