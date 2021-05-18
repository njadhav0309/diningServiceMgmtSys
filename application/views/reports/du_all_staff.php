<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      	<div class="card">
        	<div class="card-body">
          		<h4 class="card-title"><?php echo $heading?></h4>
              	<div class="table-responsive">
                	<table class="table">
                  		<thead>
                    		<tr>
                            <th>Staff Name</th>
                            <th>Staff Position</th>
                            <th>Staff Email</th>
                            <th>Staff Address</th>
                            <th>DiningUnit Name</th>
                            <th>DiningUnit Dept Name</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<?php
                          if(!empty($du_all_staff)){
                    			foreach($du_all_staff as $s){?>
                    				<tr>
                              <td><?php echo $s['staff_name']; ?></td>
                              <td><?php echo $s['position']; ?></td>
                              <td><?php echo $s['email']; ?></td>
                              <td><?php echo $s['address']; ?></td>
                              <td><?php echo $s['DU_name']; ?></td>
                              <td><?php echo $s['DU_dept_name']; ?></td>
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