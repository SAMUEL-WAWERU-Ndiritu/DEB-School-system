
   <div>
           <div class="form-header">
            <h5 class="text-center text-dark">Parent Guardian Details</h5>
           </div>

           <div class="form-group">
                <label for="father_name"> Father Name:</label><br/>
                <input id="father_name" type="text" name="father_name" value="<?php echo (isset($_POST['father_name']) ? $_POST['father_name'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="father_tel"> Father Tel:</label><br/>
                <input id="father_tel" type="text" name="father_tel" value="<?php echo (isset($_POST['father_tel']) ? $_POST['father_tel'] : '')?>" class="form-control"/>
            </div>

            
           <div class="form-group">
                <label for="mother_name"> Mother Name:</label><br/>
                <input id="mother_name" type="text" name="mother_name" value="<?php echo (isset($_POST['mother_name']) ? $_POST['mother_name'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="mother_tel"> Mother Tel:</label><br/>
                <input id="mother_tel" type="text" name="mother_tel" value="<?php echo (isset($_POST['mother_tel']) ? $_POST['mother_tel'] : '')?>" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="gurdian_name"> Gurdian Name:</label><br/>
                <input id="gurdian_name" type="text" name="gurdian_name" value="<?php echo (isset($_POST['gurdian_name']) ? $_POST['gurdian_name'] : '')?>" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="mother_tel"> Gurdian Tel:</label><br/>
                <input id="mother_tel" type="text" name="gurdian_tel" value="<?php echo (isset($_POST['gurdian_tel']) ? $_POST['gurdian_tel'] : '')?>" class="form-control"/>
            </div>


            

            <div class="form-group">
                        <label for="death_certificate">Incase of the daeth of any of the parent or guardian say yes and support with death certificate if not leave blank please:</label><br/>
                        <select id="death_certificate" class="form-control" name="death_certificate"value="<?php echo (isset($_POST["death_certificate"]) ? $_POST["death_certificate"] : '')?>">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                </div>
            
</div>
