<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
get_header();
?>
    
<meta http-equiv="refresh" content="10;URL='/'" />
			
			<section id="" class="part7 homeSlide section">
					<div class="hsContent">

						<div class="clear clear50"></div>		
						<h1>Page not found</h1>
						<div class="clear clear50"></div>
						<div class="clear clear40"></div>


						<div class="mid mid2 nobuy">			
							<p>
							The requested resource could not be found but may be available again in the future. Subsequent requests by the client are permissible.
							</p>
						<div class="clear clear50"></div>
						<div class="clear clear40"></div>
							<div class="bloc">
								<a class="btn rollover try" href="/">
									<span>Return to Homepage</span>
									<span class="hov">Return to Homepage</span>
								</a>
								<div class="clear"></div>
							</div>
							<div class="clear clear50"></div>
						</div>

					
					</div>
			</section>
			


		
<?php
require_once 'footer.php';
?>
