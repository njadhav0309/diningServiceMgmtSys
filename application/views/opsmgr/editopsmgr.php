<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Dining Unit Form</h4>
              <form class="forms-sample" action="<?php echo base_url();?>index.php/diningservicemgmt/editopsmgr/<?php echo $mgrData['ops_mgr_id']; ?>"  method="post">
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Insert Name" value="<?php  echo !empty($mgrData) ? $mgrData['name']: '';?>">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php  echo !empty($mgrData) ? $mgrData['email']: '';?>">
                  </div>
                  <div class="form-group">
                    <label for="contact_no">Contact No</label>
                    <input type="text" class="form-control" name="contact_no" placeholder="Enter" value="<?php  echo !empty($mgrData) ? $mgrData['contact_no']: '';?>">
                  </div>
                  <button type="submit" class="btn btn-primary mr-2" value="submit">Submit</button>
                  <!-- <button class="btn btn-light">Cancel</button> -->
              </form>
          </div>
      </div>
  </div>
</div>