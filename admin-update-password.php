<?php

  /*** Abdullah M ***/

//  include('root-admin-header.php');
  include('admin-header.php');
?>
  <body>
    <div class="container">    
      <div class="main_text">
        Update password:
      </div>
      
      <div class="change_password">
        <form action="#" method="post">
          
          <div> 
            <label for="old_password">Old password:</label>
            <input type="password" name="old_pwd" required>
          </div>

          <div> 
            <label for="new_pwd_1">New password:</label>
            <input type="password" name="new_pwd_1" required>
          </div>
          
          <div> 
            <label for="new_pwd_2">Repeat new password:</label>
            <input type="password" name="new_password_2" required>
          </div>
          
          <div id="submit_button">
            <button class="button" type="submit">Update</button>
          </div>   
        </form>
      </div>
      
    </div>
  </body>
</html>