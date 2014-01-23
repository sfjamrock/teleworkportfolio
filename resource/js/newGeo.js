$(document).on('pagebeforeshow', '#clockinPage', function() {

    var Geo={};
    navigator.geolocation.getCurrentPosition(success, fail);
	else
	 $("p").html("HTML5 Not Supported");
    //Get the latitude and the longitude;
    function success(position) {
        Geo.lat = position.coords.latitude;
        Geo.lng = position.coords.longitude;
        populateHeader(Geo.lat, Geo.lng);
    }

    //function error(){
    //    console.log("Geocoder failed");
    //}

    function populateHeader(lat, lng){
        $('#latitued').html(lat);
        $('#longitude').html(lng);
        $('#goo_map_api').html("http://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+","+lng+"&sensor=false");
    }

function fail(error)
{
	var errorType={
		0:"Unknown Error",
		1:"Permission denied by the user",
		2:"Position of the user not available",
		3:"Request timed out"
	};
 
	var errMsg = errorType[error.code];
 
	if(error.code == 0 || error.code == 2){
		errMsg = errMsg+" - "+error.message;
	}
 
	$("p").html(errMsg);
}