<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      	<div class="card">
        	<div class="card-body">
          		<h4 class="card-title"><?php echo $heading?></h4>
              	<div class="table-responsive">
                	<table class="table">
                  		<thead>
                    		<tr>
                            <th>DiningUnit Name</th>
                            <th>DU zipcode</th>
                            <th>DU Day</th>
                            <th>DU Start</th>
                            <th>DU End</th>
                            <th>Student Id</th>
                            <th>Student Name</th>
                            <th>Student Day</th>
                            <th>Student Start</th>
                            <th>Student End</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<?php
                          if(!empty($schedule_matches)){
                    			foreach($schedule_matches as $s){?>
                    				<tr>
                              <td><?php echo $s['DU_name']; ?></td>
                              <td><?php echo $s['zipcode']; ?></td>
                              <td><?php echo $s['day']; ?></td>
                              <td><?php echo $s['start_time']; ?></td>
                              <td><?php echo $s['end_time']; ?></td>
                              <td><?php echo $s['student_id']; ?></td>
                              <td><?php echo $s['student_name']; ?></td>
                              <td><?php echo $s['stu_day']; ?></td>
                              <td><?php echo $s['student_startTime']; ?></td>
                              <td><?php echo $s['student_endTime']; ?></td>
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