<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        	<div class="card-body">
          		<h4 class="card-title">Student Form</h4>
              <form class="forms-sample" action="<?php echo base_url();?>index.php/diningservicemgmt/editstudent/<?php echo $studentData['student_id']; ?>" method="post">
                  <div class="form-group">
                      <label for="student_name">Student Full Name</label>
                      <input type="text" class="form-control" name="student_name" placeholder="FirstName MiddleName LastName" value="<?php  echo !empty($studentData) ? $studentData['student_name']: '';?>">
                  </div>
                  <div class="form-group">
                    <label for="arrival_date">Arrival Date</label>
                    <input type="text" class="form-control" name="arrival_date" placeholder="Arrival Date in USA" value="<?php  echo !empty($studentData) ? $studentData['arrival_date']: ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="local_address">Local Address</label>
                    <input type="text" class="form-control" name="local_address" placeholder="Address in USA" value="<?php  echo !empty($studentData) ? $studentData['local_address']: ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="foreign_address">Foreign Address</label>
                    <input type="text" class="form-control" name="foreign_address" placeholder="Address in Home Country" value="<?php  echo !empty($studentData) ? $studentData['foreign_address']: ''; ?>">
                  </div>
                  <div class="form-group">
                    <label for="contact_no">Contact No</label>
                    <input type="text" class="form-control" name="contact_no" placeholder="Contact Number" value="<?php  echo !empty($studentData) ? $studentData['contact_no']: ''; ?>">
                  </div>
                  <button type="submit" class="btn btn-primary mr-2" value="submit">Submit</button>
                  <!-- <button class="btn btn-light">Cancel</button> -->
              </form>
          </div>
      </div>
  </div>
</div>