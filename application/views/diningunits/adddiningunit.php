<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        	<div class="card-body">
          		<h4 class="card-title">Dining Unit Form</h4>
              <form class="forms-sample" action="<?php echo base_url();?>index.php/diningservicemgmt/adddiningunit" method="post">
                  <div class="form-group">
                      <label for="DU_name">Name</label>
                      <input type="text" class="form-control" name="DU_name" placeholder="Insert Name">
                  </div>
                  <div class="form-group">
                    <label for="director_id">Director</label>
                    <input type="text" class="form-control" name="director_id" placeholder="Director id">
                  </div>
                  <div class="form-group">
                    <label for="street">Street</label>
                    <input type="text" class="form-control" name="street" placeholder="Enter">
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" placeholder="Enter">
                  </div>
                  <div class="form-group">
                    <label for="zipcode">Zip code</label>
                    <input type="text" class="form-control" name="zipcode" placeholder="Enter">
                  </div>
                  <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" name="contact" placeholder="Enter">
                  </div>
                  <button type="submit" class="btn btn-primary mr-2" value="submit">Submit</button>
                  <!-- <button class="btn btn-light">Cancel</button> -->
              </form>
          </div>
      </div>
  </div>
</div>