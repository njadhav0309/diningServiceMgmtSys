<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        	<div class="card-body">
          		<h4 class="card-title">Student Form</h4>
              <form class="forms-sample" action="<?php echo base_url();?>index.php/diningservicemgmt/hirestudent/<?php echo $studentData['student_id'] ?>" method="post">
                  <div class="form-group">
                      <label for="student_name">Student Full Name</label>
                      <input type="text" class="form-control" name="student_name" placeholder="FirstName MiddleName LastName" disabled="true" value="<?php echo $studentData['student_name'] ?>">
                  </div>
                  <div class="form-group">
                      <label for="DU_id">Dining Units</label>
                      <!-- <input type="text" class="form-control" name="name" placeholder="Insert Name"> -->
                       <select class="form-control" name="DU_id">
                        <?php
                          foreach ($duData as $d) {?>
                            <option value="<?php echo $d['DU_id']; ?>"><?php echo $d['DU_name']; ?> </option>
                        <?php  }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="arrival_date">Joining Date</label>
                    <input type="text" class="form-control" name="joining_date" placeholder="Joining Date">
                  </div>
                  <div class="form-group">
                    <label for="ssn">SSN</label>
                    <input type="text" class="form-control" name="ssn" placeholder="SSN">
                  </div>
                  <div class="form-group">
                    <label for="hourly_wage">Hourly Wage</label>
                    <input type="text" class="form-control" name="hourly_wage" placeholder="Hourly wage">
                  </div>
                  <button type="submit" class="btn btn-primary mr-2" value="submit">Submit</button>
                  <!-- <button class="btn btn-light">Cancel</button> -->
              </form>
          </div>
      </div>
  </div>
</div>