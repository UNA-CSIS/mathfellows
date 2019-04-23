<?php
	/*** Abdullah M ***/
  

// Make sure credentials are set before you proceed

  session_start();
  
  //$ROOT_PATH = '/Applications/XAMPP/xamppfiles/htdocs/math-fellows-project';
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test_tutors";

  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
      die("Connection to database failed!");
  } 

  $un = $_POST['username'];
  $pwd = $_POST['password'];

//------------------------------------------------------ 
// Checking if they're a customer
  $sql = "SELECT * FROM customer WHERE username='$un' AND password='$pwd'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {  
    // log them in as a customer and redirect to index and exit
  } 


//------------------------------------------------------ 
// Checking if they're a tutor
  $sql = "SELECT * FROM tutor WHERE username='$un' AND password='$pwd'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {  
    // log them in as a tutor and redirect to index and exit
  } 


//------------------------------------------------------ 
// Checking if they're an admin
  $sql = "SELECT * FROM admin WHERE username='$un' AND password='$pwd'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {  
    // log them in as an admin and redirect to index and exit
  } 


//------------------------------------------------------ 
// If arrived here (did not exit from any of the above statements)
// Then set an invalid login message and redirect to index

// Don't forget to unset the login credentials

  $conn->close();

?>



