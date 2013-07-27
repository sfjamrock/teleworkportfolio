<div class="savings_container">
                    	<ul>
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
                    <div class="analytics_chart"><?php $this->load->view('stats_day');?></div>

                    <div class="analytics_chart"><?php $this->load->view('stats_city');?></div>