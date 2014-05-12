<!DOCTYPE html>
<html lang="en">
  <head>
	<base href="<?php echo base_url(); ?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="resource/images/favicon.ico" />
	<script type="text/javascript" src="resource/js/tabcontent.js"></script>
    <title>Company Timesheets</title>
    <!-- Bootstrap core CSS -->
    <link href="resource/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="resource/dist/css/dashboard.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="resource/dist/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
	.rectangle-box{
    position: relative;
    width: 50%;
    overflow: hidden;
    background: #4679BD;
}
.rectangle-box:before{
    content: "";
    display: block;
    padding-top: 50%;
}
.rectangle-content{
    position:  absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    color: white;
}
.rectangle-content div {
   display: table;
   width: 100%;
   height: 100%;
}
.rectangle-content span {
    display: table-cell;
    text-align: center;
    vertical-align: middle;
    color: white
}
.circle-text {
    width:50%;
}
.circle-text:after {
    content: "";
    display: block;
    width: 100%;
    height:0;
    padding-bottom: 100%;
    background: #4679BD; 
    -moz-border-radius: 50%; 
    -webkit-border-radius: 50%; 
    border-radius: 50%;
}
.circle-text div {
    float:left;
    width:100%;
    padding-top:50%;
    line-height:1em;
    margin-top:-0.5em;
    text-align:center;
    color:white;
}	</style>


<script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCZQjI-dh8LgP2X8O-7LH0e2_fLomCDKKw&sensor=false">
</script>

<script type="text/javascript">
google.maps.visualRefresh = true;
var locations = [
		<?php foreach($map as $row): ?>
  			['<?php echo $row->name; ?>', <?php echo $row->latitude; ?>, <?php echo $row->longitude; ?>, <?php echo $row->user_id; ?>,
			 '<?php echo $row->firstname; ?> <?php echo $row->lastname; ?>',],
        <?php endforeach; ?>
  ];

  function initialize() {

    var myOptions = {
      center: new google.maps.LatLng(38.9, -77.2),
      zoom: 7,
      mapTypeId: google.maps.MapTypeId.ROADMAP

    };
    var map = new google.maps.Map(document.getElementById("default"),
        myOptions);

    setMarkers(map,locations)

  }



  function setMarkers(map,locations){

      var marker, i

for (i = 0; i < locations.length; i++)
 {  

 var loan = locations[i][0]
 var lat = locations[i][1]
 var long = locations[i][2]
 var add =  locations[i][3]
var name =  locations[i][4]
var pic =  locations[i][5]


 latlngset = new google.maps.LatLng(lat, long);

  var marker = new google.maps.Marker({  
          map: map, title: loan , position: latlngset  
        });
        map.setCenter(marker.getPosition())


        var content =  name +  '</h3>' + " was last sighted at " + loan    

  var infowindow = new google.maps.InfoWindow()

google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
        return function() {
           infowindow.setContent(content);
           infowindow.open(map,marker);
        };
    })(marker,content,infowindow)); 

  }
  }

  </script>
  </head>
  <body  onload="initialize()">
    <?php echo $this->load->view('header_new'); ?> 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">DASHBOARD</h1>
     		 <div class="row">
		        <div class="col-md-8"><div class="leader_map" id="default" style="width:100%; height:50%"></div></div>
		        <div class="col-md-4"><div class="table-responsive">
		            <table class="table table-striped">
		              <thead>                
		                <tr>
		                  <th>Employee</th>
		                  <th>Location</th>
		                  <th>Action</th>
		                </tr>
		              </thead>
		              <tbody>
						
						<?php foreach($map as $row): ?>
							<tr>
							<td><?php echo $row->firstname; ?> <?php echo $row->lastname; ?></td>
							<td> <?php echo $row->name; ?></td>
							<td>
								<?php if($row->clock_out == NULL) : ?>
								<form name="admin_logout" action="company/profile/admin_logout" method="post">
									<input type="hidden" name="company" value="<?php echo $this->uri->segment(1) ?>">
									<button  class="btn btn-danger" type="submit"  name="id" value="<?php echo $row->id?>">LOGOUT</button>
								</form>
							   	<?php else : ?>

								<?php endif; ?>

							 </td>
							</tr>
		        		<?php endforeach; ?>
		              </tbody>
		            </table>
		          </div>
				</div>
      		</div>
<?php if ($product->stats == 1) :?>
      <div class="row">
        <div class="col-md-6"><?php $this->load->view('stats_day');?></div>
        <div class="col-md-6"><?php $this->load->view('stats_city');?></div>
      </div>

      <div class="row">

        <div class="col-md-4 " >
			<div class='rectangle-box'style="width:220px; height:150px">
			    <div class='rectangle-content'><div><span>Clock-In Employees<br/><br/>
					<font size="28"><strong><?php echo $active_count->count?></strong></font></span></div></div>
			</div>
		</div>

        <div class="col-md-4 " >
			<div class='rectangle-box'style="width:220px; height:150px">
			    <div class='rectangle-content'><div><span>Number of Employees<br/><br/>
					<font size="28"><strong><?php echo $enroll_count->count?></strong></font></span></div></div>
			</div>
		</div>

        <?php if( $saving->real_estate>0 ) :?>
	        <div class="col-md-4 " >
				<div class='rectangle-box'style="width:220px; height:150px">
				    <div class='rectangle-content'><div><span>Real Estate<br/><br/>
						<font size="28"><strong><?php echo $saving->real_estate * $count->count?></strong></font></span></div></div>
				</div>
			</div>
		<?php endif; ?>

        <?php if( $saving->productivity>0 ) :?>
	        <div class="col-md-4 " >
				<div class='rectangle-box'style="width:220px; height:150px">
				    <div class='rectangle-content'><div><span>Productivity<br/><br/>
						<font size="28"><strong><?php echo $saving->productivity * $count->count?></strong></font></span></div></div>
				</div>
			</div>
		<?php endif; ?>

        <?php if( $saving->turnover>0 ) :?>
	        <div class="col-md-4 " >
				<div class='rectangle-box'style="width:220px; height:150px">
				    <div class='rectangle-content'><div><span>Turnover<br/><br/>
						<font size="28"><strong><?php echo $saving->turnover * $count->count?></strong></font></span></div></div>
				</div>
			</div>
		<?php endif; ?>

        <?php if( $saving->healthcare>0 ) :?>
	        <div class="col-md-4 " >
				<div class='rectangle-box'style="width:220px; height:150px">
				    <div class='rectangle-content'><div><span>Healthcare<br/><br/>
						<font size="28"><strong><?php echo $saving->healthcare * $count->count?></strong></font></span></div></div>
				</div>
			</div>
		<?php endif; ?>

       	<?php if( $saving->absences>0 ) :?>
	        <div class="col-md-4 " >
				<div class='rectangle-box'style="width:220px; height:150px">
				    <div class='rectangle-content'><div><span>Absences<br/><br/>
						<font size="28"><strong><?php echo $saving->absences * $count->count?></strong></font></span></div></div>
				</div>
			</div>
		<?php endif; ?>
        
       	<?php if( $saving->utilities>0 ) :?>
	        <div class="col-md-4 " >
				<div class='rectangle-box'style="width:220px; height:150px">
				    <div class='rectangle-content'><div><span>Utilities<br/><br/>
						<font size="28"><strong><?php echo $saving->utilities * $count->count?></strong></font></span></div></div>
				</div>
			</div>
		<?php endif; ?>		

		<?php if( $saving->technology>0 ) :?>
	        <div class="col-md-4 " >
				<div class='rectangle-box'style="width:220px; height:150px">
				    <div class='rectangle-content'><div><span>Technology<br/><br/>
						<font size="28"><strong><?php echo $saving->technology * $count->count?></strong></font></span></div></div>
				</div>
			</div>
		<?php endif; ?>


      </div>
<?php endif; ?>
           </div>  
		 </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="resource/dist/js/bootstrap.min.js"></script>
    <script src="resource/dist/assets/js/docs.min.js"></script>
	<script type="text/javascript">
		var countries=new ddtabcontent("countrytabs")
		countries.setpersist(true)
		countries.setselectedClassTarget("link") //"link" or "linkparent"
		countries.init()
	
		var countries=new ddtabcontent("othertabs")
		countries.setpersist(true)
		countries.setselectedClassTarget("link") //"link" or "linkparent"
		countries.init()
	</script>

  </body>
</html>
