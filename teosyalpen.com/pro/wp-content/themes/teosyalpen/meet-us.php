<?php
/*
Template Name: Meet-us
*/
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
get_header();
?>
    
	
			<?php $idPagePart = get_the_ID(); ?>
			
			<section id="" class="part7 homeSlide section">
								<div class="hsContent">
					<?php require ('part/part7.php'); ?>
					</div>
			</section>
			


		
<?php
require_once 'footer.php';
?>
