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
        Hello, 'name'. Your approval as a tutor is still pending.
      </div>
      
      <div class="msg">
        You can use your account once approved.
      </div>
    </div>
    
  </div>
</body>
</html>