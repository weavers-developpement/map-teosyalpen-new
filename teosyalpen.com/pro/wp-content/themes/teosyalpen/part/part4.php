<?php 
require ('customfield.php');
$uri1 = 'http://player.vimeo.com/video/'.$evid1;
$uri2 = 'http://player.vimeo.com/video/'.$evid2;
$uri3 = 'http://player.vimeo.com/video/'.$evid3;
$img1 = ($detect->isMobile()) ? 'sabine-zenker-mobile.jpg' : 'sabine-zenker.jpg';
$img2 = ($detect->isMobile()) ? 'innigo-de-felipe-mobile.jpg' : 'innigo-de-felipe.jpg';
$img3 = ($detect->isMobile()) ? 'guillaume-drossard-mobile.jpg' : 'guillaume-drossard.jpg';

$imgPlay = ($detect->isMobile()) ? 'play-mobile.png' : 'play.png';
?>

<div style="display:none" class="fancybox-hidden"><div id="vidtem1" data-id="<?php echo $evid1; ?>" data-width="800" data-height="450"></div></div>
<div style="display:none" class="fancybox-hidden"><div id="vidtem2" data-id="<?php echo $evid2; ?>" data-width="800" data-height="450"></div></div>
<div style="display:none" class="fancybox-hidden"><div id="vidtem3" data-id="<?php echo $evid3; ?>" data-width="800" data-height="450"></div></div>

<div class="partcont">
        <div class="coindroit">
			<div class="clear clear50"></div>
			<h1><?php echo $titre; ?></h1>
        </div>
    <div class="left">
        <div class="tem">
			<h2>
				<a class="vidtem1 name" data-width="800" data-height="450" data-uri="<?php echo $uri1; ?>" href="#vidtem1">
					<?php echo $ename1; ?>
				</a>
			</h2>
			<h3>
				<a class="vidtem1 name" data-width="800" data-height="450" data-uri="<?php echo $uri1; ?>" href="#vidtem1">
					<?php echo $town1; ?>
				</a>
			</h3>
            <div class="clear"></div>
            <a class="vidtem1" data-width="800" data-height="450" data-uri="<?php echo $uri1; ?>" href="#vidtem1">
                <img class="play" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/<?php echo $imgPlay; ?>" alt="Play"/>
                <img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/<?php echo $img1; ?>" alt="Sabine Zenker"/>
            </a>
            <div class="clear hidemobile"></div>
            <p>
                <?php echo $etext1; ?>
            </p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="center">
        <div class="tem">
			<h2>
				<a class="vidtem2 name" data-width="800" data-height="450" data-uri="<?php echo $uri2; ?>" href="#vidtem2">
					<span><?php echo $ename2; ?></span>
				</a>
			</h2>
			<h3>
				<a class="vidtem2 name" data-width="800" data-height="450" data-uri="<?php echo $uri2; ?>" href="#vidtem2">
					<span><?php echo $town2; ?></span>
				</a>
			</h3>
            <div class="clear"></div>
            <a class="vidtem2" data-width="800" data-height="450" data-uri="<?php echo $uri2; ?>" href="#vidtem2">
                <img class="play" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/<?php echo $imgPlay; ?>" alt="Play"/>
                <img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/<?php echo $img2; ?>" alt="Innigo De Felipe"/>
            </a>
            <div class="clear hidemobile"></div>
            <p>
                <?php echo $etext2; ?>
            </p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="right">
        <div class="tem">
			<h2>
				<a class="vidtem3 name" data-width="800" data-height="450" data-uri="<?php echo $uri3; ?>" href="#vidtem3">
					<span><?php echo $ename3; ?></span>
				</a>
			</h2>
			<h3>
				<a class="vidtem3 name" data-width="800" data-height="450" data-uri="<?php echo $uri3; ?>" href="#vidtem3">
					<span><?php echo $town3; ?></span>
				</a>
			</h3>
            <div class="clear"></div>
            <a class="vidtem3" data-width="800" data-height="450" data-uri="<?php echo $uri3; ?>" href="#vidtem3">
                <img class="play" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/<?php echo $imgPlay; ?>" alt="Play"/>
                <img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/<?php echo $img3; ?>" alt="Guillaume Drossard"/>
            </a>	
            <div class="clear hidemobile"></div>
            <p>
                <?php echo $etext3; ?>
            </p>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php
if (!$detect->isMobile() ) {
?>
<div class="clear clear50 hidemobile"></div>
<div class="bas hidemobile">	
    <a class="btn next" href="#meet-us" data-menuanchor="meet-us">
        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/nextorangefl.png" alt="Next" />
    </a>
</div>	
<?php
}
?>
<div class="clear"></div>
