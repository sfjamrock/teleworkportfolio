     <div class="table-responsive">
            <table class="table table-striped">
              <thead>
					<tr>
						<th colspan="11" style="text-align:center" >  
							<form name="input1" action="<?php $PHP_SELF ?>" method="post"><button type="submit" class="btn btn-sm btn-default" name="week" value="
							<?php $date = new DateTime($dates[0]); $date->sub(new DateInterval('P2D')); echo $date->format('d-m-Y'); ?>" > last week</button>
							<?php echo date('F-d-Y', strtotime($dates[0])) ?> - <?php echo date('F-d-Y', strtotime($dates[6])) ?>							
							<form name="input3" action="<?php $PHP_SELF ?>" method="post"><button type="submit" class="btn btn-sm btn-default" name="week" value="
							<?php $date = new DateTime($dates[6]); $date->add(new DateInterval('P2D')); echo $date->format('d-m-Y'); ?>" > next week</button></form>
						</th>
					</tr>
					<tr>
						<th colspan="2" style="text-align:center"><?php echo date('m-d', strtotime($dates[0])) ?> - <?php echo date('m-d', strtotime($dates[6])) ?></th>
						<th>Sun <?php echo date('m-d', strtotime($dates[0])) ?></th>
						<th>Mon <?php echo date('m-d', strtotime($dates[1])) ?></th>
						<th>Tue <?php echo date('m-d', strtotime($dates[2])) ?></th>
						<th>Wed <?php echo date('m-d', strtotime($dates[3])) ?></th>
						<th>Thur<?php echo date('m-d', strtotime($dates[4])) ?></th>
						<th>Fri <?php echo date('m-d', strtotime($dates[5])) ?></th>
						<th>Sat <?php echo date('m-d', strtotime($dates[6])) ?></th>
						<th>LOCATIONS</th>
						<th>SCHEDULE</th>
					</tr>
              <thead>
 			  <tbody>
				<?php foreach($schedule_lookup as $row2): ?>
					<form name="input2" action="company/schedule/schedule_create" method="post">
					<input type="hidden" name="company" value="<?php echo $this->uri->segment(1) ?>">
					<input type="hidden" name="week" value="<?php $date = new DateTime($dates[6]); echo $date->format('d-m-Y'); ?>">

					<tr>
						<td rowspan="2" ><?php echo $row2->firstname; ?> <?php echo $row2->lastname; ?></td>
						<td> Start Time:</td>
						<td><input type="time" name="start_0" value="<?php echo date('h:i:s', strtotime($dates[0])) ?>"></td>
						<td><input type="time" name="start_1" value="<?php echo date('h:i:s', strtotime($dates[1])) ?>"></td>
						<td><input type="time" name="start_2" value="<?php echo date('h:i:s', strtotime($dates[2])) ?>"></td>
						<td><input type="time" name="start_3" value="<?php echo date('h:i:s', strtotime($dates[3])) ?>"></td>
						<td><input type="time" name="start_4" value="<?php echo date('h:i:s', strtotime($dates[4])) ?>"></td>
						<td><input type="time" name="start_5" value="<?php echo date('h:i:s', strtotime($dates[5])) ?>"></td>
						<td><input type="time" name="start_6" value="<?php echo date('h:i:s', strtotime($dates[6])) ?>"></td>
						<td rowspan="2">
							<select name="location">
								<?php foreach($location_lookup as $row): ?>
							  		<option value="<?php echo $row->location_id; ?>"><?php echo $row->name; ?> - <?php echo $row->address; ?></option> 
								<?php endforeach; ?>
							</select>
						</td>
						<td rowspan="2">
							<button  class="btn btn-success" type="submit"  name="user_id" value="<?php echo  $row2->account_id?>">SCHEDULE</button>
						</td>
					</tr>
					<tr>
						<td >End: Time</td>
						<td><input type="time" name="end_0" value="<?php echo date('h:i:s', strtotime($dates[0])) ?>"></td>
						<td><input type="time" name="end_1" value="<?php echo date('h:i:s', strtotime($dates[1])) ?>"></td>
						<td><input type="time" name="end_2" value="<?php echo date('h:i:s', strtotime($dates[2])) ?>"></td>
						<td><input type="time" name="end_3" value="<?php echo date('h:i:s', strtotime($dates[3])) ?>"></td>
						<td><input type="time" name="end_4" value="<?php echo date('h:i:s', strtotime($dates[4])) ?>"></td>
						<td><input type="time" name="end_5" value="<?php echo date('h:i:s', strtotime($dates[5])) ?>"></td>
						<td><input type="time" name="end_6" value="<?php echo date('h:i:s', strtotime($dates[6])) ?>"></td>
					</tr>
				</form>
			<?php endforeach; ?>
 			<tbody>				
		</table>
</div>     
       