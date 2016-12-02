<?php
/*
Template Name: Datas
*/
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
get_header();
?>
    
	

			<?php $idPagePart = get_the_ID(); ?>
			
			<section id="" class="part2 homeSlide section">
					<div class="hsContent">
						
						<div class="hidesite">
							<?php require ('part/part2mobile.php'); ?>
						</div>
						<?php
						//if ( !$detect->isMobile()  ) {
						?>
						<div class="hidemobile">
							<?php require ('part/part2.php'); ?>
						</div>
						<?php
						//}
						?>
					</div>
			</section>


					<div class="clear"></div>

		
<?php
require_once 'footer.php';
?>
