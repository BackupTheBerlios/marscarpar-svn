<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<style type="text/css">
			v\:* {behavior:url(#default#VML);}
		</style>
		<title>test Google api</title>
		<script src="http://maps.google.com/maps?file=api&v=1&key=ABQIAAAArLxDRmkHgsrMoM2o5ceGohTKtg7kFE0JrdlecptLJKmAMTlPhBTKNRysjuojxYDprlU8X5ihHtC-hw" type="text/javascript"></script>
		<script src="js/covoiturage.js" type="text/javascript"></script>
	</head>
	<body style="color: rgb(255, 255, 255); background-color: rgb(115, 140, 175);" alink="#00cccc" link="#ccffff" vlink="#990099">
		<div style="text-align: center;">
			<img style="width: 354px; height: 200px;" alt="" src="images/covoiturage.jpg" /><br />
		</div>
		<h1 style="text-align: center;">Le covoiturage sur Marseille, c'est possible ...</h1>
		<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
			<tbody>
				<tr align="center">
					<td colspan="2" rowspan="1">  
						<table style="text-align: left; width: 334px; height: 33px;" border="1" cellpadding="2" cellspacing="2">
							<tbody>
								<tr>
									<td style="text-align: center;">
										<a onmouseover="return changeImage('maison')" onmouseout="return changeImageBack('maison')" onmousedown="return handleMDown('maison')" onmouseup="return handleMUp('maison')"> <img name="maisonButton" src="images/maison.jpg" alt="javascript button" border="0" height="90" width="226" /></a>
									</td>
									<td style="text-align: center;">
										<a onmouseover="return changeImage('travail')" onmouseout="return changeImageBack('travail')" onmousedown="return handleMDown('travail')" onmouseup="return handleMUp('travail')"> <img name="travailButton" src="images/travail.jpg" alt="javascript button" border="0" height="90" width="226" /></a>
									</td>
								</tr>
							</tbody>   
						</table>
					</td>
				</tr>
				<tr align="center">
					<td colspan="2" rowspan="1">
						<div id="zoomLevel"></div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="map" style="width: 500px; height: 400px;"></div>
					</td>
					<td>
						<table style="text-align: left; width: 100%;" border="1" cellpadding="2" cellspacing="2">
							<tbody>
								<tr align="center">
									<td style="background-color: rgb(255, 102, 102);" colspan="2" rowspan="1"> <font size="+1">Positionnement Longitude/Latitude du centre de la carte</font> </td>
								</tr>
								<tr>
									<td>Longitude</td>
									<td style="text-align: left; vertical-align: middle;">
										<div style="text-align: center;" id="longitude">43.33766426918899</div>
									</td>
								</tr>
								<tr>
									<td>Latitude</td>
									<td>
										<div style="text-align: center;" id="latitude">5.3620147705078125</div>
									</td>
								</tr>
								<tr>
								</tr>
								<tr>
									<td></td>
									<td></td>
								</tr>
								<tr align="center">
									<td style="background-color: rgb(153, 255, 153);" colspan="2" rowspan="1"> <font size="+1">Positionnement Longitude/Latitude de votre habitation</font> </td>
								</tr>
								<tr>
									<td>Longitude</td>
									<td style="background-color: rgb(255, 255, 255);">
										<div style="text-align: center;" id="longitude_m"></div>
									</td>
								</tr>
								<tr>
									<td>Latitude</td>
									<td style="background-color: rgb(255, 255, 255);">
										<div style="text-align: center;" id="latitude_m"></div>
									</td>
								</tr>
								<tr>
								</tr>
								<tr>
									<td></td>
									<td></td>
								</tr>
								<tr align="center">
									<td style="background-color: rgb(51, 255, 255);" colspan="2" rowspan="1"> <font size="+1">Positionnement Longitude/Latitude de votre lieu de travail</font> </td>
								</tr>
								<tr>
									<td>Longitude</td>
									<td style="background-color: rgb(255, 255, 255);">
										<div style="text-align: center;" id="longitude_t"></div>
									</td>
								</tr>
								<tr>
									<td>Latitude</td>
									<td style="background-color: rgb(255, 255, 255);">
										<div style="text-align: center;" id="latitude_t"></div>
									</td>
								</tr>
								<tr>
								</tr>
								<tr>
									<td></td>
									<td></td>
								</tr>
								<tr align="center">
									<td style="background-color: rgb(204, 204, 255);" colspan="2" rowspan="1"> <font size="+1">Calcul de la distance domicile/travail</font> </td>
								</tr>
								<tr>
									<td>Distance</td>
									<td style="background-color: rgb(255, 255, 255);">
										<div style="text-align: center;" id="distance"></div>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<script type="text/javascript">
		//<![CDATA[
			var map = new GMap(document.getElementById("map"));
			initmap(map);
		//]]>
		</script>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<p>Donate using PayPal&reg; to jean_gui@yahoo.fr .<p>Contributions via PayPal are accepted in any amount using a credit card or checking account. You can contribute by clicking on this image.
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_xclick">
			<input type="hidden" name="business" value="jean_gui@yahoo.fr">
			<input type="hidden" name="item_name" value="Support for Real's HowTo">
			<input type="hidden" name="item_number" value="realhowto">
			<input type="hidden" name="no_shipping" value="1">
			<input type="hidden" name="return" value="http://membres.lycos.fr/jeanguitou/tests/googlemap/test.html">
			<table width="100%">
				<tr>
					<td>&nbsp;</td>
					<td align="center">
						<input type="image" src="https://www.paypal.com/images/x-click-but04.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" title="Make payments with PayPal - it's fast, free and secure!">
					</td>
					<td>&nbsp;</td>
					</table>
		</form>		
	</body>
</html>

<!--WEBBOT bot="HTMLMarkup" startspan ALT="Site Meter" -->
<script type="text/javascript" language="JavaScript">var site="s14covoiturage"</script>
<script type="text/javascript" language="JavaScript1.2" src="http://s14.sitemeter.com/js/counter.js?site=s14covoiturage">
</script>
<noscript>
<a href="http://s14.sitemeter.com/stats.asp?site=s14covoiturage" target="_top">
<img src="http://s14.sitemeter.com/meter.asp?site=s14covoiturage" alt="Site Meter" border="0"/></a>
</noscript>
<!-- Copyright (c)2005 Site Meter -->
<!--WEBBOT bot="HTMLMarkup" Endspan -->