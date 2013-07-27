<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <title>Tech Challenge - Google Map</title>
<style type="text/css"> 
  html { height: 100% }
  body { height: 60%; margin: 0; padding: 0 }
  #map_canvas { height: 100% }
</style>
<script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCZQjI-dh8LgP2X8O-7LH0e2_fLomCDKKw&sensor=false">
</script>
<script type="text/javascript">

var locations = [
		<?php foreach($mapchallenge as $row): ?>
  			['<?php echo $row->city; ?>, <?php echo $row->state; ?>', <?php echo $row->latitude; ?>, <?php echo $row->longitude; ?>, <?php echo $row->user_id; ?>],
        <?php endforeach; ?>
  ];

  function initialize() {

    var myOptions = {
      zoom: 10,
      mapTypeId: google.maps.MapTypeId.ROADMAP

    };
    var map = new google.maps.Map(document.getElementById("default"),myOptions);

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
				
				 latlngset = new google.maps.LatLng(lat, long);
					
				 var marker = new google.maps.Marker({ map: map, title: loan , position: latlngset });
				 
				 map.setCenter(marker.getPosition())
				
				 var content = "User " + add +  '</h3>' + " was last sighted at " + loan    
				
				 var infowindow = new google.maps.InfoWindow()
				
				google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
					        return function() {
					           infowindow.setContent(content);
					           infowindow.open(map,marker);
					};

				    })(marker,content,infowindow)); 
			
  				}
    map.fitBounds(bounds);
  }

  </script>
 </head>
 <body onload="initialize()">
  <div id="default" style="width:100%; height:100%"></div>
 </body>
  </html>
