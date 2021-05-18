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
                            <th>Joining Date</th>
                            <th>Arrival Date</th>
                      			<th>SSN</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<?php
                          if(!empty($student_details_ssn)){
                    			foreach($student_details_ssn as $s){?>
                    				<tr>
                    					<td><?php echo $s['student_id']; ?></td>
                    					<td><?php echo $s['student_name']; ?></td>
                              <td><?php echo $s['contact_no']; ?></td>
                    					<td><?php echo $s['joining_date']; ?></td>
                              <td><?php echo $s['arrival_date']; ?></td>
                              <td><?php echo $s['SSN']; ?></td>
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