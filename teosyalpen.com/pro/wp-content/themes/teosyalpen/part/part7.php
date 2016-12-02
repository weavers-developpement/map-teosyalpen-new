<?php 
require ('customfield.php');
$imgPen = ($detect->isMobile()) ? 'pen6-mobile.png' : 'pen6.png';
?>
<div class="clear clear50"></div>		
<h1><?php echo $surtitre; ?></h1>
<div class="clear clear50"></div>
<div class="clear clear40"></div>
<img class="pen6" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/<?php echo $imgPen; ?>" alt="Teosyal Pen"/>
<div class="clear clear40"></div>


<?php
$class = "";
$class = "nobuy";
?>


<div class="mid mid2 <?php echo $class ?>">			
    <div class="bloc">
        <a class="btn rollover try hidemobile fancybox" href="#contact_form_pop">
            <span>meet us</span>
            <span class="hov">meet us</span>
        </a>
        <a class="btn rollover try hidesite" href="mailto:<?php echo $email; ?>">
            <span>meet us</span>
            <span class="hov">meet us</span>
        </a>
        <div class="clear"></div>
    </div>
    <h2 class=""><?php echo $titre; ?></h2>
    <p class=" soustitre"><?php echo $soustitre; ?></p>

        <?php
        $post_part = get_page($idPagePart);
        $content = apply_filters('the_content', $post_part->post_content);
        echo $content;
        ?>
		
    <div class="clear clear40"></div>	
    <div class="clear"></div>
	<?php
	if (!$detect->isMobile() ) {
	?>
	<div class="buttons hidemobile">
		<a class="btn btn-dl rollover brochure" href="<?php echo  wp_get_attachment_url($brochure); ?>" target="_blank">
		    <span>Leaflet</span>
		    <span class="hov">Leaflet</span>
		</a>
		<a class="btn btn-dl rollover notice" href="<?php echo  wp_get_attachment_url($notice); ?>" target="_blank">
		    <span>notice</span>
		    <span class="hov">notice</span>
		</a>
		<a class="btn btn-dl rollover instructions" href="<?php echo  wp_get_attachment_url($instructions); ?>" target="_blank">
		    <span>Practical Guide</span>
		    <span class="hov">Practical Guide</span>
		</a>
		<div class="clear"></div>
	</div>
	<?php
	}
	?>
</div>

<div class="clear"></div>

<div class="bottom hidemobile">
    <div class="clear"></div>
</div>
