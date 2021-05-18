<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        	<div class="card-body">
              <h4 class="card-title">Adding staff in <u><?php echo $duData['DU_name']; ?></u></h4>
              <form class="forms-sample" action="<?php echo base_url();?>index.php/diningservicemgmt/addstaff/<?php echo $duData['DU_id']; ?>" method="post">
                  <div class="form-group">
                      <label for="DU_name">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Insert Name">
                  </div>
                  <div class="form-group">
                      <label for="DU_name">Department</label>
                      <!-- <input type="text" class="form-control" name="name" placeholder="Insert Name"> -->
                       <select class="form-control" name="DU_dept_id">
                        <?php
                          foreach ($departments as $d) {?>
                            <option value="<?php echo $d['DU_dept_id']; ?>"><?php echo $d['name']; ?> </option>
                        <?php  }
                        ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" name="position" placeholder="Position">
                  </div>
                  <div class="form-group">
                    <label for="street">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="city">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter">
                  </div>
                  <div class="form-group">
                    <label for="contact">Contact No</label>
                    <input type="text" class="form-control" name="contact_no" placeholder="Enter">
                  </div>
                  <button type="submit" class="btn btn-primary mr-2" value="submit">Submit</button>
                  <!-- <button class="btn btn-light">Cancel</button> -->
              </form>
          </div>
      </div>
  </div>
</div>