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
      
      <div class="main_text">
        Update email:
      </div>
      
      <div class="change_email">
        <form action="#" method="post">
          <div> 
            <label for="old_email">Old email:</label>
            <input type="email" name="old_email" required>
          </div>

          <div> 
            <label for="new_email_1">New email:</label>
            <input type="email" name="new_email_1" required>
          </div>
          
          <div> 
            <label for="new_email_2">Repeat new email:</label>
            <input type="email" name="new_email_2" required>
          </div>          
          <div> 
            <label for="pwd">Enter your password to confirm:</label>
            <input type="password" name="pwd" required>
          </div>                        
          <div id="submit_button">
              <button class="button" type="submit">Update</button>
          </div>   
        </form>
      </div>
      
    </div>
  </body>
</html>