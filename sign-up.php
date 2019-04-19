<?php

  session_start();

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test_tutors";
  
  //$ROOT_PATH = '/Applications/XAMPP/xamppfiles/htdocs/math-fellows-project';
  
  /* If not signed in */

  // if ($_SESSION['']
  // include($ROOT_PATH.'/signed-out-header.php');
  include('signed-out-header.php');
?>
  <body>
    <div class="container">
      
      <div class="main_text">
        Sign up
      </div>
      
      <div class="sign_up" >
        
        <form action="index.php" method="post">
          <div> 
            <label for="first">First name:</label>
            <input type="text" name="first" required>
          </div>
                        
          <div> 
            <label for="last">Last name:</label>
            <input type="text" name="last" required>
          </div>
          
          <div> 
            <label for="phone">Phone number:</label> 
            <input type="number" name="phone" required>
          </div>
          
          <div> 
            <label for="email">Email:</label>
            <input type="text" name="email" required>
          </div>
          
          <div> 
            <label for="username">Username:</label>
            <input type="text" name="username" required>
          </div>
          
          <div> 
            <label for="password">Password:</label>
            <input type="password" name="password" required>
          </div>
          
          <div> 
            <label for="pwassword2">Repeat password:</label>
            <input type="password" name="password2" required>
          </div>
          
         <div> 
            <label for="student_or_tutor">I'm a:</label>
            <span id="dont_float">
              <input type="radio" name="acct_type1" value="Customer" checked> Customer
              <input type="radio" name="acct_type2" value="Tutor"> Tutor
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
</html


<?php 

  $first = $_POST['first'];
  $last = $_POST['last'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $date_created = NOW();

  $conn = new mysqli($servername, $root, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed" . $conn->connect_error);
  }

  if (isset($_POST['agree']) && $password == $password2)
  {
    if (isset($_POST['acct_type1']))
    {
       $sql = "INSERT INTO customer (first, last, phone, email, username, password, date_created) VALUES ('$first', '$last', '$phone', '$email', '$username', '$password', '$date_created')";
    }
    else
    {
       $sql = "INSERT INTO tutor (first, last, phone, email, username, password, approved, active, date_created) VALUES ('$first', '$last', '$phone', '$email', '$username', '$password', '0', '0', '$date_created')";      
    }
  }
  else {
    echo "Sorry, there was an error in the information provided. Please make sure you have agreed to the terms of use and your passwords match.";
      header("location:sign-up.php");
  }


  if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
  }    
  $conn->close(); 

?>









