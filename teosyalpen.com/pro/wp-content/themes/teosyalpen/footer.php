<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
$idPart = 0;
?>




<div class="footer part9 section homeSlide">
    <div><p>Technology made in Switzerland by <strong><a href="http://www.juvaplus.com/" target="_blank">Juvaplus</a></strong></p></div>
    <ul>
        <li><a class="fancybox" href="#legal-notice" data-uri="<?php echo get_permalink(204); ?>">Legal notice</a></li>
        <li><a class="fancybox hidemobile"  href="#contact_form_pop">Contact</a></li>
    </ul>
</div>





<div class="nav">
    <div class="navcont" >
        <ul class="menu" id="menu">
            <li data-menuanchor="home">
                <a href="/" class="rollover apart<?php echo $idPart; ?> <?php if ($post->ID == 2) echo 'current'; ?>">
                    <span class="picto norm"><span class="home"></span></span>
                    <span class="picto hov"><span class="home"></span></span>
                    <span class="title">Home</span>
                </a>
            </li>	
		<?php 
		$idPart++;
		?>
            <li data-menuanchor="facts">
                <a href="<?php echo get_permalink(10); ?>" class="rollover apart<?php echo $idPart; ?> <?php if ($post->ID == 10) echo 'current'; ?>">
                    <span class="picto norm"><span class="market"></span></span>
                    <span class="picto hov"><span class="market"></span></span>
                    <span class="title">Facts</span>
                </a>
            </li>	
		<?php 
		//$idPart++;
		?>
            <!--li data-menuanchor="product">
                <a href="<?php echo get_permalink(12); ?>" class="rollover apart<?php echo $idPart; ?> <?php if ($post->ID == 12) echo 'current'; ?>">
                    <span class="picto norm"><span class="product"></span></span>
                    <span class="picto hov"><span class="product"></span></span>
                    <span class="title">Product</span>
                </a>
            </li-->	
			
		<?php 
		$idPart++;
		?>
            <li data-menuanchor="technology">
                <a href="<?php echo get_permalink(19); ?>" class="rollover apart<?php echo $idPart; ?> <?php if ($post->ID == 19) echo 'current'; ?>">
                    <span class="picto norm"><span class="technology"></span></span>
                    <span class="picto hov"><span class="technology"></span></span>
                    <span class="title">Technology</span>
                </a>
            </li>
			
		<?php 
		$idPart++;
		?>
            <li data-menuanchor="injection">
                <a href="<?php echo get_permalink(17); ?>" class="rollover apart<?php echo $idPart; ?> <?php if ($post->ID == 17) echo 'current'; ?>">
                    <span class="picto norm"><span class="injection"></span></span>
                    <span class="picto hov"><span class="injection"></span></span>
                    <span class="title">Injection</span>
                </a>
            </li>	
			
		<?php 
		$idPart++;
		?>
            <li data-menuanchor="experts">
                <a href="<?php echo get_permalink(15); ?>" class="rollover apart<?php echo $idPart; ?> <?php if ($post->ID == 15) echo 'current'; ?>">
                    <span class="picto norm"><span class="experts"></span></span>
                    <span class="picto hov"><span class="experts"></span></span>
                    <span class="title">Experts</span>
                </a>
            </li>	
		<?php 
		//$idPart++;
		?>
            <!--li data-menuanchor="universal">
                <a href="<?php echo get_permalink(109); ?>" class="rollover apart<?php echo $idPart; ?> <?php if ($post->ID == 109) echo 'current'; ?>">
                    <span class="picto norm"><span class="universal"></span></span>
                    <span class="picto hov"><span class="universal"></span></span>
                    <span class="title">Universal</span>
                </a>
            </li-->	

	
		<?php 
		$idPart++;
		?>
            <li data-menuanchor="meet-us">
                <a href="<?php echo get_permalink(21); ?>" class="rollover apart<?php echo $idPart; ?> <?php if ($post->ID == 21) echo 'current'; ?>">
                    <span class="picto norm"><span class="meet-us"></span></span>
                    <span class="picto hov"><span class="meet-us"></span></span>
                    <span class="title">Meet Us</span>
                </a>
            </li>
        </ul>
        <div class="clear"></div>
        <ul class="menurs">
                <li>
                        <a target="_blank" href="https://www.facebook.com/teosyalpen" class="rollover">
                                <span class="picto norm"><span class="facebook"></span></span>
                                <span class="picto hov"><span class="facebook"></span></span>
                        </a>
                </li>
                <li>
                        <a target="_blank" href="https://twitter.com/teoxane" class="rollover">
                                <span class="picto norm"><span class="twitter"></span></span>
                                <span class="picto hov"><span class="twitter"></span></span>
                        </a>
                </li>
        </ul>
    </div>
</div>

<div class="box" id="legal-notice" style="display:none;">
	<?php
	$post_part = get_page(204);
	$content = apply_filters('the_content', $post_part->post_content);
	echo $content;
	?>
</div>

<div style="display:none" class="fancybox-hidden">
    <div id="contact_form_pop">
        <?php
        $post_part = get_page(32);
        $content = apply_filters('the_content', $post_part->post_content);
        echo $content;
        ?>
    </div>
</div>


<!-- WP-Minify JS -->


<?php wp_footer(); ?>

<?php
if (!$detect->isMobile() && false) {
    ?>

    <!--[if gt IE 8]><!-->	

    <script src="/pro/wp-content/themes/teosyalpen/js/waypoints.min.js" type="text/javascript" ></script>

    <!--script src="/pro/wp-content/themes/teosyalpen/js/jquery.panelSnap.js" type="text/javascript" ></script-->

    <script src="/pro/wp-content/themes/teosyalpen/js/skrollr.js" type="text/javascript" ></script>
    <!--[if lt IE 9]>
    <script src="/pro/wp-content/themes/teosyalpen/js/skrollr.ie.min.js" type="text/javascript"></script>
    <![endif]-->

    <!--script src="/pro/wp-content/themes/teosyalpen/js/jquery.ba-bbq.js" type="text/javascript" ></script-->


    <!--<![endif]-->



    <?php
}
?>



</body>
</html>
