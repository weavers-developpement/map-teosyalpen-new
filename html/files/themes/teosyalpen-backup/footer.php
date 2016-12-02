<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package teosyalpen
 */

?>

	</div><!-- #content -->

</div><!-- #page -->
<?php
require 'vendor/autoload.php';

$default_language = 'fr';

$gi = geoip_open("GeoIP.dat",GEOIP_STANDARD);
$lang = strtolower(geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']));
if($lang == '') {
	$lang = $default_language;
}
geoip_close($gi);
$langurl = $_GET['lang'];
if($langurl == '') {
	$langurl = $default_language;
}
?>

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/app.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/pkgd.min.js"></script>
<script>
//alert('lang actuelle : <?= $lang ?>');
//alert('lang de l url : <?= $langurl ?>');
if('<?= $lang ?>' !== '<?= $langurl ?>') {
	//alert('redirect : http://local-teosyalpen.weavers.fr/?lang=<?= $lang ?>');
	//document.location.href="/?lang=<?= $lang ?>";
}
</script>
<?php 
/*$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$language = $language{0}.$language{1};
echo $language;*/
?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/handlebars.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/libs/jquery.nicescroll.min.js"></script>
<!-- changed the google map version to 3.21 because in version 3.22 the control pan is deprecated -->
<script src="http://maps.google.com/maps/api/js?v=3.21&sensor=false&libraries=places&language=<?= ICL_LANGUAGE_CODE ?>"></script>
<script src="http://www.google.com/jsapi" language="javascript"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/storeLocator/jquery.storelocator.js"></script>
<script>
	user_country = '<?= strtoupper($lang); ?>';
	if(user_country == 'DE') {
		user_country = "GR";
	} else if (user_country == 'EN') {
		user_country = "UK";
	} else if (user_country == 'FR' || user_country == 'IT') {
		// Keep the value;
	} 
	else if (!$('.country_selected').val()) {
		user_country = $('.country_selected').val();
	}
	else {
		user_country = 'FR';
	}
	console.log(user_country);
	user_city = '';
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
		
<script type="text/javascript">
		function popup(url)
		{
		 params  = 'width='+screen.width;
		 params += ', height='+screen.height;
		 params += ', top=0, left=0'
		 params += ', fullscreen=yes';

		 newwin=window.open(url,'windowname4', params);
		 if (window.focus) {newwin.focus()}
		 return false;
		}

		function initialize() {
	var options = {
	  // types: ['(cities)'],		  
	};
	var input = document.getElementById('bh-sl-address');
	new google.maps.places.Autocomplete(input, options);
 } 	 
 initialize();


</script>

</body>
</html>
