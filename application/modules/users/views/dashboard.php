<!DOCTYPE html >
<html >
<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Dashboard -Telework Portfolio</title>
		<base href="<?php echo base_url(); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
        <meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
        <meta name="author" content="Telework Portfolio" />
        <link rel="shortcut icon" href="resource/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="resource/css/style.css" />
		<link rel="stylesheet" type="text/css" href="resource/css/style2.css" />
		<link href="resource/css/tabcontent.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="resource/js/tabcontent.js"></script>
        <script src="resource/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="resource/js/modernizr.custom.04022.js"></script>
<script type="text/javascript" src="resource/js/jquery-latest.js"></script>
<script type="text/javascript">
	$(document).ready(function(){	
	//Set default open/close settings
	$('.acc_container').hide(); //Hide/close all containers
	//  $('.acc_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container
	
	//On Click
	$('.acc_trigger').click(function(){
		if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
			$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all .acc_trigger classes and slide up the immediate next container
			$(this).toggleClass('active').next().slideDown(); //Add .acc_trigger class to clicked trigger and slide down the immediate next container
		}
		return false; //Prevent the browser jump to the link anchor
	});
	
	});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("form#submit_wall").submit(function (){

	$.ajax({
		type: "POST",
		url:"<?php echo site_url('users/dashboard/update_status'); ?>",
		data:{ 
				message_wall: $('#message_wall').attr('value'),
				loguser: <?php echo $this->session->userdata('account_id')?>,
				pageuser: "<?php echo $this->uri->segment(2)?>"

		},
		success: function(){
			window.location.reload();
		}
	});
	return false;	
	});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("form#close-ticket").submit(function (){

	$.ajax({
		type: "POST",
		url:"<?php echo site_url('users/dashboard/close_ticket'); ?>",
		data:{ 
			TID: $('#TID').attr('value'),

		},
		success: function(){
				window.location.reload();
		
		}
	});
	return false;	
	});
});
</script>

    </head>
<body>
<div id="main">
    <?php echo $this->load->view('header'); ?>   
    <div class="details_holder">
    	<div class="tms_mockup_member">
        	<div class="img_holder"><a href="<?php echo base_url("profile");?>/<?php echo $account->username?>">
					<?php if (strpos($account_details->picture, "http://") === 0) :?>
					<img src="<?php echo $account_details->picture; ?>" width="75" height="75"alt="" />
					<?php elseif (isset($account_details->picture)) : ?>
					<img src="resource/user/profile/<?php echo $account_details->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
					<?php endif; ?>
									 </a></div>
            <div class="text_holder"><strong><?php echo $account_details->firstname ?> <?php echo $account_details->lastname ?>
				</strong><br /><br /><?php echo $account_details->city ?>, <?php echo $account_details->state ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;             
           	<?php if( $employer ) :?>
							<a href="<?php echo base_url("");?><?php echo $employer->cusername?>"><?php echo $employer->name?></a>
						<?php endif; ?>
</div>
            <div class="btn_holder">
<?php if ($this->user_model->Check_user_clockin_status($this->session->userdata('account_id')) == 0) :?>
<a href="<?php echo base_url("teleworkwizard/savings");?>"><img src="resource/images/clock-out.png" alt="Telework Savings check in" width="80"></a>

<?php else :?>
<a href="<?php echo base_url("teleworkwizard/savings");?>"><img src="resource/images/clock-in.png" alt="Telework Savings check in" width="80"></a>

<?php endif; ?>
</div>
        </div>
        <br clear="all" /><br />
        <div class="main_tabholder">
            <div class="new_shadetabs">
                <ul id="countrytabs">
                    <li><a href="#" rel="country1" class="selected">Time Sheet</a></li>
                    <li><a href="#" rel="country2">Schedules</a></li>
              
                </ul>
            </div>
            <div class="new_tab_content">
            	
         <!--       <div id="country1" class="tabcontent">

				<div class="tab_table_header">
                	<div class="text1">Tid</div>
                    <div class="text2">Subject</div>
                    <div class="text3">Status</div>
                    <div class="text3">Issued</div>
                    <div class="text3">Requester</div>
                    <div class="text3">Priority</div>
                    <div class="text4">Category</div>
                </div>
                
                <?php if ($task == NULL) 
					echo "hello world";
				?>   
                <?php foreach($task as $row): ?>
                    <h2 class="acc_trigger">
                    	<a href="#">
							<div class="text1"><?php echo $row->TID; ?></div>
                            <div class="text2"><?php echo $row->subject; ?></div>
                            <div class="text3"><?php if ($row->status == 0) echo "Open"; elseif ($row->status == 2) echo "Closed";else echo "In progress" ?></div>
                            <div class="text3"><?php echo date("Y-m-d",strtotime($row->assigned_date)); ?></div>
                            <div class="text3"><?php echo $row->from_email; ?></div>
                            <div class="text3"><?php if ($row->priority == 0) echo "Normal";?></div>
                            <div class="text4"><?php if ($row->category == 0) echo "Default"; ?></div>                        </a>
                    </h2>
                    <div class="acc_container">
			<?php foreach($task2 as $row2): ?>

					<?php if($row->subject == $row2->subject)  :?>
<div class="text_holder"><h3><?php echo $row2->from_email; ?> <span><?php echo date("Y-m-d H:i:s",strtotime($row2->assigned_date)); ?></span></h3><iframe srcdoc="<?php echo htmlspecialchars($row2->email_body); ?>" width="100%"  frameborder="0"></iframe></div>
  
					<?php elseif (strpos($row2->subject, $row->subject)!= false) :?>
<div class="text_holder"><h3><?php echo $row2->from_email; ?> <span><?php echo date("Y-m-d H:i:s",strtotime($row2->assigned_date)); ?></span></h3><iframe srcdoc="<?php echo htmlspecialchars($row2->email_body); ?>" width="100%"  frameborder="0"></iframe></div>
  					
					<?php else : ?>

					
					<?php endif; ?>
					<?php endforeach; ?>


                        <div class="text_holder" style="text-align: center">


<!--<form id="close-ticket" > <input type="text"  id="TID"value="<?php echo $row->TID; ?>" hidden="hidden"/><button type="submit" >Close Ticket <?php echo $row->TID; ?></button></form>
<form name="close-ticket" action="users/dashboard/close_ticket" method="post"> <button type="submit" name="TID"value="<?php echo $row->TID; ?>">Close Ticket <?php echo $row->TID; ?></button></form>


</div>
                    </div>
 			<?php endforeach; ?>
                 
                </div>-->
                <div id="country1" class="tabcontent">
					<div class="tab_table_header">
						<div class="text3">Date</div>
						<div class="text3">Day</div>
						<div class="text2">Location</div>
						<div class="text3">Clock-In</div>
						<div class="text3">Clock-Out</div>
						<div class="text4">Total</div>
					</div>
                <?php if ($timesheet == NULL) 
					echo "hello world";
				?>  
			<?php foreach($timesheet as $timesheet): ?>
                	<h2 class="acc_trigger">
                    	<a href="#">
                            <div class="text3"><?php echo $timesheet->date1?></div>
                            <div class="text3"><?php echo $timesheet->date2?></div>
                            <div class="text2"><?php echo $timesheet->location?></div>
                            <div class="text3"><?php echo $timesheet->clock_in?></div>
                            <div class="text3"><?php echo $timesheet->clock_out?></div>
                            <div class="text4"><?php if ($this->user_model->Check_user_clockin_status($this->session->userdata('account_id')) == 1) echo $timesheet->clock_in->diff($timesheet->clock_out); else echo $timesheet->clock_in->diff(date());?></div>
                        </a>
                    </h2>
                    


 			<?php endforeach; ?>

				</div>
                <div id="country2" class="tabcontent">

	
				<div class="tab_table_header">
					<div class="text3">Week Periods</div>
                    <div class="text3">Sunday</div>
                    <div class="text3">Monday</div>
                    <div class="text3">Tuesday</div>
                    <div class="text3">Wednesday</div>
					<div class="text3">Thursday</div>
					<div class="text3">Friday</div>
                    <div class="text4">Saturday</div>
                </div>
				
				<h2 class="acc_trigger">
                    	<a href="#">
							<div class="text3"></br>12/12/13 - 1/12/14</div>
                            <div class="text3">1200-1730</br>Ashley Steward<!--</br>7001 Martin Luther King Ave Landover Md, 20785--></div>
                            <div class="text3">Monday</div>
                            <div class="text3">Baltimore</div>
                            <div class="text3">10:30am</div>
							<div class="text3">Baltimore</div>
                            <div class="text3">10:30am</div>
                            <div class="text3">10:30pm</div>

                        </a>
                    </h2>
				
				
				
				</div>



                <div id="country4" class="tabcontent"><strong>Stats - Content</strong></div>
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


