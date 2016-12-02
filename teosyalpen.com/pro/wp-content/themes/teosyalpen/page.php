<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
get_header();
the_post();
?>
    <section class="part7">
	
			<?php //$idPagePart = get_the_ID(); ?>
			

<h1><?php the_title(); ?></h1>
			
			
								<div class="pageContent">
								<?php the_content(); ?>
					</div>
			<!--section id="" class="part7 homeSlide section">
								<div class="hsContent">
					<?php //require ('part/part7.php'); ?>
					</div>
			</section-->
			
</section>

		
<?php
require_once 'footer.php';
?>
