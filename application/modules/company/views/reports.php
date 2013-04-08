<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Telework Analytics</title>
<base href="<?php echo base_url(); ?>" />
<link href="resource/css/style.css" rel="stylesheet" type="text/css" />
<link href="resource/css/tabcontent.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="resource/js/tabcontent.js"></script>

</head><body>
<div id="main">
    <?php echo $this->load->view('header'); ?>
    <div class="details_holder">
    	<div class="innerpage_content">
        	<div class="main_box_container">
            	<div class="img_holder"><a href="#"><img src="resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">
                	<ul>
                    	<li class="text1">Employee:</li>
                    	<li class="text2">
                        	<div class="name">Employee Name</div>
                            <div class="btn_holder"><a href="#"><img src="resource/images/subscription-status.png" alt="" /></a> </div>
                        </li>
                        <li class="text1">Location:</li>
                        <li class="text2">Location</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="innerpage_sidebar">
            <div class="btn_holder"><a href="#"><img src="resource/images/followers.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"><img src="resource/images/following.png" alt="" /></a></div>
        </div>
        <div class="main_tabholder">
            <div class="shadetabs">
                <ul id="countrytabs">
                    <li><a href="#" rel="country1" class="selected">Leaders</a></li>
                    <li><a href="#" rel="country2">Savings</a></li>
                    <li><a href="#" rel="country3">Equipment</a></li>
                    <li><a href="#" rel="country4">Analytics</a></li>
                    <li><a href="#" rel="country5">Hotelling</a></li>
                    <li><a href="#" rel="country6">Teleworker</a></li>
                </ul>
            </div>
            <div class="tab_content none">
                <div id="country1" class="tabcontent">
                	<h1 class="heading">Active Teleworkers</h1>
                	<div class="leader_container">
                    	<div class="member_details">
                        	<div class="member_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="member_text">Employee: <br /><br />Location:</div>
                        </div>
                        <div class="member_details">
                        	<div class="member_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="member_text">Employee: <br /><br />Location:</div>
                        </div>
                        <div class="member_details">
                        	<div class="member_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="member_text">Employee: <br /><br />Location:</div>
                        </div>
                        <div class="member_details">
                        	<div class="member_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="member_text">Employee: <br /><br />Location:</div>
                        </div>
                        <div class="member_details">
                        	<div class="member_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="member_text">Employee: <br /><br />Location:</div>
                        </div>
                    </div>
                    <div class="leader_map"><a href="#"><img src="resource/images/map.png" alt="" /></a></div>
                    <div class="leader_details">
                    	<div class="table_header">
                        	<div class="text1">Leader Board</div>
                        	<div class="text2"># of Check-In for the last 60 days</div>
                        </div>
                        <div class="table_row">
                        	<div class="text1">#1</div>
                        	<div class="text2"><a href="#"><img src="resource/images/small_thumb.png" alt="" /></a></div>
                            <div class="text3">User Name</div>
                            <div class="text4">24</div>
                        </div>
                        <div class="table_row">
                        	<div class="text1">#1</div>
                        	<div class="text2"><a href="#"><img src="resource/images/small_thumb.png" alt="" /></a></div>
                            <div class="text3">User Name</div>
                            <div class="text4">24</div>
                        </div>
                        <div class="table_row">
                        	<div class="text1">#1</div>
                        	<div class="text2"><a href="#"><img src="resource/images/small_thumb.png" alt="" /></a></div>
                            <div class="text3">User Name</div>
                            <div class="text4">24</div>
                        </div>
                    </div>
                </div>
                <div id="country2" class="tabcontent">
                	<h1 class="heading">Company Saving</h1>
                    <div class="savings_container">
                    	<ul>
                        	<li>
                            	<div class="text1"><a href="#">Real Estate</a></div>
                                <div class="text2">25</div>
                            </li>
                            <li>
                            	<div class="text1"><a href="#">Productivity</a></div>
                                <div class="text2">25</div>
                            </li>
                            <li>
                            	<div class="text1"><a href="#">Turnover</a></div>
                                <div class="text2">25</div>
                            </li>
                            <li>
                            	<div class="text1"><a href="#">Healthcare</a></div>
                                <div class="text2">25</div>
                            </li>
                            <br clear="all" />
                            <li>
                            	<div class="text1"><a href="#">Unscheduled<br />Absences</a></div>
                                <div class="text2">25</div>
                            </li>
                            <li>
                            	<div class="text1"><a href="#">Office Building<br />Electricity</a></div>
                                <div class="text2">25</div>
                            </li>
                            <li>
                            	<div class="text1"><a href="#">Information<br />Technology</a></div>
                                <div class="text2">25</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="country3" class="tabcontent">
                	<div class="equipment_list">
                    	<div class="member_details">
                        	<div class="member_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="member_text"><strong>Name:</strong> Name goes here...<br /><br /><strong>Detartment:</strong> Department:</div>
                        </div>
                        <div class="list_title">Equipment List</div>
                        <div class="text_holder">
                        	<ul>
                            	<li><strong>Date Issued</strong><br />3/12/2013</li>
                                <li><strong>Item</strong><br />Laptop</li>
                                <li><strong>Description</strong><br />300HDD, 4GB</li>
                                <li><strong>Manufacturer</strong><br />Dell</li>
                                <li><strong>Model</strong><br />latitude d600</li>
                                <li><strong>Model #</strong><br />447753</li>
                                <li><strong>Condition</strong><br />25468</li>
                                <li><strong>Appraised</strong><br />New</li>
                                <li><strong>Value</strong><br />$100</li>
                            </ul>
                        </div>
                    </div>
                    <div class="equipment_list">
                    	<div class="member_details">
                        	<div class="member_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="member_text"><strong>Name:</strong> Name goes here...<br /><br /><strong>Detartment:</strong> Department:</div>
                        </div>
                        <div class="list_title">Equipment List</div>
                        <div class="text_holder">
                        	<ul>
                            	<li><strong>Date Issued</strong><br />3/12/2013</li>
                                <li><strong>Item</strong><br />Laptop</li>
                                <li><strong>Description</strong><br />300HDD, 4GB</li>
                                <li><strong>Manufacturer</strong><br />Dell</li>
                                <li><strong>Model</strong><br />latitude d600</li>
                                <li><strong>Model #</strong><br />447753</li>
                                <li><strong>Condition</strong><br />25468</li>
                                <li><strong>Appraised</strong><br />New</li>
                                <li><strong>Value</strong><br />$100</li>
                            </ul>
                        </div>
                    </div>
                    <div class="equipment_list">
                    	<div class="member_details">
                        	<div class="member_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="member_text"><strong>Name:</strong> Name goes here...<br /><br /><strong>Detartment:</strong> Department:</div>
                        </div>
                        <div class="list_title">Equipment List</div>
                        <div class="text_holder">
                        	<ul>
                            	<li><strong>Date Issued</strong><br />3/12/2013</li>
                                <li><strong>Item</strong><br />Laptop</li>
                                <li><strong>Description</strong><br />300HDD, 4GB</li>
                                <li><strong>Manufacturer</strong><br />Dell</li>
                                <li><strong>Model</strong><br />latitude d600</li>
                                <li><strong>Model #</strong><br />447753</li>
                                <li><strong>Condition</strong><br />25468</li>
                                <li><strong>Appraised</strong><br />New</li>
                                <li><strong>Value</strong><br />$100</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="country4" class="tabcontent">
                	<div class="savings_container">
                    	<ul>
                        	<li>
                            	<div class="text1">Active<br />telworkers</div>
                                <div class="text2">25</div>
                            </li>
                            <li>
                            	<div class="text1">Number of<br />teleworker</div>
                                <div class="text2">25</div>
                            </li>
                            <li>
                            	<div class="text1">Number of<br />Check-ins</div>
                                <div class="text2">25</div>
                            </li>
                        </ul>
                    </div>
                    <div class="analytics_chart">Day<br /><a href="#"><img src="resource/images/chart.png" alt="" /></a></div>
                    <div class="analytics_chart">City<br /><a href="#"><img src="resource/images/chart.png" alt="" /></a></div>
                </div>
                <div id="country5" class="tabcontent">
                	<h1 class="heading">Avaliable Hotelling Space</h1>
                    <div class="hotelling_space">
                    	<ul>
                        	<li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li class="nospace">A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li>A65</li>
                            <li class="nospace">A65</li>
                        </ul>
                    </div>
                    <h1 class="heading">Reserved Users List</h1>
                    <div class="hotel_reserve">
                    	<div class="table_header">
                        	<div class="text1">Assignee</div>
                            <div class="text2">Office Location</div>
                            <div class="text3">Date & Time</div>
                        </div>
                        <div class="table_row">
                        	<div class="photo"><img src="resource/images/small_thumb.png" alt="" /></div>
                        	<div class="reserver1">User name</div>
                            <div class="reserver2">B52</div>
                            <div class="reserver3">Aug 23, 2013 9-6pm</div>
                        </div>
                        <div class="table_row">
                        	<div class="photo"><img src="resource/images/small_thumb.png" alt="" /></div>
                        	<div class="reserver1">User name</div>
                            <div class="reserver2">B52</div>
                            <div class="reserver3">Aug 23, 2013 9-6pm</div>
                        </div>
                        <div class="table_row">
                        	<div class="photo"><img src="resource/images/small_thumb.png" alt="" /></div>
                        	<div class="reserver1">User name</div>
                            <div class="reserver2">B52</div>
                            <div class="reserver3">Aug 23, 2013 9-6pm</div>
                        </div>
                    </div>
                </div>
                <div id="country6" class="tabcontent">
                    <div class="teleworker_container">
                        <h1 class="heading">Request Enrollment</h1>
                        <div class="teleworker_details">
                            <div class="worker_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="worker_text">Username: <br /><br />Department:</div>
                            <div class="worker_btn"><a href="#"><img src="resource/images/accept.png" alt="" /></a> <a href="#"><img src="resource/images/reject.png" alt="" /></a> </div>
                        </div>
                        <div class="teleworker_details">
                            <div class="worker_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="worker_text">Username: <br /><br />Department:</div>
                            <div class="worker_btn"><a href="#"><img src="resource/images/accept.png" alt="" /></a> <a href="#"><img src="resource/images/reject.png" alt="" /></a> </div>
                        </div>
                        <div class="teleworker_details">
                            <div class="worker_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="worker_text">Username: <br /><br />Department:</div>
                            <div class="worker_btn"><a href="#"><img src="resource/images/accept.png" alt="" /></a> <a href="#"><img src="resource/images/reject.png" alt="" /></a> </div>
                        </div>
                    </div>
                    <div class="teleworker_container right">
                        <h1 class="heading">Enrolled Employee</h1>
                        <div class="teleworker_details">
                            <div class="worker_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="worker_text">Username: <br /><br />Department:</div>
                            <div class="worker_btn"><a href="#"><img src="resource/images/accept.png" alt="" /></a> <a href="#"><img src="resource/images/reject.png" alt="" /></a> </div>
                        </div>
                        <div class="teleworker_details">
                            <div class="worker_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="worker_text">Username: <br /><br />Department:</div>
                            <div class="worker_btn"><a href="#"><img src="resource/images/accept.png" alt="" /></a> <a href="#"><img src="resource/images/reject.png" alt="" /></a> </div>
                        </div>
                        <div class="teleworker_details">
                            <div class="worker_img"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="worker_text">Username: <br /><br />Department:</div>
                            <div class="worker_btn"><a href="#"><img src="resource/images/accept.png" alt="" /></a> <a href="#"><img src="resource/images/reject.png" alt="" /></a> </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <?php echo $this->load->view('footer'); ?>
<script type="text/javascript">
	var countries=new ddtabcontent("countrytabs")
	countries.setpersist(true)
	countries.setselectedClassTarget("link") //"link" or "linkparent"
	countries.init()
</script>


</body></html>