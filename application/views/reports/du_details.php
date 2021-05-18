<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
      	<div class="card">
        	<div class="card-body">
          		<h4 class="card-title"><?php echo $heading?></h4>
              	<div class="table-responsive">
                	<table class="table">
                  		<thead>
                    		<tr>
                            <th>DiningUnit Id</th>
                            <th>DiningUnit Name</th>
                            <th>Director Name</th>
                            <th>Director Email</th>
                            <th>Director Contact No</th>
                            <th>Director Address</th>
                    		</tr>
                  		</thead>
                  		<tbody>
                    		<?php
                          if(!empty($du_details)){
                    			foreach($du_details as $s){?>
                    				<tr>
                              <td><?php echo $s['DU_id']; ?></td>
                              <td><?php echo $s['DU_name']; ?></td>
                              <td><?php echo $s['name']; ?></td>
                              <td><?php echo $s['email']; ?></td>
                              <td><?php echo $s['contact_no']; ?></td>
                              <td><?php echo $s['address']; ?></td>
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