<?php date_default_timezone_set('America/New_York');?>     

           	<div class="main_two_tabs">
                        <a href="#">View Schedule</a>
                        <a href="#" class="grey">Create Schedule</a>
                    </div>
                    <div class="main_time_periods">
                    	<div class="title">Time Periods</div>
                        <div class="text_holder">Ashley Steward - 7001 Martin Luther King Ave Landover Md, 20785</div>
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
								<?php foreach($scheduler_user as $row2): ?>
                        	<div class="username"><?php echo $row2->firstname?> <?php echo $row2->lastname?></div>
								
								<?php foreach($scheduler as $row3): ?>
									<?php if($row2->user_id==$row3->user_id) : ?>

                            <div class="text_holder">
                            	<div class="start_time"><?php echo $row3->clock_in?></div>
                                <div class="end_time"><?php echo $row3->clock_out?></div>
<div class="end_time"> <?php if ($this->user_model->Check_user_clockin_status($row3 ->user_id)->status == 1) echo $row3->clock_out - $row3->clock_in; else echo date("H:i:s") - $row3->clock_in;?></div>
                            </div>
						    <?php else : ?>
						  <?php endif; ?>

								<?php endforeach; ?>
                    			<?php endforeach; ?>
                        </div>
                    </div>
                    <div class="submit_button_holder"><a href="#">Submit</a></div>