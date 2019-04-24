<?php
    /*** Abdullah M ***/
    session_start();	
    include('customer-header.php');
    
    if ($_SESSION['user_type'] !== 4){
       header('location:do-sign-out.php');
    }
?>
  <body>
    <div class="container">
      <div class="instructions_msg">
        <div class="msg">
          You're all set! 'tutor name' will get in touch with you soon.
        </div>
        <div class="msg">
          Please allow the tutor a minimum of 'number' business days before you get a response.
        </div>
      </div>
		  </div>
	</body>
</html> 