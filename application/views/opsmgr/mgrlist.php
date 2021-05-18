<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      	<div class="card">
        	<div class="card-body">
          		<h4 class="card-title">
                Opration Manager List 
                <a href="<?php echo base_url();?>index.php/diningservicemgmt/addopsmgr" >
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
                      			<th>Email</th>
                      			<th>Contact</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<?php
                    			foreach($Mgrs as $s){?>
                    				<tr>
                              <td>
                                <a href="<?php echo base_url();?>index.php/diningservicemgmt/editopsmgr/<?php echo $s['ops_mgr_id'];?>" >
                                  <button type="button" class="btn btn btn-outline-primary btn-fw btn-sm">Edit</button>
                                </a>
                                <a href="<?php echo base_url();?>index.php/diningservicemgmt/deleteopsmgr/<?php echo $s['ops_mgr_id'];?>" onclick="return confirm('Are you sure about the deletion?')">
                                  <button type="button" class="btn btn-outline-danger btn-fw btn-sm">Delete</button>
                                </a>
                              </td>
                    					<td><?php echo $s['ops_mgr_id']; ?></td>
                    					<td><?php echo $s['name']; ?></td>
                    					<td><?php echo $s['email']; ?></td>
                    					<td><?php echo $s['contact_no']; ?></td>
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