<?php date_default_timezone_set('America/New_York');?>     

<div class="main_time_periods">
                            <div class="title"></div>
                            <div class="text_holder"></div>
						
<!--                        <div class="datewise_details"> -->
                           <!-- <div class="table_header">
                                <div class="text1">&nbsp;</div>
                                <div class="text2">Sun 19</div>
                                <div class="text2">Mon 20</div>
                                <div class="text2">Tue 21</div>
                                <div class="text2">Wed 22</div>
                                <div class="text2">Thur 23</div>
                                <div class="text2">Fri 24</div>
                                <div class="text3">Sat 25</div>
                            </div>
                            <div class="table_row">
                                <div class="username">Location 1</div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder nospace">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                            </div>
                            <div class="table_row">
                                <div class="username">Location 2</div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                                <div class="text_holder nospace">
                                    <div class="start_time">Start time</div>
                                    <div class="end_time">End time</div>
                                </div>
                            </div>
                        -->
<!--// Sample code for tables						-->
<table border="1" width="100%">
	<?php foreach($location_lookup as $row): ?>
	<tr>
		
		<td><?php echo $row->name; ?>&nbsp; <?php echo $row->address; ?></td>
		<td align="center"><button type="button">Delete?</button></td></tr>
	<?php endforeach; ?>
	<tr>
		<td align="center" colspan="2">
		<form>
		<button type="button" class="btn-primary" onclick="submit()">Add Location</<button>
		</td>
		</form>
		</tr>
</table>	
				
                        </div>
						
						
<!--<tr>
		<td>
		<select name="jobsite">
<?php foreach($location_lookup as $row2): ?>
<option><?php echo $row2->name; ?>&nbsp; <?php echo $row2->address; ?></option>			
							
							</select><?php endforeach; ?>		</td></tr>	-->						