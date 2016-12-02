<?php
/*
Template Name: Universal
*/
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
get_header();
?>

			<?php $idPagePart = get_the_ID(); ?>
			
			<section id="" class="part5b homeSlide section">
						<div class="hidesite">
							<?php require ('part/part5bmobile.php'); ?>
						</div>
						<?php
						//if ( !$detect->isMobile()  ) {
						?>
						<div class="hidemobile">
							<?php require ('part/part5b.php'); ?>
						</div>
						<?php
						//}
						?>
					
			</section>
			



		
<?php
require_once 'footer.php';
?>
