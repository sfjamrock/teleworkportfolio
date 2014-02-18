<div class="main_time_periods">
     <div class="title"></div>
     <div class="text_holder"></div>			
		<table border="1" width="100%">
			<?php foreach($location_lookup as $row): ?>
				<tr>				
					<td colspan="2"><?php echo $row->name; ?>&nbsp; <?php echo $row->address; ?></td>
					<td align="center"><button type="button">Delete?</button></td>
				</tr>
			<?php endforeach; ?>
				<tr>
					<td><input type="text" name="location_name"></td>
					<td><input type="text" name="location_address"></td>
					<td align="center" ><form><button type="button" class="btn-primary" onclick="submit()">Add Location</<button></form></td>
				</tr>
		</table>	
</div>
						
			