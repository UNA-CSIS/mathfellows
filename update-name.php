<?php
	 
  /*** Abdullah Alharbi ***/

  include('tutor-header.php');
?>

  <body>
    <div class="container">
      <div class="instructions_msg">
        <div class="msg">
          By submitting this form, you agree to change your name. 
        </div>
        <div class="msg">
          After submission, an admin has to review the new changes and give approval before you see any changes.
        </div>
        <div class="main_text">
          Update name:
        </div>
      </div>
      
      <div class="change_name" >
        <form action="waiting-for-admin-approval.php" method="post">
          <div> 
            <label for="fn">First name:</label>
            <input type="text" name="fn" required>
          </div>

          <div> 
            <label for="ln">Middle name:</label>
            <input type="text" name="mn">
          </div>
          
          <div> 
            <label for="ln">Last name:</label>
            <input type="text" name="ln" required>
          </div>          
          <div> 
            <label for="pwd">Password:</label>
            <input type="password" name="pwd" required>
          </div>
          <div>
            <span id="dont_float">
              <input type="checkbox" name="agree" value="agree" required> I agree to change my name
            </span>
          </div>
                        
          <div id="submit_button">
              <button class="button" type="submit">Submit</button>
          </div>   
        </form>
      </div>
      
    </div>
  </body>
</html>