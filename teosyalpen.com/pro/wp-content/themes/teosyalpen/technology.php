<?php
/*
Template Name: Technology
*/
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
get_header();
?>
    
			<?php $idPagePart = get_the_ID(); ?>
	

			
			<section id="" class="part6 homeSlide section">
					<div class="hsContent" >
					<?php require ('part/part6.php'); ?>
					<div class="hidesite">
					<?php require ('part/part6mobile.php'); ?>
					</div>
					</div>
			</section>
			



		
<?php
require_once 'footer.php';
?>
