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

		<script type="text/javascript" src="resource/js/modernizr.custom.04022.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
			<style>
				.content{
					height: auto;
					margin: 0;
				}
				.content div {
					position: relative;
				}
			</style>
	

		<![endif]-->
    </head>
    <body>

<body>
<script>
function reply()
{
	var user='<?php echo @$_GET['user']; ?>';
	if(user=='')
	{
		alert('Please select a sender to send message');
		return false;
	}
	var content=$('#content').val();
	if(content=='')
	{
		alert('Please Enter a message');
		return false;
	}
	$('#submit').click();
	
}

//attach a file
function attach_file()
{
	
	$('#attach_file_area').slideToggle(100);
}
</script>
<style>
.spacer10
{
	height:10px;
}
.message_senders_receivers
{
	max-height:500px;
	overflow-y:scroll;
	width:280px;
}
</style>
<div id="main">
    <?php echo $this->load->view('header'); ?>
 <div class="details_holder">
    	<div class="email_design_edits_navigation"><!--<a href="#">Compose</a> <a href="#">Archives</a>  <select name=""><option>Select</option></select>--> </div>
        <div class="email_design_sidebar">
            <div class="search_holder">
                <div class="textbox"><input name="" type="text" value="Search" /></div>
                <div class="btn_holder"><a href="#"><img src="resource/images/serach-btn1.png" alt="" /></a></div>
            </div>
            <div class="message_senders_receivers">
            <?php if((count($conversations))>0){ ?>
            	<?php $listed=array(); ?>
            	<?php foreach($conversations as $sender){ ?>
                <?php if(!isset($listed[$sender->username])){ $listed[$sender->username]='1';?>
                	
                	<a href="<?php echo base_url().'message?user='.$sender->user_id?>">
                        <div class="email_member_msg">
                            <div class="img_holder"><img src="resource/images/img2.png" alt="" /></div>
                            <div class="text_holder"><?php echo $sender->username ?> <span class="date"><?php echo date('d/m/Y H:i:s',strtotime($sender->date_time)); ?></span><br /><?php if(($sender->is_unread==1)&&($sender->receiver_id==$userid)){echo "<p style='color:green'><b>";}echo $sender->content; if($sender->is_unread==1){echo "</p></b>";} ?></div>
                        </div>
                    </a>
                <?php }?>
            <?php }}?>
        </div>
        </div>
        <div class="email_design_main_content">
        <?php if((count($conversation_by_id))>0){ ?> 
        	<?php foreach($conversation_by_id as $message){ ?>
        	<div class="user_details"><?php if($message->sender_id==$userid){echo "Me";}else{echo $message->username;} ?> <span class="date">Date: <?php echo date('d/m/Y H:i:s',strtotime($message->date_time)) ?></span><br /><br /><?php echo $message->content; ?> 
            <?php if($message->attached_file!=''){ ?>
            <br /><br />Attached File:<br /><br />
            <a href="<?php echo 'resource/uploads/'.$message->attached_file ?>" target="_blank"><?php echo $message->attached_file ?></a>
            <?php }?>
            </div>
        <?php }?>
		<?php }else{?>
        	<div class="user_details">No Conversation to display </div>
        <?php }?>
        
            <div class="leave_reply">
            	<div class="title">Leave a Replay</div>
                <form id="reply_form" action="<?php echo base_url().'message?user='.@$_GET['user'] ?>" method="post" enctype="multipart/form-data">
                
                    <div class="textbox"><textarea cols="95" rows="5" name="content" id="content"></textarea></div>
                    <div class="clear"></div>
                    <div id="attach_file_area" style="display:none">
                    <input type="file" name="attached_file">
                    <div class="spacer10"></div>
                    </div>
                    
                    <div class="btn_holder"><a href="javascript:void(0)" onClick="attach_file()"><img src="resource/images/attached-file.png" alt="" /></a> <span><a href="javascript:void(0)" onClick="return reply();"><img src="resource/images/reply-now.png" alt="" /></a></span></div>
                    <input type="submit" name="submit" id="submit" style="display:none">
                    
                </form>
            </div>
        </div>
    </div>   <?php echo $this->load->view('footer'); ?>

    </body>
</html>