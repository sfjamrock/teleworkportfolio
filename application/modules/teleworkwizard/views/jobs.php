<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Profile </title>
		<base href="<?php echo base_url(); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
        <meta name="description" content="Telework Portfolio's Self telework job evaluator helps you evaluate your ability to telework." />
        <meta name="keywords" content="Telework, Telecommute, Telecommuting, Teleworker, Teleworking, Work from Home" />
        <meta name="author" content="Telework Portfolio" />
        <link rel="shortcut icon" href="resource/images/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="resource/css/style.css" />
        <script src="resource/js/jquery-1.7.2.min.js"></script>



<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(function() {
 function log( message ) {
         var test =  message;
		$.ajax({ url: "<?php echo site_url('teleworkwizard/GetJobEvaluation'); ?>",
				data: { term:test},
				dataType: "json",
				type: "POST",
				success: function(data){
 				$("#description").text(data.a);
				$(data.b).each(function(index, element){  
               $('#task').prepend('<tr  style="width: 100%; text-align:left; border:thick"><td>' + element.task + '</td><td>'+ '<select name=choice[]><option value = '+ element.task_id +' >Eligible</option><option value = 0>Non-Eligible</option></select>'+'</td><tr>'); 

      				}); 
				}  
			});
		}

		$( "#autocomplete" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url: "<?php echo site_url('teleworkwizard/suggestions'); ?>",
				data: { term: $("#autocomplete").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 2,
select: function( event, ui ) {
                log( ui.item ?
                    " " + ui.item.label :
                    " " + this.value);
            },
		});
	});
});
</script>
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
<div id="main">
    <?php echo $this->load->view('header'); ?>
    <div class="details_holder">
        <h2>Self Teleworker Job Evaluation</h2>
        <div class="job_evaluator">Evaluate your telework eligibility by indicate Eligible, or Non-Eligible to each of the following task listed below according to your job title</div>
             
           <form id="formElem" name="formElem" action="teleworkwizard/SelfEvaluation" method="post">
        
			<div class="job_evaluator">
        	<div class="text1">Job Title:</div>
        	<div class="text2"><input name="title" type="text" id="autocomplete"  size="100"/>
</div>
            <div class="text1">Job Description:</div>
        	<div class="text2"><textarea id="description" rows="5" cols="100" ></textarea>
</div>
            <div class="text1">Task List</div>
        	<div class="text2">
            	<div class="text_holder">
             
                  
                        <p id="task" style="text-align:left"></p>
                   
                </div>
            </div>
            <div class="text1">&nbsp;</div>
        	<div class="text3"><a href="#"><INPUT TYPE="image" SRC="resource/images/confirm.png" ALT="Submit Form" >
</a></div>
  </form>
<img src="resource/images/seal.png" alt="" style="float:right">

        </div>
    </div>
    <?php echo $this->load->view('footer'); ?>
    </body>
</html>

