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
<legend>Job Evaluator</legend>
<p>Evaluate your telework eligibility by indicate Eligible, or Non-Eligible to each of the following task listed below according to your job title</p>

<div class="clear"></div><br/><br/>

<p>
<label for="title">Job Title</label>
<input name="title" type="text" id="autocomplete"  size="50"/>
</p>
<p id="description"></p>
<p id="task" style="text-align:left"></p>

