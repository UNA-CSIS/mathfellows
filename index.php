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

if (isset($_SESSION['user_type'])){


//    echo var_dump($_SESSION);
    
    if ($_SESSION['user_type'] === 0){
        include('signed-out-header.php');
        if (isset($_SESSION['error'])){
            echo '<div class="acct_msg" style="color: darkred">'.$_SESSION['error'].'</div>';
            unset($_SESSION['error']);
        }
        include('signed-out.php');
        exit();
    }
    else if ($_SESSION['user_type'] === 4){ 
        include('customer-header.php');
        include('signed-in-customer.php');
        exit();
    }
    else if ($_SESSION['user_type'] === 3){
        include('tutor-header.php');
        include('signed-in-tutor.php');
        exit();
    }
    else if ($_SESSION['user_type'] === 2) {
        include('admin-header.php');
        include('signed-in-admin.php');
        exit();
    }
    else if ($_SESSION['user_type'] === 1) {
        include('root-admin-header.php');
        include('signed-in-admin.php');
        exit();
    }
}
 else {
    include('signed-out-header.php');
    include('signed-out.php');
}

//echo var_dump($_SESSION);
//echo $_SESSION['user_type'].'<br>ooo';

// include($ROOT_PATH.'/signed-out-header.php');
// include($ROOT_PATH.'/signed-out.php');

//  include($ROOT_PATH.'/customer/customer-header.php');
//  include($ROOT_PATH.'/customer/signed-in-customer.php');
  
//   include($ROOT_PATH.'/admin/admin-header.php');
//   include($ROOT_PATH.'/admin/signed-in-admin.php');
  
//   include($ROOT_PATH.'/tutor/tutor-header.php');
//   include($ROOT_PATH.'/tutor/signed-in-tutor.php');

$conn->close();

?>


