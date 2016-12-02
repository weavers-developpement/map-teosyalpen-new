<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package teosyalpen
 */

get_header();
?>

	<!-- Map Section -->
	 <section id="mapSection" class="section " style="height:100%; width: 100%;">
	  	<section class="contentSection fp-scrollable1">
	<!-- Header Section -->
		 <header>
			<div class="container">
				<div class="row">
					<div class="pull-left logo"><img src="<?php echo get_template_directory_uri(); ?>/images/teosyalpen_laboratories_logo_2.png" alt="Teosyalpen Laboratories"/></div>
				</div>
			</div>
		</header>
	   <!-- Map Content Section -->
	    <section id="doctorsPageContent" class="innerContent">
		  <div class="container">
				<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-5">
					<div class="mapSearchWrap" id="mapSearchWrap">
						<h1><?php echo str_replace('<sup>®</sup>', '<sup>&reg;</sup>', __('Find a doctor equipped with Teosyal<sup>®</sup>Pen near you' , 'twentyeleven')); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/plusminus.png" id="plus" /></h1>
						<div class="innerForm">
							<form id="bh-sl-user-location" method="post" action="#">
								<div class="input-group stylish-input-group">
								    <input type="text" class="form-control" id="bh-sl-address" name="bh-sl-address" placeholder="<?php echo str_replace('…', '...', __('Address, city, zip code…' , 'twentyeleven')); ?>" value="" >
										<span class="input-group-addon" id="bh-sl-submit">
											 <i class="fa fa-search fa-flip-horizontal"></i>
										</span>
								</div>
								<div class="select-style">
								  <!--<select id="bh-sl-region" name="bh-sl-region">
									<option value="FR" >FRANCE</option>
									<option value="UK" selected>UK</option>
                                    <option value="IT">ITALY</option>
								  </select>-->
								  <?php country_list(); ?>
								</div>
							</form>
							<div class="searchResults setDefaultHeight padding-20" id="listcontentScroll">
								<div id="map-container" class="bh-sl-map-container">
								  <div class="bh-sl-loc-list">
									  <ul class="list"></ul>
								  </div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Map Controls -->
				 <div id="controlmap">
				  <div class="pantopicon"><span id="pantopicon"></span></div>
				  <div class="panlefticon"><span id="panlefticon"></span></div>
				  <div class="panrighticon"><span id="panrighticon"></span></div>
				  <div class="panbottomicon"><span id="panbottomicon"></span></div>
				  <div class="zoominicon"><span id="zoominicon"></span></div>
				  <div class="zoomouticon"><span id="zoomouticon"></span></div>
				</div>
				<!-- Map Controls -->


			 </div>
		  </div>
	   </section>
	</section>
	  <div class="bh-sl-container">
		<div class="bh-sl-form-container">
		  <div id="bh-sl-map" class="bh-sl-map"></div>
		</div>
	  </div>
	  <!--<div class="map-cover"></div>-->
	</section>
	<!-- Map Section end -->

	<?php if(function_exists(import_json_teosyalpen) && isset($_GET['import']) && $_GET['import'] == true) import_json_teosyalpen(); ?>

<?php get_footer();