<?php
 
	/*** Abdullah M ***/
 
  session_start();
  
  //$ROOT_PATH = '/Applications/XAMPP/xamppfiles/htdocs/math-fellows-project';
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mathFellows";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection to database failed!");
} 



//if(!isset($_SESSION['un'])){
  /* If not signed in */

//  include('signed-out-header.php');
//  include('signed-out.php');

//  include('root-admin-header.php');
//  include('signed-in-admin.php');

//  include('admin-header.php');
//  include('signed-in-admin.php');

//   include('customer-header.php');
//   include('signed-in-customer.php');

   include('tutor-header.php');
   include('signed-in-tutor.php');


// include($ROOT_PATH.'/signed-out-header.php');
// include($ROOT_PATH.'/signed-out.php');

//  include($ROOT_PATH.'/customer/customer-header.php');
//  include($ROOT_PATH.'/customer/signed-in-customer.php');
  
//   include($ROOT_PATH.'/admin/admin-header.php');
//   include($ROOT_PATH.'/admin/signed-in-admin.php');
  
//   include($ROOT_PATH.'/tutor/tutor-header.php');
//   include($ROOT_PATH.'/tutor/signed-in-tutor.php');

//} else{
//}

$conn->close();

?>


