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
        Thank you for signing up. Your information will be reviwed by an admin.
      </div>
      
      <div class="msg">
        Once approved, you will be able to sign in and use your new account.
      </div>
    </div>
    
  </div>
</body>
</html>