<?php

  /*** Abdullah M ***/

  include('admin-header.php');

  // If deletion is successfull, log them out
  // Else, return them to this page with a message (such as 
  // passwords don't match)
?>
  <body>
    <div class="container">    
      <div class="main_text">
        Delete account:
      </div>
      
      <div class="change_password">
        <form action="#" method="post">
          
          <div> 
            <label for="pwd">Password:</label>
            <input type="password" name="pwd" required>
          </div>

          <div> 
            <label for="pwd_repeat">Repeat password:</label>
            <input type="password" name="pwd_repeat" required>
          </div>
          
          <div id="submit_button">
            <button class="button" type="submit">Confirm deletion</button>
          </div>   
        </form>
      </div>
      
    </div>
  </body>
</html>