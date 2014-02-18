                    <div class="analytics_chart"><?php $this->load->view('stats_day');?></div>

                    <div class="analytics_chart"><?php $this->load->view('stats_city');?></div>


<div class="savings_container">
                    	<ul>
                       	<?php if( $saving->real_estate>0 ) :?>
                        	<li>
                            	<div class="text1">Real Estate</div>
                                <div class="text2"><?php echo $saving->real_estate * $count->count?></div>
                            </li>
						<?php endif; ?>
                       	<?php if( $saving->productivity>0 ) :?>
                            <li>
                            	<div class="text1">Productivity</div>
                                <div class="text2"><?php echo $saving->productivity * $count->count?></div>
                            </li>
						<?php endif; ?>
                       	<?php if( $saving->turnover>0 ) :?>
                            <li>
                            	<div class="text1">Turnover</div>
                                <div class="text2"><?php echo $saving->turnover * $count->count?></div>
                            </li>
						<?php endif; ?>
                       	<?php if( $saving->healthcare>0 ) :?>
                            <li>
                            	<div class="text1">Healthcare</div>
                                <div class="text2"><?php echo $saving->healthcare * $count->count?></div>
                            </li>
						<?php endif; ?>
                            
                       	<?php if( $saving->absences>0 ) :?>
                            <li>
                            	<div class="text1">Absences</div>
                                <div class="text2"><?php echo $saving->absences * $count->count?></div>
                            </li>
						<?php endif; ?>
                       	<?php if( $saving->utilities>0 ) :?>
                            <li>
                            	<div class="text1">Utilities</div>
                                <div class="text2"><?php echo $saving->utilities * $count->count?></div>
                            </li>
						<?php endif; ?>
                       	<?php if( $saving->technology>0 ) :?>
                            <li>
                            	<div class="text1">Technology</div>
                                <div class="text2"><?php echo $saving->technology * $count->count?></div>
                            </li>
						<?php endif; ?>
                        	<li>
                            	<div class="text1">Active<br />telworkers</div>
                                <div class="text2"><?php echo $active_count->count?></div>
                            </li>
                            <li>
                            	<div class="text1">Number of<br />teleworker</div>
                                <div class="text2"><?php echo $enroll_count->count?></div>
                            </li>
                            <li>
                            	<div class="text1">Number of<br />Check-ins</div>
                                <div class="text2"><?php echo $count->count?></div>
                            </li>
                        </ul>
                    </div>
