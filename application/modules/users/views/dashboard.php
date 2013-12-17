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
				pageuser: "<?php echo $this->uri->segment(2,$account->username)?>"
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
            <div class="btn_holder"><a href="#"><img src="resource/images/Check-In.png" alt="Telework Savings check in" width="80"></a></div>
        </div>
        <br clear="all" /><br />
        <div class="main_tabholder">
            <div class="new_shadetabs">
                <ul id="countrytabs">
                    <li><a href="#" rel="country1" class="selected">Open Tickets</a></li>
                    <li><a href="#" rel="country2">Closed Tickets</a></li>
                    <li><a href="#" rel="country3">Stats</a></li>
                </ul>
            </div>
            <div class="new_tab_content">
            	<div class="tab_table_header">
                	<div class="text1">Tid</div>
                    <div class="text2">Subject</div>
                    <div class="text3">Status</div>
                    <div class="text3">Issued</div>
                    <div class="text3">Requester</div>
                    <div class="text3">Priority</div>
                    <div class="text4">Category</div>
                </div>
                <div id="country1" class="tabcontent">
                
                <?php if ($task == NULL) 
					echo "hello world";
				?>   
                <?php foreach($task as $row): ?>
                    <h2 class="acc_trigger">
                    	<a href="#">
							<div class="text1">12</div>
                            <div class="text2"><?php echo $row->subject; ?></div>
                            <div class="text3"><?php if ($row->status == 0) echo "In Progress"; ?></div>
                            <div class="text3"><?php echo date("Y-m-d",strtotime($row->assigned_date)); ?></div>
                            <div class="text3"><?php echo $row->from_email; ?></div>
                            <div class="text3"><?php if ($row->priority == 0) echo "Normal";?></div>
                            <div class="text4"><?php if ($row->category == 0) echo "Default"; ?></div>                        </a>
                    </h2>
                    <div class="acc_container">
                    	<div class="text_holder"><h3><?php echo $row->from_email; ?> <span><?php echo date("Y-m-d",strtotime($row->assigned_date)); ?></span></h3><iframe srcdoc="<?php echo htmlspecialchars($row->email_body); ?>" width="100%"  frameborder="0"></iframe></div>


                        <div class="text_holder"><strong>Total Time Spent:1hr</strong> <a href="#"><img src="resource/images/close-ticket.png" alt="" /></a></div>
                    </div>
 			<?php endforeach; ?>
                 
                </div>
                <div id="country2" class="tabcontent"><strong>Closed Tickets - Content</strong></div>
                <div id="country3" class="tabcontent"><strong>Stats - Content</strong></div>
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


