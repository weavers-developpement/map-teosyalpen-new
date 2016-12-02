<?php
/*
Template Name: injection
*/
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
get_header();
?>
    
	
			<?php $idPagePart = get_the_ID(); ?>

			<section id="" class="part5 homeSlide section">
						
					<div class="hsContent">
						
						<div class="hidesite">
							<?php require ('part/part5mobile.php'); ?>
						</div>
						<?php
						//if ( !$detect->isMobile()  ) {
						?>
						<div class="hidemobile thepart">
							<?php require ('part/part5.php'); ?>
						</div>
						<?php
						//}
						?>
					
					</div>
					
			</section>

			


		
<?php
require_once 'footer.php';
?>
