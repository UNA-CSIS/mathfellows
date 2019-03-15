<?php

/* Sign up page */

/*** Abdullah M ***/

  session_start();
  /* If not signed in */

  // if ($_SESSION['']
  include('signed-out-header.php')
?>
  <body>
    <div class="container">
      
      <div class="main_text">
        Sign up
      </div>
      
      <div class="sign_up" >
        
        <form action="index.php" method="post">
          <div> 
            <label for="fn">First name:</label>
            <input type="text" name="fn" required>
          </div>
                        
          <div> 
            <label for="ln">Last name:</label>
            <input type="text" name="ln" required>
          </div>
          
          <div> 
            <label for="pn">Phone number:</label> 
            <input type="number" name="pn" required>
          </div>
          
          <div> 
            <label for="email">Email:</label>
            <input type="text" name="email" required>
          </div>
          
          <div> 
            <label for="un">Username:</label>
            <input type="text" name="un" required>
          </div>
          
          <div> 
            <label for="pwd1">Password:</label>
            <input type="password" name="pwd1" required>
          </div>
          
          <div> 
            <label for="pwd2">Repeat password:</label>
            <input type="password" name="pwd2" required>
          </div>
          
         <div> 
            <label for="student_or_tutor">I'm a:</label>
            <span id="dont_float">
              <input type="radio" name="acct_type" value="Customer" checked> Customer
              <input type="radio" name="acct_type" value="Tutor"> Tutor
            </span>
          </div>
          
          <div>
            <span id="dont_float">
              <input type="checkbox" name="agree" value="agree" required> I agree to the terms of use and service
            </span>
          </div>
                        
          <div id="submit_button">
              <button class="button" type="submit">Sign up</button>
          </div>   
          
        </form>
                
      </div>
      
    </div>
  </body>
</html>