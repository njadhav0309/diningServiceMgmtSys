<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      	<div class="card">
        	<div class="card-body">
          		<h4 class="card-title"><?php echo $heading?></h4>
              	<div class="table-responsive">
                	<table class="table">
                  		<thead>
                    		<tr>
                      			<th>Student Id</th>
                      			<th>Student Name</th>
                            <th>Contact No</th>
                      			<th>Working Hours(till Date)</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<?php
                          if(!empty($student_working_hours_gt_20)){
                    			foreach($student_working_hours_gt_20 as $s){?>
                    				<tr>
                    					<td><?php echo $s['student_id']; ?></td>
                    					<td><?php echo $s['student_name']; ?></td>
                              <td><?php echo $s['contact_no']; ?></td>
                    					<td><?php echo $s['total_working_hours']; ?></td>
                    				</tr>
                    		<?php	
                    			}
                          } else{
                            echo "<tr><td>No Records!</td></tr>";
                          }
                    		?>
                  		</tbody>
                	</table>
                </div>
            </div>
        </div>
    </div>
</div>