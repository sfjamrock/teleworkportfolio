<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>
		<base href="<?php echo base_url(); ?>" />

<link href="resource/css/style.css" rel="stylesheet" type="text/css" />

<script src="resource/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="resource/js/menu-collapsed.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="resource/css/accordian.css" />
<link rel="icon" href="resource/images/favicon.ico" />
<link rel="shortcut icon" href="resource/images/favicon.ico" />

<style type="text/css"> 
  html { height: 100% }
  body { height: 50%; margin: 0; padding: 0 }
  #map_canvas { height: 100% }
</style>
<script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCZQjI-dh8LgP2X8O-7LH0e2_fLomCDKKw&sensor=false">
</script>
<script type="text/javascript">
//    setTimeout(function () {
  //     window.location.reload();
    //}, 1000);

var locations = ['<?php echo $location->city ?>, <?php echo $location->region_code ?>',<?php echo $location->latitude ?>,<?php echo $location->longitude ?> ];

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


 latlngset = new google.maps.LatLng(lat, long);

  var marker = new google.maps.Marker({  
          map: map, title: loan , position: latlngset  
        });
        map.setCenter(marker.getPosition())


        var content =    '</h3>' + " We have you at " + loan    

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

</head><body onload="initialize()">
<div id="main">
    <?php echo $this->load->view('header'); ?>
    <div class="details_holder">
        <h2>Username's Saving Tracker</h2>
        <div class="savings_tracker"><strong class="heading">For information on each field please read description below</strong><br /><br />
<span class="text1">Miles: </span> <span class="text2">Enter in this field the total number of miles traveled to and from work on a average day<br /></span>
<span class="text1">Time: </span> <span class="text2">in this field the total time traveled to and from work on a average day<br /></span>
<span class="text1">Money: </span> <span class="text2">Enter in this field the average amount sent at work on a average day. Click to see example<br /></span>
        </div>
<p> We have you at <?php echo $location->city ?>, <?php echo $location->region_code ?></p>
                    <div class="leader_map" id="default" style="width:100%; height:100%"></div>

        <div class="savings_tracker">
        	<ul class="box">
            	<li>Miles</li>
                <li>Times</li>
                <li>Money</li>
            </ul>
        </div>
        <div class="savings_tracker">
            <ul id="menu">
            	<li><a href="#">Same as last</a></li>
                <li><a>Edit</a>
                    <ul>
                        <li>
                            <div class="savings_tracker_form">
                                <div class="text1">Miles:</div>
                                <div class="text2"><input name="" type="text" /></div>
                                <div class="text1">Time:</div>
                                <div class="text2"><input name="" type="text" /></div>
                                <div class="text1">Money:</div>
                                <div class="text2"><input name="" type="text" /></div>
                                <div class="text1">&nbsp;</div>
                                <div class="text2">
                                    <div class="text_holder">
                                        <ul>
                                            <li>Task - 01</li>
                                            <li class="align"><select name=""><option>Select</option></select></li>
                                            <li>Task - 02</li>
                                            <li class="align"><select name=""><option>Select</option></select></li>
                                            <li>Task - 03</li>
                                            <li class="align"><select name=""><option>Select</option></select></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text2"><a href="#"><img src="resource/images/submit.png" alt="" /></a></div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
    </div>
   <?php echo $this->load->view('footer'); ?>
</body></html>