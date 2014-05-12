<div class="table-responsive">
   <table class="table table-striped">
          <thead>
			<tr>							
				<td colspan="6" style="text-align:center" >  
					<form name="input1" action="<?php $PHP_SELF ?>" method="post"><button type="submit" class="btn btn-sm btn-default" name="week" value="
					<?php $date = new DateTime($dates[0]); $date->sub(new DateInterval('P2D')); echo $date->format('d-m-Y'); ?>" > last week</button>
					<?php echo date('m-d', strtotime($dates[0])) ?> - <?php echo date('m-d', strtotime($dates[6])) ?>							
					<form name="input2" action="<?php $PHP_SELF ?>" method="post"><button type="submit" class="btn btn-sm btn-default" name="week" value="
					<?php $date = new DateTime($dates[6]); $date->add(new DateInterval('P2D')); echo $date->format('d-m-Y'); ?>" > next week</button></form>
				</td>
			 </tr>
             <tr>
                 <th>Date</th>
                 <th>Employee</th>
                 <th>Location</th>
                 <th>Clock-In</th>
                 <th>Clock-Out</th>
                 <th>Total Hours</th>
                 <th colspan="2" >Action</th>
               </tr>
             </thead>
             <tbody>
 				<?php foreach($timesheet1 as $timesheet): ?>
                <tr>
				<form name="update_time" action="company/timesheets/update_time" method="post">
				  <input type="hidden" name="company" value="<?php echo $this->uri->segment(1) ?>">
				  <input type="hidden" name="time_date" value="<?php $date = new DateTime($timesheet->date); echo $date->format('Y-m-d'); ?>">
                  <td><?php echo $timesheet->date?></td>
                  <td ><?php echo $timesheet->firstname?> <?php echo $timesheet->lastname?></td>
                  <td>
						<select name="location">
						  <option value="<?php echo $timesheet->lid; ?>" selected><?php echo $timesheet->location?></option>
							<?php foreach($location_lookup as $row) :?>		
								<?php if($row->location_id != $timesheet->lid) :?>
									<option value="<?php echo $row->location_id; ?>"><?php echo $row->name; ?> - <?php echo $row->address; ?></option>
								<?php endif; ?>					
							<?php endforeach; ?>
							
						</select>
				  </td>
                  <td><input type="time" name="start" value="<?php $startime = new DateTime($timesheet->clock_in); echo $startime->format('H:i:s'); ?>"></input></td>
                  <td>
					  <?php if ($timesheet->clock_out != NULL) : ?>
					  <input type="time" name="end" value="<?php $endime = new DateTime($timesheet->clock_out); echo $endime->format('H:i:s'); ?>"></input>											  <?php endif; ?>
				  </td>
                  <td><?php if (isset($timesheet->clock_out))
							{
							$datetime1 = new DateTime($timesheet->clock_in);
	 						$datetime2 = new DateTime($timesheet->clock_out);
	 						$interval = $datetime1->diff($datetime2);
	 						echo $interval->format('%h:%i:%s'); 
						}?>
				  </td>
                  <td>
				<button class="btn btn-info" type="submit"  name="time_id" value="<?php echo $timesheet->id?>">UPDATE</button>
				</form>
				</td>
                  <td>
					<form name="delete_time" action="company/timesheets/delete_time" method="post">
						<input type="hidden" name="company" value="<?php echo $this->uri->segment(1) ?>">
						<button  class="btn btn-danger" type="submit"  name="time_id" value="<?php echo $timesheet->id?>">DELETE</button>
					</form>
				  </td>
                </tr>
			<?php endforeach; ?>
              </tbody>
            </table>
          </div>  			

