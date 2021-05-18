<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      	<div class="card">
        	<div class="card-body">
          		<h4 class="card-title">
                University Department List 
                <a href="<?php echo base_url();?>index.php/diningservicemgmt/adddepartment" >
                  <button type="button" class="btn btn-dark btn-sm" style="float:right;">Add</button>
                </a>
              </h4>
              	<div class="table-responsive">
                	<table class="table">
                  		<thead>
                    		<tr>
                            <th>Actions</th>
                      			<th>Department id</th>
                      			<th>Department name</th>
                      			<th>Department Rank</th>
                      			<th>Head of Department</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<?php
                    			foreach($departments as $s){?>
                    				<tr>
                              <td>
                                <a href="<?php echo base_url();?>index.php/diningservicemgmt/editdepartment/<?php echo $s['dept_id'];?>" >
                                  <button type="button" class="btn btn btn-outline-primary btn-fw btn-sm">Edit</button>
                                </a>
                                <a href="<?php echo base_url();?>index.php/diningservicemgmt/deletedepartment/<?php echo $s['dept_id'];?>" onclick="return confirm('Are you sure about the deletion?')">
                                  <button type="button" class="btn btn-outline-danger btn-fw btn-sm">Delete</button>
                                </a>
                              </td>
                    					<td><?php echo $s['dept_id']; ?></td>
                    					<td><?php echo $s['dept_name']; ?></td>
                    					<td><?php echo $s['dept_rank']; ?></td>
                    					<td><?php echo $s['head_of_dept']; ?></td>
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