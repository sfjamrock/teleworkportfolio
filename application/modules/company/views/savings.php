<h1 class="heading">Company Saving</h1>
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
                        </ul>
                    </div>