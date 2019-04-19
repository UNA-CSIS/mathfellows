<?php

	/*** Abdullah M ***/

  include('customer-header.php');
?>
  <body>
    <div class="container">
      
		<!-- If tutors found  -->

      <div class="tutors_found_msg">
      		'number' tutors found:
      </div>
      
      <?php
        //bring stuff from db and stick it below
      
        //while ($row = mysql_fetch_array($result))
        //  bring the info into vars and display them in the div below

      ?>
      
      <!-- This div is to be contained inside of a php script -->
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
            
						<!-- Max of 240 characters -->
            'tutor description'
          </div>
        </div>
        <div class="submit_bttn_box">
            <form action="confirm-booking.php" method="post">
              <input class="button" type="submit" value="Book tutor"> 
            </form>
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
						<!-- Max of 240 characters -->
            'tutor description'
          </div>
        </div>
        <div class="submit_bttn_box">
          <form action="confirm-booking.php" method="post">
            <input class="button" type="submit" value="Book tutor"> 
          </form>
        </div>
      </div>
      
     
      

    <!-- If NO tutors found  -->        
      <?php
        //if ($result->num_rows == 0)
          //echo what's below
      ?>
      
      <div class="see_tutor_msg">
        --------(below message should be shown when no tutors were found for user selection)--------<br><br>
        
        Sorry, no tutors found
      </div>
      
      <div id="urls" class="urls so">
        <a href="see-a-tutor.php">Try your search again</a>
      </div>
        
		  </div>
	</body>
</html>

 