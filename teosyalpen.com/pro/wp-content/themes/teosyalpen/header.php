<?php
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$simulateMobile = true;
$is_webkit = false;

if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'webkit') !== false) {
    $is_webkit = true;
}

$mail_contact = 'info@teoxane.com';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]>      <html class="ie10+"> <![endif]-->
<!--[if !IE]><!-->     <html class="notie"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!-- Avant tout css pour creer le cookie retina -->
        <script type='text/javascript' src='/pro/wp-content/plugins/wp-retina-2x/js/retina-perso.js?ver=1.4.1'></script>
        <!-- WP-Minify CSS -->

		<script type="text/javascript">
				var IS_TABLET = false;
		</script>
        <?php
        if ($detect->isTablet()) {
            ?>
			<script type="text/javascript">
					var IS_TABLET = true;
			</script>
            <?php
        }
        ?>
		
        <title><?php wp_title('|', true, 'right'); ?></title>
		
		
        <?php wp_head(); ?>

        <!-- META FOR IOS & HANDHELD -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" type="image/x-icon" href="/pro/wp-content/themes/teosyalpen/images/favicon.ico" />

        <link rel="apple-touch-icon" href="/pro/wp-content/themes/teosyalpen/images/ios/Icon.jpg" />
        <link rel="apple-touch-icon" sizes="72x72" href="/pro/wp-content/themes/teosyalpen/images/ios/Icon-72.jpg" />
        <link rel="apple-touch-icon" sizes="114x114" href="/pro/wp-content/themes/teosyalpen/images/ios/Icon@2x.jpg" />
        <link rel="apple-touch-icon" sizes="144x144" href="/pro/wp-content/themes/teosyalpen/images/ios/Icon-72@2x.jpg" />



        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-touch-fullscreen" content="yes" />

        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">


        <!-- //META FOR IOS & HANDHELD -->


        <!--[if IE 9]>  
                <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
        <![endif]-->

        <!--[if lt IE 9]> 
                <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
                <link href="/pro/wp-content/themes/teosyalpen/css/ie8.css" media="all" rel="stylesheet" type="text/css" />
                <script type="text/javascript">
                        var IE8 = true;
                </script>
        <![endif]-->

        <!--[if lt IE 8]> 
                <link href="/pro/wp-content/themes/teosyalpen/css/ie7.css" media="all" rel="stylesheet" type="text/css" />
                <script type="text/javascript">
                        var IE7 = true;
                </script>
        <![endif]-->



        <!--[if gt IE 8]><!-->

        <link rel='stylesheet' media="all and (min-width: 701px) and (max-width: 800px)" href='/pro/wp-content/themes/teosyalpen/css/tablet.css' />
        <link rel="stylesheet" media="(orientation:landscape) and (max-width: 799px) and (max-height: 399px)" href="/pro/wp-content/themes/teosyalpen/css/landscape.css">


        <?php
        if ($detect->isTablet() && false) {
            ?>
            <link rel="stylesheet"  href="/pro/wp-content/themes/teosyalpen/css/ipadonly.css" />
            <?php
        }
        ?>


        <!--<![endif]-->

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-44528935-4', 'auto');
		  ga('send', 'pageview');

		</script>





    </head>
    <body <?php body_class("loading"); ?>>
        <div class="loader table">
            <div class="tr">
                <div class="td">
                    <div class="logo"><img class="" src="/pro/wp-content/themes/teosyalpen/images/logo2.png" alt="" width="205" height="41" style="max-width:50%; height:auto;" /></div>
                    <div class="clear"></div>
                    <h3>Let your</h3> 
                    <div class="center"><div class="traitblanc hidemobile"></div>
                        <div class="is">
                            <img alt="" src="/pro/wp-content/themes/teosyalpen/images/loader.gif" class="loadgif">
                            <span>art</span></div>
                        <div class="traitblanc hidemobile"></div></div>	
                    <h3>speak</h3>

                    <div class="clear"></div>
                    <p class="hideland">loading...</p>
                    <p class="hidemobile hidesite">Please rotate your phone</p>
                    <div class="clear"></div>

                </div>
            </div>
        </div>


