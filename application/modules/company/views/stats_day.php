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
<?php foreach ($chart_day as $row):?>
['<?php echo $row->Day?>', (<?php echo $row->count?>)],
<?php endforeach ;?>

        ]);
        // Set chart options
        var options = {'is3D':true,
                       'width':450,
                       'height':300,
						title: 'Telework Popularity by Day'};


        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>
    <!--Div that will hold the pie chart-->

    <div class="col-light-blue "id="chart_div1"></div>

<div class="clear"></div>
