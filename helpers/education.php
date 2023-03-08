<div class="form-header">
            <h5 class="text-center text-dark my-3">Academic Details</h5>
           </div>

          

           <div class="form-group">
                <label for="institution_name">Institution Name:</label><br/>
                <input id="institution_name" type="text" name="institution_name" value="<?php echo (isset($_POST['institution_name']) ? $_POST['institution_name'] : '')?>" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="institution_postal">Institution Postal Adress:</label><br/>
                <input id="institution_postal" type="date" name="institution_postal" value="<?php echo (isset($_POST['institution_postal']) ? $_POST['institution_postal'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="institution_tel">Institution Tell No:</label><br/>
                <input id="institution_tel" type="text" name="institution_tel" value="<?php echo (isset($_POST['institution_tel']) ? $_POST['institution_tel'] : '')?>" class="form-control"/>
            </div>



            <div class="form-header">
            <h6 class="text-center text-dark">Personal Academic Details </h6>
           </div>

           <div class="form-group">
                <label for="admission_no">Admission Number:</label><br/>
                <input id="admission_no" type="text" name="admission_no"  value="<?php echo (isset($_POST['admission_no']) ? $_POST['admission_no'] : '')?>" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="faculty_name">Faculty Name:</label><br/>
                <input id="faculty_name" type="text" name="faculty_name"  value="<?php echo (isset($_POST['faculty_name']) ? $_POST['faculty_name'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="course_name">Course Name:</label><br/>
                <input id="course_name" type="text" name="course_name" value="<?php echo (isset($_POST['course_name']) ? $_POST['course_name'] : '')?>" class="form-control"/>
            </div>

        

           <div class="form-group">
                    <label for="perfomance_status">Perfomance Status:</label><br/>
                    <select id="perfomance_status" class="form-control" name="perfomance_status" value="<?php echo (isset($_POST['perfomance_status']) ? $_POST['perfomance_status'] : '')?>" >
                        <option value="Excellent">Excellent</option>
                        <option value="Very good">Very Good</option>
                        <option value="good">Good</option>
                        <option value="fair">Fair</option>
                        <option value="poor">Poor</option>
                    </select>
            </div>

           <div class="form-group">
                <label for="annual_fees">Annual Fees:</label><br/>
                <input id="annual_fees" type="text" name="annual_fees" value="<?php echo (isset($_POST['annual_fees']) ? $_POST['annual_fees'] : '')?>" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="current_term_fees">This Semester Fees/Term Fees:</label><br/>
                <input id="current_term_fees" type="text" name="current_term_fees"  value="<?php echo (isset($_POST['current_term_fees']) ? $_POST['current_term_fees'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="next_term_fees">Next Term Fees/Semester Fees:</label><br/>
                <input id="next_term_fees" type="text" name="next_term_fees" value="<?php echo (isset($_POST['next_term_fees']) ? $_POST['next_term_fees'] : '')?>" class="form-control"/>
            </div>
    