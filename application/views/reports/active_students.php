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
                      			<th>Local Address</th>
                      			<th>Contact No</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<?php
                    			foreach($activeStudents as $s){?>
                    				<tr>
                    					<td><?php echo $s['student_id']; ?></td>
                    					<td><?php echo $s['student_name']; ?></td>
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