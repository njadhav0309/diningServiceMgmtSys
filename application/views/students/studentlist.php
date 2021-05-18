<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      	<div class="card">
        	<div class="card-body">
          		<h4 class="card-title">
                Student List 
                <a href="<?php echo base_url();?>index.php/diningservicemgmt/addstudent" >
                  <button type="button" class="btn btn-dark btn-sm" style="float:right;">Add</button>
                </a>
              </h4>
              	<div class="table-responsive">
                	<table class="table">
                  		<thead>
                    		<tr>
                            <th>Actions</th>
                      			<th>Student id</th>
                      			<th>Student name</th>
                      			<th>Arrival Date</th>
                      			<th>Local Address</th>
                      			<th>Contact No</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<?php
                    			foreach($students as $s){?>
                    				<tr>
                              <td>
                                <?php
                                  if(empty($s['student_emp_id'])){
                                ?>
                                  <a href="<?php echo base_url();?>index.php/diningservicemgmt/hirestudent/<?php echo $s['student_id'];?>" >
                                    <button type="button" class="btn btn btn-outline-success btn-fw btn-sm">Hire</button>
                                  </a>
                                <?php } else {?>
                                  <span class="btn-outline-success"><u><b>Hired</b></u></span>
                                <?php } ?>
                                <a href="<?php echo base_url();?>index.php/diningservicemgmt/editstudent/<?php echo $s['student_id'];?>" >
                                  <button type="button" class="btn btn btn-outline-primary btn-fw btn-sm">Edit</button>
                                </a>
                                <a href="<?php echo base_url();?>index.php/diningservicemgmt/deletestudent/<?php echo $s['student_id'];?>" onclick="return confirm('Are you sure about the deletion?')">
                                  <button type="button" class="btn btn-outline-danger btn-fw btn-sm">Delete</button>
                                </a>
                              </td>
                    					<td><?php echo $s['student_id']; ?></td>
                    					<td><?php echo $s['student_name']; ?></td>
                    					<td><?php echo $s['arrival_date']; ?></td>
                    					<td><?php echo $s['local_address']; ?></td>
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