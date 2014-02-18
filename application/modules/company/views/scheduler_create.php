

                     	<div class="main_time_periods">
                    	<div class="title">Time Periods</div>
                        <div class="text_holder">
						<select name="jobsiteid">
							<?php foreach($location_lookup as $row): ?>	 
								  <option value="<?php echo $row->location_id?>"> <?php echo $row->name?>  - <?php echo $row->address?></option>
							<?php endforeach; ?>
						</select>
												</div>
                    </div>
                    <div class="datewise_details">
                    	<div class="table_header">
                        	<div class="text1">&nbsp;</div>
                            <div class="text2" ><?php echo date("M d Y")?></div>
                            <div class="text2">Mon 20</div>
                            <div class="text2">Tue 21</div>
                            <div class="text2">Wed 22</div>
                            <div class="text2">Thur 23</div>
                            <div class="text2">Fri 24</div>
                            <div class="text2">Sat 25</div>
                        </div>

                        <div class="table_row">
							<?php foreach($enroll as $row2): ?>	

                        	<div class="username"><?php echo $row2->firstname?> <?php echo $row2->lastname?> <?php echo $row2->user_id ?></div>
								

                            <div class="text_holder">
                            	<div class="start_time"><input type="time" name="start_time"></div>
                                <div class="end_time"><input type="time" name="end_time" /></div>
                            </div>
                            <div class="text_holder">
                            	<div class="start_time"><input type="time" name="start_time"></div>
                                <div class="end_time"><input type="time" name="end_time" /></div>
                            </div>
                            <div class="text_holder">
                            	<div class="start_time"><input type="time" name="start_time"></div>
                                <div class="end_time"><input type="time" name="end_time" /></div>
                            </div>
                            <div class="text_holder">
                            	<div class="start_time"><input type="time" name="start_time"></div>
                                <div class="end_time"><input type="time" name="end_time" /></div>
                            </div>
                            <div class="text_holder">
                            	<div class="start_time"><input type="time" name="start_time"></div>
                                <div class="end_time"><input type="time" name="end_time"></div>
                            </div>
                            <div class="text_holder">
                            	<div class="start_time"><input type="time" name="start_time"></div>
                                <div class="end_time"><input type="time" name="end_time"></div>
                            </div>
                            <div class="text_holder nospace">
                            	<div class="start_time"><input type="time" name="start_time"></div>
                                <div class="end_time"><input type="time" name="end_time"></div>
                            </div>               			<?php endforeach; ?>
                        </div>
                    </div>
                    <div class="submit_button_holder"><a href="#">Submit</a></div>
<div class="test">
	

</div>