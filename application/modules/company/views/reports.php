<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Telework Analytics</title>
<base href="<?php echo base_url(); ?>" />
<link href="resource/css/style.css" rel="stylesheet" type="text/css" />
<link href="resource/css/tabcontent.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="resource/js/tabcontent.js"></script>
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
// Enable the visual refresh
google.maps.visualRefresh = true;
var locations = [
		<?php foreach($map as $row): ?>
  			['<?php echo $row->city; ?>, <?php echo $row->state; ?>', <?php echo $row->latitude; ?>, <?php echo $row->longitude; ?>, <?php echo $row->user_id; ?>,
			 '<?php echo $row->firstname; ?> <?php echo $row->lastname; ?>',
//<a href="<?php echo base_url("profile");?>/<?php echo $row->username?>">
//<?php if (strpos($row->picture, "http://") === 0) :?>
//<img src="<?php echo $row->picture; ?>" width="75" height="75"alt="" />
				//	<?php elseif (isset($row->picture)) : ?>
					//<img src="resource/user/profile/<?php echo $row->picture; ?>?t=<?php echo md5(time()); ?>"  width="75" height="75"alt="" />
					//<?php else : ?>
					//'<img src="resource/img/default-picture.gif"  width="75" height="75"alt="" />'
					//<?php endif; ?>	</a>





],
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

</head><body onload="initialize()">
<div id="main">
    <?php echo $this->load->view('header'); ?>
    <div class="details_holder">
    	<div class="innerpage_content">
 			<div class="employee_dashboard_box">
            	<div class="main_img"><a href="#"><img src="resource/images/img2.png" alt="" /></a></div>
                <div class="text_holder">
                	<ul>
                    	<li class="title"><?php echo $company->cusername?></li>
                    	<li class="text"><?php echo $company->city?>, <?php echo $company->state?></li>
                    </ul>
                </div>
                <div class="member_image">
				<a href="#"><img src="resource/images/subscription-status.png" alt="" /></a></div>
            </div>

        	        </div>
        <div class="innerpage_sidebar">
        	<!--<div class="btn_holder"><a href="#"><img src="resource/images/telework-statistics.png" alt="" /></a></div>-->
            <div class="btn_holder"><a href="#"><img src="resource/images/followers.png" alt="" /></a></div>
            <div class="btn_holder"><a href="#"><img src="resource/images/following.png" alt="" /></a></div>
        </div>
<?php if ($this->session->flashdata('enroll')  != '');
echo $this->session->flashdata('enroll');
?>

        <div class="main_tabholder">
            <div class="shadetabs">
                <ul id="countrytabs">
                    <li><a href="#" rel="country1" class="selected">Leaders</a></li>
                    <li><a href="#" rel="country2">Savings</a></li>
                    <li><a href="#" rel="country3">Equipment</a></li>
                    <li><a href="#" rel="country4">Analytics</a></li>
                    <li><a href="#" rel="country5">Hotelling</a></li>
                    <li><a href="#" rel="country6">Teleworker</a></li>
                </ul>
            </div>
            <div class="tab_content none">
                <div id="country1" class="tabcontent">
                	 <?php echo $this->load->view('leaders'); ?>
                </div>
                <div id="country2" class="tabcontent">
                 	 <?php echo $this->load->view('savings'); ?>               	
                </div>
                <div id="country3" class="tabcontent">
                	 <?php echo $this->load->view('inventory'); ?>
                </div>                    
                <div id="country4" class="tabcontent">
                	 <?php echo $this->load->view('analytics'); ?>
                </div>
                <div id="country5" class="tabcontent">
                	 <?php echo $this->load->view('hotel'); ?>               	
                </div>
                <div id="country6" class="tabcontent">
                	 <?php echo $this->load->view('teleworker'); ?>
                </div>    
            </div>  
        </div>
    </div>
    <?php echo $this->load->view('footer'); ?>
<script type="text/javascript">
	var countries=new ddtabcontent("countrytabs")
	countries.setpersist(true)
	countries.setselectedClassTarget("link") //"link" or "linkparent"
	countries.init()
</script>


</div>


</body></html>