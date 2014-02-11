
<table style="width: 100%; text-align:center; " >
	<tr>
		<td colspan="8" >
		<form name="input" action="<?php $PHP_SELF ?>" method="post">
		<select name="week">
		  <option value="30-12-2013">December 30, 2013 - January 5, 2014</option> 
		  <option value="6-1-2014">January 6, 2014 - January 12, 2014</option>
		  <option value="13-1-2014">January 13, 2014 - January 19, 2014</option> 
		  <option value="20-1-2014">January 20, 2014 - January 26, 2014</option>
		  <option value="27-1-2014">January 27, 2014 - February 2, 2014</option> 
		  <option value="3-2-2014">February 3, 2014 - February 9, 2014</option>
		  <option value="10-2-2014">February 10, 2014 - February 16, 2014</option> 
		  <option value="17-2-2014">February 17, 2014 - February 23, 2014</option>
		</select>
		<input type="submit" value="Update">
		</form>
</td>
	</tr>
<?php foreach($location_lookup as $row): ?>
	<tr>
		<td colspan="8" height="80"><?php echo $row->name; ?> -  <?php echo $row->address; ?></td>
	</tr>
	<tr>
		<td><?php echo date('m-d', strtotime($dates[0])) ?> - <?php echo date('m-d', strtotime($dates[6])) ?></td>
		<td>Sun <?php echo date('m-d', strtotime($dates[0])) ?></td>
		<td>Mon <?php echo date('m-d', strtotime($dates[1])) ?></td>
		<td>Tue <?php echo date('m-d', strtotime($dates[2])) ?></td>
		<td>Wed <?php echo date('m-d', strtotime($dates[3])) ?></td>
		<td>Thur<?php echo date('m-d', strtotime($dates[4])) ?></td>
		<td>Fri <?php echo date('m-d', strtotime($dates[5])) ?></td>
		<td>Sat <?php echo date('m-d', strtotime($dates[6])) ?></td>
	</tr>
		<?php foreach($timesheet_user as $row2): ?>
		   		 <?php if($row->location_id==$row2->location_id) : ?>
	<tr>
		<td rowspan="2"><?php echo $row2->firstname; ?> <?php echo $row2->lastname; ?></td>
<!-- Clock In Timesheet Area Start-->
<td>

	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $starttime = new DateTime($row3->clock_in); ?>
				<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[0]))) echo $starttime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $starttime = new DateTime($row3->clock_in); ?>
				<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[1]))) echo $starttime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>

</td>
<td>	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $starttime = new DateTime($row3->clock_in); ?>
				<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[2]))) echo $starttime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $starttime = new DateTime($row3->clock_in); ?>
				<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[3]))) echo $starttime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $starttime = new DateTime($row3->clock_in); ?>
				<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[4]))) echo $starttime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $starttime = new DateTime($row3->clock_in); ?>
				<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[5]))) echo $starttime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $starttime = new DateTime($row3->clock_in); ?>
				<?php if($starttime->format('Y-m-d') == date('Y-m-d', strtotime($dates[6]))) echo $starttime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>

	</tr>
<!-- Clock In Timesheet Area End-->

<!-- Clock Out Timesheet Area Start-->
	<tr>
<td>
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $endime = new DateTime($row3->clock_out); ?>
				<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[0]))) echo $endime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>	
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $endime = new DateTime($row3->clock_out); ?>
				<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[1]))) echo $endime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>	
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $endime = new DateTime($row3->clock_out); ?>
				<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[2]))) echo $endime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $endime = new DateTime($row3->clock_out); ?>
				<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[3]))) echo $endime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $endime = new DateTime($row3->clock_out); ?>
				<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[4]))) echo $endime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $endime = new DateTime($row3->clock_out); ?>
				<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[5]))) echo $endime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
<td>	
	<?php foreach($timesheet as $row3) : ?>
		<?php if($row2->location_id==$row3->location_id) : ?>
			<?php $endime = new DateTime($row3->clock_out); ?>
				<?php if($endime->format('Y-m-d') == date('Y-m-d', strtotime($dates[6]))) echo $endime->format('h:i:s');?>
	   	<?php else : ?>
		<?php endif; ?>
	<?php endforeach; ?>
</td>
 <!-- Clock In Timesheet Area End-->
							

	</tr>
		<?php else : ?>
		<?php endif; ?>
		<?php endforeach; ?>

<?php endforeach; ?>
	<tr>
		<td colspan="8">&nbsp;</td>
	</tr>
</table>

