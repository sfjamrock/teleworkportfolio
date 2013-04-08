
$(document).ready(function() {
	$("form#submit_wall").submit(function (){
		
	var message_wall = $('#message_wall').attr('value');
	$.ajax({
		type: "POST",
		url:"<?php echo site_url('users/dashboard/update_status'); ?>",
		data: "message_wall="+ message_wall,
		success: function(){
			$("ul#wall").prepend("<li>"+message_wall+"</li>");
			$("ul#wall li:first").fadeIn();
		}
	});
	return false;	
	});
});
