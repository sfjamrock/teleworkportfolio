                	<div class="other_shadetabs">
                        <ul id="othertabs">
                            <li><a href="#" rel="details1" class="selected">Location</a></li>
                            <li class="nospace"><a href="#" rel="details2">Employees</a></li>
                        </ul>
                    </div>
                    <div id="details1" class="tabcontent"> <?php echo $this->load->view('timesheet_location'); ?></div>
                    <div id="details2" class="tabcontent"> <?php echo $this->load->view('timesheet_employee'); ?> </div>
                    <div class="submit_button_holder"><a href="#">Submit</a></div>
