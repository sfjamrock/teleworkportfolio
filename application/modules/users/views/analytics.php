    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Telework Eligible',  
(<?php if (empty($eligible_tracker->eligible_num)) : ?>
1
									 <?php else : ?>
<?php echo $eligible_tracker->eligible_num ?>
					                 <?php endif; ?>)],
          ['Not Telework Eligible', (<?php if (empty($eligible_tracker->eligible_num)) : ?>
1
									 <?php else : ?>
<?php echo $eligible_tracker->non_eligible_num ?>
					                 <?php endif; ?>)]
        ]);

        // Set chart options
        var options = {'title':'Telework Job Evaluation Chart ',
						'is3D':true,
                       'width':600,
                       'height':200};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    <!--Div that will hold the pie chart-->

    <div class="col-light-blue "id="chart_div"></div>

<div class="clear"></div>
