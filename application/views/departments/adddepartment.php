<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        	<div class="card-body">
          		<h4 class="card-title">Department Form</h4>
              <form class="forms-sample" action="<?php echo base_url();?>index.php/diningservicemgmt/adddepartment" method="post">
                  <div class="form-group">
                      <label for="dept_name">Department Name</label>
                      <input type="text" class="form-control" name="dept_name" placeholder="Insert Name">
                  </div>
                  <div class="form-group">
                    <label for="dept_rank">Department Rank</label>
                    <input type="text" class="form-control" name="dept_rank" placeholder="Rank in USA">
                  </div>
                  <div class="form-group">
                    <label for="head_of_dept">Head Of Department</label>
                    <input type="text" class="form-control" name="head_of_dept" placeholder="Name of Head Of Department">
                  </div>
                  <button type="submit" class="btn btn-primary mr-2" value="submit">Submit</button>
                  <!-- <button class="btn btn-light">Cancel</button> -->
              </form>
          </div>
      </div>
  </div>
</div>