                	<div class="other_shadetabs">
                        <ul id="othertabs">
                            <li><a href="#" rel="details1" class="selected">Current Week Schedule</a></li>
                            <li class="nospace"><a href="#" rel="details2">Create New Schedule</a></li>
                        </ul>
                    </div>
                    <div id="details1" class="tabcontent"> <?php echo $this->load->view('schedule_view'); ?></div>
                    <div id="details2" class="tabcontent"> <?php echo $this->load->view('schedule_create'); ?> </div>
                    <div class="submit_button_holder"><a href="#">Submit</a></div>
