var map;
var geocoder;
var bounds = new google.maps.LatLngBounds();
var markersArray = [];
var	originsArray=[];
var numofadd;
var destinationsArray=[];
var lat,lng;
var coords = [];
var latt = [];
var long = [];
var storesusname=[];

var storesca=[];
var storescaname=[];
var longca=[];	
var lattca=[];

var loc=[];
var numusstores;
var numcastores;	

//var destinationIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=D|FF0000|000000';
var destinationIcon='http://www.mybtoys.com/media/images/where/bmarkers/image.png';
var originIcon = 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=O|FFFF00|000000';
var origin1 = new google.maps.LatLng(55.930, -3.118);
var origin2 = 'Greenwich, England';
var destinationA = 'Paris,France';
var destinationB = new google.maps.LatLng(50.087, 14.421);

//--------------------------------------------------------------------------------------------------------------
function load() {
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(40.756054, -73.986951);
        var myOptions = {
          zoom: 10,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
		var address = document.getElementById("addressInput").value;
		}
		
		
//--------------------------------------------------------------------------------------------------------------
//function initialize() {
//  var opts = {
//    center: new google.maps.LatLng(55.53, 9.4),
//    zoom: 10,
//    mapTypeId: google.maps.MapTypeId.ROADMAP
//  };
//  map = new google.maps.Map(document.getElementById('map-canvas'), opts);
//  geocoder = new google.maps.Geocoder();
//}		
//--------------------------------------------------------------------------------------------------------------
		
$(document).ready(function() {
//    initialize();
    load(); 

var l = window.location;
var base_url = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1];

    console.log(base_url);
	$.ajax({
		type: "GET",
		url: base_url +"/sites/all/themes/terra/where/retailers.csv",
		dataType: "text",
		success: function(data) {processData(data);}	 
	});   
});

//--------------------------------------------------------------------------------------------------------------
function processData(allText) 
{
	var address;
    var allTextLines = allText.split(/\r\n|\n/);
    var headers = allTextLines[0].split(',');

			var tarr0 = [];
            var tarr1 = [];
			var tarr2=[];
			var tarr3=[];	
			
			
			var tarrca0 = [];
            var tarrca1 = [];
			var tarrca2=[];	
			var tarrca3=[];
			
			numusstores=0;
			numcastores=0;
	
    for (var i=1; i<allTextLines.length; i++) {
        var data = allTextLines[i].split(',');
        if (data.length == headers.length) {
			address="";
            for (var j=3; j<(7); j++) {
                address=address  + (data[j]+ ",");
				

            }
			if (data[0] == 1){
			tarrca0.push(address);
			tarrca1.push(data[8]);
			tarrca2.push(data[9]);
			tarrca3.push(data[2]);
			numcastores++;
			}else
			{
			tarr0.push(address);
			tarr1.push(data[8]);
			tarr2.push(data[9]);
			tarr3.push(data[2]);
			numusstores++;
			}
        }
    }
	
	
		for (var iii=0; iii<numcastores; iii++) {
			lattca[iii]=tarrca1[iii];
			longca[iii]=tarrca2[iii];
			storesca[iii]=tarrca0[iii];
			storescaname[iii]=tarrca3[iii];
			}
		
		for (var iii=0; iii<numusstores; iii++) {
			latt[iii]=tarr1[iii];
			long[iii]=tarr2[iii];
			destinationsArray[iii]=tarr0[iii];
			storesusname[iii]=tarr3[iii];
			}

}


//--------------------------------------------------------------------------------------------------------------

 function getcoord() 
 {
			//load();
			deleteOverlays();
			if( document.getElementById("addressInput").value !="") 
			
			{
				
				console.log('here');
							var address = document.getElementById("address").value + "," + document.getElementById("addressInput").value + "," + document.getElementById("addressInput").value;
							var country =  document.getElementById('countrycode').value;
							var rad=document.getElementById('radiusSelect').value/1.609344;
							var sidebar = document.getElementById('sidebar');
							sidebar.innerHTML = '';
							//var loc=[];
							var dd;
							var numofstores=0;
							//alert(rad);
							 // next line creates asynchronous request
							geocoder.geocode( { 'address': address}, function(results, status) 
							{
									  // and this is function which processes response
									  if (status == google.maps.GeocoderStatus.OK) 
									  {
												loc[0]=results[0].geometry.location.lat();
												loc[1]=results[0].geometry.location.lng();
												if (country == 'US') 
												{
													for (var z=0;z<numusstores;z++)
													{
														if(getdistance(loc[0],loc[1],latt[z],long[z])<rad)
														{
															//numofstores++;
														addMarker(destinationsArray[z], true);
														
														var sidebarEntry = createSidebarEntry(storesusname[z], destinationsArray[z]);
														sidebar.appendChild(sidebarEntry);
														}
													}
												}
														
												if (country == 'CA') 
												{
													for (var zz=0;zz<numcastores;zz++)
													{
														if(getdistance(loc[0],loc[1],lattca[zz],longca[zz])<rad)
														{
															//numofstores++;
															addMarker(storesca[zz], true);
														var sidebarEntry = createSidebarEntry(storescaname[zz], storesca[zz]);
														sidebar.appendChild(sidebarEntry);
														}
													}
												}
							
					}
						
						
					  
					  //else {
						//alert("Geocode was not successful for the following reason: " + status);
					  //}
			});
			
			}
			else 
			{
				alert("We don't have enough Information. Please type in your address");
			document.getElementById("addressInput").focus();
			
			}
 }

//--------------------------------------------------------------------------------------------------------------
function createSidebarEntry(name, address) {
    var div = document.createElement('div');
    var html = '<b>' + name + '</b> :' + address ;


    div.innerHTML = html;
    //div.style.cursor = 'pointer';
   // //div.style.marginBottom = '30px';
    //GEvent.addDomListener(div, 'click', function() {
    //    GEvent.trigger(marker, 'click');
    //});
   // GEvent.addDomListener(div, 'mouseover', function() {
    //    div.style.backgroundColor = '#dcc9a8';
    //});
   // GEvent.addDomListener(div, 'mouseout', function() {
    //    div.style.backgroundColor = '#F9F3DC';
    //});
    return div;
}

//--------------------------------------------------------------------------------------------------------------



function codeLatLng(address)
{
   var returnValue =[];

   geocoder.geocode({'address': address}, function(results, status) { 
   returnValue[0] =results[1].geometry.location.lat();
   returnValue[1] =results[1].geometry.location.lng();
	alert(returnValue);
   return returnValue;
   })

}





//--------------------------------------------------------------------------------------------------------------
function getdistance(lat1,lon1,lat2,lon2){

  var R = 6371; // Radius of the earth in km
  var dLat = deg2rad(lat2-lat1);  // deg2rad below
  var dLat2= dLat/2;
  var dLon = deg2rad(lon2-lon1); 
  var dLon2 = dLon/2;
  var a = Math.sin(dLat2) * Math.sin(dLat2) + Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2))*Math.sin(dLon2) * Math.sin(dLon2); 
  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
  var d = R * c; // Distance in km
  return d;
}

function deg2rad(deg) {
  return deg * (Math.PI/180)
}

//--------------------------------------------------------------------------------------------------------------

function calculateDistances() {

 var service = new google.maps.DistanceMatrixService();
  origin1="'" + document.getElementById("addressInput").value + "'";

	

  for (var k=0;k<destinationsArray.length;k++){

	  //ds[0] = destinationsArray[k] ;
	  
	  var destinationA= "'" + destinationsArray[k] + "'";  
	//alert(destinationsArray.length);
	  service.getDistanceMatrix(
		{
		  origins: [origin1],
		  destinations: [destinationA],
		  travelMode: google.maps.TravelMode.DRIVING,
		  unitSystem: google.maps.UnitSystem.IMPERIAL,
		  avoidHighways: false,
		  avoidTolls: false
		}, callback);
	}
}
//--------------------------------------------------------------------------------------------------------------
function callback(response, status) {
	var rad=document.getElementById('radiusSelect').value*1609.344;
	//alert(rad);
  if (status != google.maps.DistanceMatrixStatus.OK) {
    alert('Error was: ' + status);
	
  }  
  else {
    var origins = response.originAddresses;
    var destinations = response.destinationAddresses;
    var outputDiv = document.getElementById('outputDiv');
    outputDiv.innerHTML = '';
    deleteOverlays();

    for (var i = 0; i < origins.length; i++) {
      var results = response.rows[i].elements;
      addMarker(origins[i], false);
      for (var j = 0; j < results.length; j++) {
		  //if (results[0].distance.value <rad) {
        addMarker(destinations[j], true);
		
        outputDiv.innerHTML += origins[j] + ' to ' + destinations[0]
            + ': ' + results[j].distance.text + ' in '
            + results[j].duration.text + '<br>';
		  //}
      }
     }
  }
}
//--------------------------------------------------------------------------------------------------------------
function addMarker(location, isDestination) {
  var icon;
  if (isDestination) {
    icon = destinationIcon;
  } else {
    icon = originIcon;
  }
  geocoder.geocode({'address': location}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) 
	{
      bounds.extend(results[0].geometry.location);
      map.fitBounds(bounds);
      var marker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location,
        icon: icon
      });
      markersArray.push(marker);
    } 
		//else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) 
		//	{    
        //    setTimeout(function() {addMarker(location, isDestination);}, 0);}  
	//	else {
     // alert('Geocode was not successful for the following reason: '
     //   + status);
    //}
  });
}
//--------------------------------------------------------------------------------------------------------------
function deleteOverlays() {
  for (var i = 0; i < markersArray.length; i++) {
    markersArray[i].setMap(null);
  }
  markersArray = [];
}
//--------------------------------------------------------------------------------------------------------------
//google.maps.event.addDomListener(window, 'load', initialize);
//--------------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------------
