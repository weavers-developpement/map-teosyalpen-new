<?php 
require ('customfield.php');
$imgPen = ($detect->isMobile()) ? 'pen1-mobile.png' : 'pen1.png';
?>
<div style="display:none" class="fancybox-hidden"><div class="vimeo1" id="vimeo1" data-id="90798810" data-width="800" data-height="450"></div></div>
<?php require ('customfield.php'); ?>
<div class="logocont">
<img class="logo" src="/pro/wp-content/themes/teosyalpen/images/logo.png" alt="<?php echo $titre; ?>"/>
</div>
<a href="http://www.teoxane.com/" target="_blank" class="logobas hidemobile"><img src="/pro/wp-content/themes/teosyalpen/images/logobas.png" alt="<?php echo $titre; ?>"/></a>
<div class="partcont">
    <img class="pen1" src="/pro/wp-content/themes/teosyalpen/images/<?php echo $imgPen; ?>" data-depth="0.7" alt="<?php echo $titre; ?>"/>
    <div class="content">
		<?php 
		if($surtitre != '') {
			?>
			<p class="slogan"><?php echo $surtitre; ?></p>
			<?php 
		}
		?>
        <div class="clear"></div>
        <h1><?php echo $titre; ?></h1>
        <h2><?php echo $soustitre; ?></h2>
        <div class="clear"></div>
        <div class="texte">
            <?php
            $post_part = get_page($idPagePart);
            $content = apply_filters('the_content', $post_part->post_content);
            echo $content;
            ?>
        </div>	
        <div class="clear"></div>			
    </div>
    <div class="clear"></div>
    <!--a class="rollover watch vimeov2 hidemobile" data-width="800" data-height="450" href="#vimeo1">
            <span>Watch the video</span>
            <img class="norm" width="234" height="56" src="/pro/wp-content/themes/teosyalpen/images/bg/watch.png" alt="Watch the video" />
            <img class="hov" width="234" height="56" src="/pro/wp-content/themes/teosyalpen/images/bg/watchhover.png" alt="Watch the video" />
    </a>
    <a class="rollover watch vimeov2 hidesite" data-width="800" data-height="450" href="#vimeo1">
            <span>Watch the video</span>
            <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/bg/watchmob.png" alt="Watch the video" />
            <img class="hov" src="/pro/wp-content/themes/teosyalpen/images/bg/watchhovermob.png" alt="Watch the video" />
    </a-->
    <div class="clear"></div>
    <?php
    $class = "";
    //if ( !$detect->isMobile() && !$detect->isTablet()  ) {
    if (false) {
        ?>


        <div class="bloc">
            <a class="rollover buy" href="#">
                <span>buy</span>
                <span class="hov">Coming soon</span>
                <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/bg/buy.png" alt="Buy" />
                <img class="hov" src="/pro/wp-content/themes/teosyalpen/images/bg/buyhover.png" alt="Buy" />
            </a>
        </div>
        <p class="or">OR</p>

        <?php
    } else
        $class = "nobuy";
    ?>

    <!--div class="bloc <?php echo $class ?>">
        <a class="rollover try fancybox" href="#contact_form_pop">
            <span>try</span>
            <span class="hov">try</span>
            <img class="norm" width="161" height="56" src="/pro/wp-content/themes/teosyalpen/images/bg/try.png" alt="Try" />
            <img class="hov" width="161" height="56" src="/pro/wp-content/themes/teosyalpen/images/bg/tryhover.png" alt="Try" />
        </a>
    </div>
    <div class="clear"></div-->
</div>
<div class="clear"></div>
<div class="bas hidemobile">
    <a class="btn next" href="#facts" data-menuanchor="facts">
        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/nextorangefl.png" alt="Next" />
    </a>
    <a class="txtnext" href="#facts" data-menuanchor="facts">
		<span>discover more</span>
    </a>
</div>
