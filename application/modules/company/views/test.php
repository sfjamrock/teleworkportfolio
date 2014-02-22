<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Telework Analytics</title>

<base href="<?php echo base_url(); ?>" />

<link href="resource/dist/css/universalStyle.css" rel="stylesheet" type="text/css" />
<link href="resource/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!--<link href="resource/css/style.css" rel="stylesheet" type="text/css" /> -->
<!--<link href="resource/css/tabcontent.css" rel="stylesheet" type="text/css" /> -->

<style type="text/css"> 
  html { height: 100% }
  body { height: 50%; margin: 0; padding-bottom: 700px;  padding: 0 }
  #map_canvas { height: 100% }
</style>
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

<style>
	body { padding-bottom: 1500px; }
</style>
</head><body onload="initialize()">
<div id="main" >
    <?php echo $this->load->view('header'); ?>
    <div class="details_holder border-shadow">
    	<div class="discussion_group_details">
        	<div class="img_holder"><a href="<?php echo base_url("");?><?php echo $company->cusername?>">
					<?php if (strpos($company->picture, "http://") === 0) :?>
					<img src="<?php echo $company->picture; ?>" width="115" height="115"alt="" />
					<?php elseif (isset($company->picture)) : ?>
					<img src="resource/user/profile/<?php echo $company->picture; ?>?t=<?php echo md5(time()); ?>"  width="115" height="115"alt="" /> 
					<?php else : ?>
					<img src="resource/resource/images/img5.png" width="115" height="115"alt="" />
					<?php endif; ?></a>
			</div>
            <div class="text_holder"><strong><?php echo $company->cusername?></strong><br /><br /><?php echo $company->city?>, <?php echo $company->state?></div>
            <div class="btn_holder"><!--
   <form action="company/profile/join" method="post"><input type="submit" id="join" name="company"value="<?php echo $this->uri->segment(1)?>"
  style="background-image: url(resource/images/join-now1.png); border: solid 0px #000000; width: 70px; height: 32px; font-size: 0.1px;" />
  </form>-->
<div class="button"><button class="button btn-primary"><a href="#">Subcription Status</a></button></div></div>
        </div>

<?php if ($this->session->flashdata('enroll')  != '');
echo $this->session->flashdata('enroll');
?>
<!-- Nav tabs -->
<ul class="nav nav-tabs" >
   <li class="active"><a href="#employeeMap" class="selected">EMPLOYEE MAP</a></li>
  
  
  <li><a href="#employees1" data-toggle="tab">EMPLOYEES</a></li>
  <li><a href="#location" data-toggle="tab">LOCATION</a></li>
  <li><a href="#timesheet" data-toggle="tab">TIMESHEET</a></li>
  <?php if ($product->timesheet == 1) :?>
  <li><a href="#scheduler" data-toggle="tab">SCHEDULER</a></li>
					<?php endif; ?>
  <?php if ($product->schedule == 1) :?>
  <li><a href="#hotelling" data-toggle="tab">HOTELLING</a></li>
					<?php endif; ?>
					<?php if ($product->equipment_management == 1) :?>
  <li><a href="#equipment" data-toggle="tab">EQUIPMENT</a></li>
  <li><a href="#stats" data-toggle="tab">STATS</a></li>
					<?php endif; ?>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="employeeMap">
                <?php echo $this->load->view('leaders'); ?>
					
				</div>
  <div class="tab-pane" id="employees1">
                <?php echo $this->load->view('teleworker'); ?>
					
</div>
  <div class="tab-pane" id="location">
                <?php echo $this->load->view('location'); ?></div>
  <div class="tab-pane" id="timesheet">
                <?php echo $this->load->view('timesheet'); ?></div>
  <div class="tab-pane" id="scheduler">
                <?php echo $this->load->view('scheduler'); ?></div>
  <div class="tab-pane" id="hotelling">
                <?php echo $this->load->view('hotel'); ?></div>
  <div class="tab-pane" id="equipment">
                <?php echo $this->load->view('inventory'); ?></div>
  <div class="tab-pane" id="stats">
                <?php echo $this->load->view('analytics'); ?></div>
</div>
 

    <?php echo $this->load->view('footer'); ?>



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="resource/dist/js/bootstrap.min.js"></script>
</div>
</body>
</html>