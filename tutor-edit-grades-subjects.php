<?php

  /*** Abdullah Alharbi ***/

  include('tutor-header.php');
?>
  <body>
    <div class="container">
  
      <div class="main_text">
        Select the classes and grades you teach:
      </div>
      
      <div class="tutor_selection">
        <form action="#" method="post">
    
          <div class="grades_box">      
            <div class="grades">
              <label>Grade:</label>
              <span id="grade_input">
                <input type="checkbox" name="grade" value="seven">7th grade
              </span>
              <span id="grade_input">
                <input type="checkbox" name="grade" value="eight">8th grade
              </span>
              <span id="grade_input">
                <input type="checkbox" name="grade" value="nine">9th grade
              </span>
              <span id="grade_input">
                <input type="checkbox" name="grade" value="ten">10th grade
              </span>
              <span id="grade_input">
                <input type="checkbox" name="grade" value="eleven">11th grade
              </span>
              <span id="grade_input">
                <input type="checkbox" name="grade" value="twelve">12th grade
              </span>
            </div>
          </div>
        
          <div class="subjects_box">
            <div class="subjects">
              <label>Subject:</label>
            
              <span id="subject_input">
                <input type="checkbox" name="subject" value="pre_algebra"> Pre-Algebra
              </span>
              
              <span id="subject_input">
                <input type="checkbox" name="subject" value="algebra"> Algebra (1 or 2)
              </span>
              
              <span id="subject_input">
                <input type="checkbox" name="subject" value="geometry"> Geometry
              </span>
              
              <span id="subject_input">
                <input type="checkbox" name="subject" value="trig"> Trigonometry
              </span>
              
              <span id="subject_input">
                <input type="checkbox" name="subject" value="pre_calc"> Pre-Calculus
              </span>
              
              <span id="subject_input">
                <input type="checkbox" name="subject" value="calculus"> Calculus
              </span>
            </div>
          </div>
 
          <div class="search_bttn_box">
            <div class="search_bttn">  
              <input class="button" type="submit" value="Update">
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>