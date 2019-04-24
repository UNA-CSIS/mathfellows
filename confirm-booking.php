<?php

  /*** Abdullah M ***/
  include('customer-header.php');
 
  if ($_SESSION['user_type'] !== 4){
    header('location:do-sign-out.php');
  }
?>
  <body>
    <div class="container">
      
      <!-- Below should be in a php script -->
      <div class="instructions_msg">
      		<div id="msg">
          How it works: after you click confirm, we'll send our tutor an email with your information and phone number.
        </div>
        <div id="msg">
          Then, our tutor will get in touch with you so both of you agree on a time, place, and rate.
        </div>
        <div id="msg">
          You're about to book 'tutor name', please click confirm if you would like to proceed...
        </div>
      </div>
      
      <div class="tutor_box">
        <div class="tutor_image">
          <img src="smiley-face-2.jpg" alt="Tutor img">
        </div>
        <div class="tutor_name_box">
          <div class="tutor_name_text">
            'tutor name'
          </div>
        </div>
        <div class="desc_box">
          <div class="desc_text">
            
						<!--  Max of 240 characters -->
            'tutor description'
          </div>
        </div>
      </div>
      <div class="confirm_tutor">
        <form action="done-booking.php" method="post">
          <input class="button" type="submit" value="Confirm"> 
        </form>
      </div>
      
		  </div>
	</body>
</html>