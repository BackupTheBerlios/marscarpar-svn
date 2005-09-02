var centerMarker;
var maison;
var travail;
var profil;

function initmap(map)
{
	GEvent.addListener(map,"moveend",function()
	{
		if ( centerMarker )
		{
			map.removeOverlay( centerMarker );
		}
		var center = map.getCenterLatLng();
		var latStr = center.y;
		var longStr = center.x;
		document.getElementById("latitude").innerHTML = latStr;
		document.getElementById("longitude").innerHTML = longStr;
		if( map.getZoomLevel() == 0 )
		{
			var html = "<i><b>ZOOM MAXI</i></b><br/>";			
			document.getElementById("zoomLevel").innerHTML = html;
		}
		else
		{
			document.getElementById("zoomLevel").innerHTML = "";
		}
		creationCenter(map);
	}
	);
	map.setMapType( G_SATELLITE_TYPE );
	map.addControl(new GSmallMapControl()); map.centerAndZoom(new GPoint(5.3620147705078125, 43.33766426918899), 6);
}

function creationCroix(map)
{
	var bounds = map.getBoundsLatLng();
	var points1 = [];
	points1.push( new GPoint(bounds.minX,bounds.minY) );
	points1.push( new GPoint(bounds.maxX,bounds.maxY) );
	map.addOverlay( new GPolyline(points1) , "#ff0000" , 1 , 0.1);
	var points2 = [];
	points2.push( new GPoint(bounds.minX,bounds.maxY) );
	points2.push( new GPoint(bounds.maxX,bounds.minY) );
	map.addOverlay( new GPolyline(points2) , "#ff0000" , 1 , 0.1);
	
}

function creationCenter(map)
{	
	var icon = new GIcon();
	icon.image = "images/marker.png";
	icon.shadow = "images/shadow.png";
	icon.iconSize = new GSize(10, 17);
	icon.shadowSize = new GSize(19, 17);
	icon.iconAnchor = new GPoint(5,17);
	centerMarker = new GMarker( map.getCenterLatLng() , icon );
	map.addOverlay( centerMarker );
	GEvent.addListener(centerMarker, "click", function() {
    		centerMarker.openInfoWindowHtml("You clicked me!");
  	});
}

function changeImage( _type )
{
	if( _type == "maison" )
	{
		document.images["maisonButton"].src= "images/maison_u.jpg";
	}
	else if ( _type == "travail" )
	{
		document.images["travailButton"].src= "images/travail_u.jpg";
	}
	return true;
}
function changeImageBack( _type ) 
{
	if( _type == "maison" )
	{
		document.images["maisonButton"].src= "images/maison.jpg";
	}
	else if ( _type == "travail" )
	{
		document.images["travailButton"].src= "images/travail.jpg";
	}
	return true;
}
function handleMDown( _type )
{
	if( _type == "maison" )
	{
		document.images["maisonButton"].src= "images/maison_d.jpg";
		if ( maison )
		{
			map.removeOverlay( maison );
		}		
		var icon = new GIcon();
		icon.image = "images/maison.png";
		icon.shadow = "images/shadow.png";
		icon.iconSize = new GSize(10, 17);
		icon.shadowSize = new GSize(19, 17);
		icon.iconAnchor = new GPoint(5,17);
		var p = map.getCenterLatLng();
		document.getElementById("latitude_m").innerHTML = "<FONT COLOR=\"black\">" + p.y + "</FONT>";
		document.getElementById("longitude_m").innerHTML = "<FONT COLOR=\"black\">" + p.x + "</FONT>";
		maison = new GMarker( p , icon );
		map.addOverlay( maison );
		if ( travail )
		{
			var dist = point_distance(maison.point,travail.point);
			document.getElementById("distance").innerHTML = "<FONT COLOR=\"black\">" + dist + "</FONT>";
		}		
		GEvent.addListener(maison, "click", function() {
	    		centerMarker.openInfoWindowHtml("You clicked me!");
  		});
	}
	else if ( _type == "travail" )
	{
		document.images["travailButton"].src= "images/travail_d.jpg";
		if ( travail )
		{
			map.removeOverlay( travail );
		}
		var icon = new GIcon();
		icon.image = "images/travail.png";
		icon.shadow = "images/shadow.png";
		icon.iconSize = new GSize(10, 17);
		icon.shadowSize = new GSize(19, 17);
		icon.iconAnchor = new GPoint(5,17);
		var p = map.getCenterLatLng();
		document.getElementById("latitude_t").innerHTML = "<FONT COLOR=\"black\">" + p.y + "</FONT>";
		document.getElementById("longitude_t").innerHTML = "<FONT COLOR=\"black\">" + p.x + "</FONT>";
		travail = new GMarker( p , icon );
		map.addOverlay( travail );
		if ( maison )
		{
			var dist = point_distance(maison.point,travail.point);
			document.getElementById("distance").innerHTML = "<FONT COLOR=\"black\">" + dist + "</FONT>";
		}
		GEvent.addListener(travail, "click", function() {
	    		centerMarker.openInfoWindowHtml("You clicked me!");
  		});
	}
	return true;
}
function handleMUp( _type )
{
	changeImage( _type );
	return true;
}

/* Convert degress to radians */
function deg2rad(deg) {
  return deg / (180 / Math.PI);
}

/* Calculate distance between two points */
function point_distance(a, b) {
  var r = 6378700;
  var lat1 = a.y;
  var lat2 = b.y;
  var lon1 = a.x;
  var lon2 = b.x;
  var dist = r * Math.acos(Math.sin(deg2rad(lat1)) * Math.sin(deg2rad(lat2)) + 
			   Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
			   Math.cos(deg2rad(lon1 - lon2)));
  return dist;
}


