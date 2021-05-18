<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      	<div class="card">
        	<div class="card-body">
          		<h4 class="card-title">
                Dining Unit List 
                <a href="<?php echo base_url();?>index.php/diningservicemgmt/adddiningunit" >
                  <button type="button" class="btn btn-dark btn-sm" style="float:right;">Add</button>
                </a>
              </h4>
              	<div class="table-responsive">
                	<table class="table">
                  		<thead>
                    		<tr>
                            <th>Actions</th>
                      			<th>Id</th>
                      			<th>Name</th>
                      			<th>Director</th>
                      			<th>Street</th>
                            <th>City</th>
                            <th>Zip Code</th>
                            <th>Contact</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<?php
                    			foreach($diningunits as $s){?>
                    				<tr>
                              <td>
                                <a href="<?php echo base_url();?>index.php/diningservicemgmt/addstaff/<?php echo $s['DU_id'];?>" >
                                  <button type="button" class="btn btn btn-outline-success btn-fw btn-sm">Add staff</button>
                                </a>
                                <a href="<?php echo base_url();?>index.php/diningservicemgmt/editdiningunit/<?php echo $s['DU_id'];?>" >
                                  <button type="button" class="btn btn btn-outline-primary btn-fw btn-sm">Edit</button>
                                </a>
                                <a href="<?php echo base_url();?>index.php/diningservicemgmt/deletediningunit/<?php echo $s['DU_id'];?>" onclick="return confirm('Are you sure about the deletion?')">
                                  <button type="button" class="btn btn-outline-danger btn-fw btn-sm">Delete</button>
                                </a>
                              </td>
                    					<td><?php echo $s['DU_id']; ?></td>
                    					<td><?php echo $s['DU_name']; ?></td>
                    					<td><?php echo $s['director_id']; ?></td>
                    					<td><?php echo $s['street']; ?></td>
                              <td><?php echo $s['city']; ?></td>
                              <td><?php echo $s['zipcode']; ?></td>
                              <td><?php echo $s['contact']; ?></td>
                    				</tr>
                    		<?php	
                    			}
                    		?>
                  		</tbody>
                	</table>
                </div>
            </div>
        </div>
    </div>
</div>