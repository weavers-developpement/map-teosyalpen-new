{{#location}}
<?php 
$ip = $_SERVER['REMOTE_ADDR'];
//$ip = "109.190.41.5";
$jsonip = file_get_contents("http://freegeoip.net/json/".$ip);
$geolocip = json_decode($jsonip,TRUE);
?>

<li data-markerid="{{markerid}}" id="doc{{markerid}}">
<h2></h2>
	<div class="loc-dist">{{distance}} {{length}}</div>
	<?php //echo "test".$geolocip['latitude']."test"; ?>
	<div class="list-details">
		<div class="list-label">{{marker}}</div>
		<div class="list-content">
			<div id="name" class="loc-name">{{name}}</div>
			<div id="adresse" class="loc-addr marTop11">{{address}}</div>
			<div id="adresse2" class="loc-addr2">{{address2}}</div>
			<div id="city" class="loc-addr3">{{city}}</div>
			<div id="postal" class="loc-addr3">{{postal}}</div>
			<div class="loc-addr3"><a href="" id="itineraire" target="_blank">Itinéraire</a></div>
			<div id="phone" class="loc-phone"><a href="callto:{{phone}}">{{phone}}</a></div>
			<div id="email" class="loc-web"><a href="mailto:{{email}}">{{email}}</a></div>
			<div id="email1" class="loc-web"><a href="mailto:{{email1}}">{{email1}}</a></div>
			<!--<div class="loc-web"><a href="mailto:{{web}}">{{niceURL web}}</a></div>-->
			<div id="web" class="loc-web"><a href="http://{{web}}" target="_blank">{{niceURL web}}</a></div>
			<div id="web1" class="loc-web"><a href="http://{{web1}}" target="_blank">{{niceURL web1}}</a></div>
		</div>
	</div>
</li>
<script>
var latuser= "<?= $geolocip['latitude'] ?>";
var lnguser= "<?= $geolocip['longitude'] ?>";
var ville= "<?= $geolocip['city'] ?>";

$('#itineraire').attr("id", "itineraire"+{{markerid}});

if (ville != "") {
	//console.log("Géolocalisation active");
	var lien = "https://www.google.com/maps/dir/"+latuser+","+lnguser+"/{{lat}},{{lng}}";	
} else {
	//console.log("Géolocalisation inactive");
	var lien = "https://www.google.com/maps/dir/{{lat}},{{lng}}";
}
$('#itineraire'+{{markerid}}).attr("href", lien);

</script>
<script>
	if ("{{name}}" == "false") { $("#doc{{markerid}} #name").hide(); }
	if ("{{address}}" == "false") { $("#doc{{markerid}} #adresse").hide(); }
	if ("{{address2}}" == "false") { $("#doc{{markerid}} #adresse2").hide(); }
	if ("{{city}}" == "false") { $("#doc{{markerid}} #city").hide(); }
	if ("{{postal}}" == "false") { $("#doc{{markerid}} #postal").hide(); }
	if ("{{itineraire}}" == "false") { $("#doc{{markerid}} #itineraire").hide(); }
	if ("{{phone}}" == "false") { $("#doc{{markerid}} #phone").hide(); }
	if ("{{email}}" == "false") { $("#doc{{markerid}} #email").hide(); }
	if ("{{email1}}" == "false") { $("#doc{{markerid}} #email1").hide(); }
	if ("{{web}}" == "false") { $("#doc{{markerid}} #web").hide(); }
	if ("{{web1}}" == "false") { $("#doc{{markerid}} #web1").hide(); }
</script>
{{/location}}
