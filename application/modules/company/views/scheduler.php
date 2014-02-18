                	<div class="other_shadetabs">
                        <ul id="othertabs">
                            <li><a href="#" rel="details3" class="selected">Current Week Schedule</a></li>
                            <li class="nospace"><a href="#" rel="details4">Create New Schedule</a></li>
                        </ul>
                    </div>
                    <div id="details3" class="tabcontent"> <?php echo $this->load->view('schedule_view'); ?></div>
                    <div id="details4" class="tabcontent"> <?php echo $this->load->view('schedule_create'); ?> </div>
                    <div class="submit_button_holder"><a href="#">Submit</a></div>
