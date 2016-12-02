<?php 
if (isset($_GET['lang'])) {
	$lang = '?lang='.$_GET['lang'];
}
else if (isset($_SESSION['lang'])) {
	$lang = '?lang='.$_SESSION['lang'];
}
else {
	$lang = '?lang=fr';
}
?>

<style type="text/css">
	body {
		margin: 0;
		padding: 0;
	}
	.iframe-map {
		width: 100%;
		height: 100%;
	}
</style>
<iframe src="http://map.teosyalpen.com/<?= $lang; ?>" scrolling="no" frameborder=0 class="iframe-map">