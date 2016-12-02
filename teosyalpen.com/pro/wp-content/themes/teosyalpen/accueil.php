<?php
/*
Template Name: Accueil
*/
// Include and instantiate the class.
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
get_header();
$idPart = 0;
?>
    
			<?php 
			$idPart++;
			$idPagePart = get_the_ID(); 
			?>
			<section id="part<?php echo $idPart; ?>" class="part1 homeSlide section">
				<div class="hsContent">
					<?php require ('part/part1.php'); ?>
				</div>
			</section>
			
			<?php 
			$idPart++;
			$idPagePart = 10; 
			$imgDatas = ($detect->isMobile()) ? 'datas-mobile.jpg' : 'datas.jpg';
			?>
			<section id="part<?php echo $idPart; ?>" class="part2 homeSlide section">
				<div class="hsContent">
					
					<?php
					if (!$detect->isMobile()) {
					?>
					<div class="partcont hidemobile">
						<img class="bg2" src="/pro/wp-content/themes/teosyalpen/images/datas.png" alt="" /> 
					</div>
					<?php
					}
					?>
					<div class="partcont hidesite">
						<img class="bg2" src="/pro/wp-content/themes/teosyalpen/images/mobile/<?php echo $imgDatas; ?>" alt="" /> 
					</div>
					
					<div class="bas hidemobile">
						<a class="btn next" href="#technology" data-menuanchor="technology">
							<img class="norm" width="17" height="7" src="/pro/wp-content/themes/teosyalpen/images/bg/nextbleufl.png" alt="Next" />
						</a>
					</div>
					<div class="clear"></div>
					
					<!--div class="hidesite">
						<?php //require ('part/part2mobile.php'); ?>
					</div-->
					<?php
					//if (!$detect->isMobile() OR $detect->isTablet() ) {
					?>
					<div>
						<?php //require ('part/part2.php'); ?>
					</div>
					<?php
					//}
					?>
				</div>
			</section>
			
			<?php 
			//$idPart++;
			//$idPagePart = 12; 
			?>
			<!--section id="part<?php echo $idPart; ?>" class="part3 homeSlide section">
					<div class="hsContent">
					<?php require ('part/part3.php'); ?>
					</div>
			</section-->
			
			
			
			<?php 
			$idPart++;
			$idPagePart = 19; 
			?>
			<section id="part<?php echo $idPart; ?>" class="part6 homeSlide section">
					<div class="hsContent" >
					<?php require ('part/part6.php'); ?>
					<div class="hidesite">
					<?php require ('part/part6mobile.php'); ?>
					</div>
					</div>
			</section>
			
			<?php 
			$idPart++;
			$idPagePart = 17; 
			?>
			<section id="part<?php echo $idPart; ?>" class="part5 homeSlide section">
						
					<div class="hsContent">

						<div class="thepart">
							<?php require ('part/part5.php'); ?>
						</div>

					</div>
					
			</section>
			
			<?php 
			$idPart++;
			$idPagePart = 15; 
			?>
			<section id="part<?php echo $idPart; ?>" class="part4 homeSlide section">
					<div class="hsContent">
					<?php require ('part/part4.php'); ?>
					</div>
			</section>

			<?php 
			//$idPart++;
			//$idPagePart = 109; 
			?>
			<!--section id="part<?php echo $idPart; ?>" class="part5b homeSlide section">
						
					<div class="hsContent">
						<div class="hidesite">
							<?php require ('part/part5bmobile.php'); ?>
						</div>
						<?php
						if (!$detect->isMobile() OR $detect->isTablet() ) {
						?>
						<div class="hidemobile">
							<?php require ('part/part5b.php'); ?>
						</div>
						<?php
						}
						?>
					</div>
					
			</section-->

			
			<?php 
			$idPart++;
			$idPagePart = 21; 
			?>
			<section id="part<?php echo $idPart; ?>" class="part7 homeSlide section">
				<div class="hsContent">
					<?php require ('part/part7.php'); ?>
				</div>
			</section>
			


		
<?php
require_once 'footer.php';
?>
