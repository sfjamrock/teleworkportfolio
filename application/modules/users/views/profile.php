<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Profile </title>
		<base href="<?php echo base_url(); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="description" content="Telework Portfolio is a online base platform that aims to facilitating data drive conversation about telework between employees and managers" />
        <meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
        <meta name="author" content="Telework Portfolio" />
        <link rel="shortcut icon" href="resource/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="resource/css/style.css" />
        <script src="resource/js/jquery-1.7.2.min.js"></script>
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
		
		}
	});
	return false;	
	});
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$("form#follow").submit(function (){

	$.ajax({
		type: "POST",
		url:"<?php echo site_url('users/profile/follow'); ?>",
		data:{ 
				loguser: <?php echo $this->session->userdata('account_id')?>,
				pageuser: "<?php echo $this->uri->segment(2)?>"
		},
		success: function(){
			alert('finish');
		}
	});
	return false;	
	});
});
</script>

    </head>
    <body>

<body>
<div id="main">
    <?php echo $this->load->view('header'); ?>
    	   
    <div class="details_holder">
    	<div class="innerpage_content">
        	<div class="employee_dashboard_box">
            	<div class="main_img"><a href="<?php echo base_url("profile");?>/<?php echo $account->username?>">
					<?php if (strpos($account_details->picture, "http://") === 0) :?>
					<img src="<?php echo $account_details->picture; ?>" width="75" height="75"alt="" />
					<?php elseif (isset($account_details->picture)) : ?>
					<img src="resource/user/profile/<?php echo $account_details->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
					<?php endif; ?>
									 </a></div>
                <div class="text_holder">
                	<ul>
                    	<li class="title"><?php echo $account_details->firstname ?> <?php echo $account_details->lastname ?></li>
                    	<li class="text"><?php echo $account_details->city ?>, <?php echo $account_details->state ?></li>
                       	<?php if( $employer ) :?>
							<li class="text">Employer: <a href="<?php echo base_url("");?><?php echo $employer->cusername?>"><?php echo $employer->name?></a></li>
						<?php endif; ?>
                    </ul>
                    <div class="textbox"><form id="submit_wall"><input type="text"  id="message_wall" size="35" placeholder="Post"/>
                    <button type="submit">Post</button></form></div>
                </div>
                <div class="member_image">
<?php if ($this->session->userdata('account_id')!= $account->id) : ?>
<form id="follow"><input type="image"  class="button" id="follow"src="resource/images/follow.png" alt="" /></form>        <?php endif; ?></div>
            </div>

<?php if ($this->session->flashdata('error')  != '');
echo $this->session->flashdata('error');
?>
  <!--          <div class="eployee_profile_content">
            	<ul>
                	<li><a href="<?php echo base_url("badges");?>/<?php echo $this->uri->segment(2);?>">
						<img src="resource/badges/Alpha.png" alt="" weight="75" height="75"/></a></li>
                    <li><a href="<?php echo base_url("badges");?>/<?php echo $this->uri->segment(2);?>">
						<img src="resource/badges/Beta.png" alt="" weight="75" height="75" /></a></li>                </ul>
            </div>-->
            <div class="chart_box bg_none">

                <?php $this->load->view('analytics');?>
                                <div class="text3"><?php if (empty($eligible_tracker->job_title)) : ?>
Tester
									 <?php else : ?>
<?php echo $eligible_tracker->job_title ?>
					                 <?php endif; ?></div>
            </div>
<!--   Start of Update Wall Script -->
		<?php foreach($wall_dashboard as $row): ?>

            <div class="employee_dashboard_box new_border">
            	<div class="main_img"><a href="<?php echo base_url("users/profile/lookup");?>/<?php echo $row->username;?>">
					<?php if (strpos($row->picture, "http://") === 0) :?>
					<img src="<?php echo $row->picture; ?>" width="75" height="75"alt="" />
					<?php elseif (isset($row->picture)) : ?>
					<img src="resource/user/profile/<?php echo $row->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" /> 
					<?php else : ?>
					<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />
					<?php endif; ?>
			    </a></div>
                <div class="profile_text">
                    <div class="text2"><?php echo $row->firstname; ?> <?php echo $row->lastname; ?></div>
                    <div class="text2"><?php echo $row->message; ?></div>
                    <div class="text2"><a href="#">Like</a> | <a href="#">Share</a> | <a href="#"> <?php echo $row->posted_on; ?> days</a></div>
                </div>
            </div>
            <?php endforeach; ?>
    <!--   End of Update Wall Script -->
   
        </div>
<?php echo $this->load->view('sidebar'); ?>
    </div>

   <?php echo $this->load->view('footer'); ?>

    </body>
</html>