 

                     	<div class="main_time_periods">
                    	<div class="title">Time Periods</div>
                        <div class="text_holder"><select name="jobsiteid">
												  <option value="1">0347 - Ashley Stewart - 7001 Martin Luther King Ave, Landover Md,20785</option>
												  <option value="2">0326 - Forever 21 - 2401 Liberty Heights Ave, Baltimore Md, 21215</option>
												  <option value="3">1347 - TJ Maxx - 3500 East West Highway, Hyattsville Md, 20782</option>
												  <option value="4">11200 - Rite Aid - 3250 Superior Lane, Bowie Md, 20715</option>
												  <option value="5">Bowie State University - 14000 Jericho Park Rd</option>
												  <option value="6">Lane Bryant - Baltimore, Md, 21228</option>
												  <option value="7">1200 - Marshalls - 600 East Pratt Street, Baltimore MD, 21202</option>
												  <option value="8">3813 - Rite Aid - 9530 Crain Highway, Upper Marlboro Md, 20772</option>
												</select>
												</div>
                    </div>
                    <div class="datewise_details">
                    	<div class="table_header">
                        	<div class="text1">&nbsp;</div>
                            <div class="text2">Sun 19</div>
                            <div class="text2">Mon 20</div>
                            <div class="text2">Tue 21</div>
                            <div class="text2">Wed 22</div>
                            <div class="text2">Thur 23</div>
                            <div class="text2">Fri 24</div>
                            <div class="text2">Sat 25</div>
                        </div>

                        <div class="table_row">
							<?php foreach($enroll as $row2): ?>	

                        	<div class="username"><?php echo $row2->firstname?> <?php echo $row2->lastname?></div>
								

                            <div class="text_holder">
                            	<div class="start_time"><input type="text" name="start_time" value="" size="8"></div>
                                <div class="end_time"><input type="text " name="end_time" value="" size="8"></div>
                            </div>
                            <div class="text_holder">
                            	<div class="start_time"><input type="text" name="start_time" value="" size="8"></div>
                                <div class="end_time"><input type="text " name="end_time" value="" size="8"></div>
                            </div>
                            <div class="text_holder">
                            	<div class="start_time"><input type="text" name="start_time" value="" size="8"></div>
                                <div class="end_time"><input type="text " name="end_time" value="" size="8"></div>
                            </div>
                            <div class="text_holder">
                            	<div class="start_time"><input type="text" name="start_time" value="" size="8"></div>
                                <div class="end_time"><input type="text " name="end_time" value="" size="8"></div>
                            </div>
                            <div class="text_holder">
                            	<div class="start_time"><input type="text" name="start_time" value="" size="8"></div>
                                <div class="end_time"><input type="text " name="end_time" value="" size="8"></div>
                            </div>
                            <div class="text_holder">
                            	<div class="start_time"><input type="text" name="start_time" value="" size="8"></div>
                                <div class="end_time"><input type="text " name="end_time" value="" size="8"></div>
                            </div>
                            <div class="text_holder nospace">
                            	<div class="start_time"><input type="text" name="start_time" value="" size="8"></div>
                                <div class="end_time"><input type="text " name="end_time" value="" size="8"></div>
                            </div>                    			<?php endforeach; ?>
                        </div>
                    </div>
                    <div class="submit_button_holder"><a href="#">Submit</a></div>