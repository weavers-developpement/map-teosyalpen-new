<?php
include_once('ip.php');
session_start();
if(!isset($_SESSION['lang'])){
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], '0','2') ;
    if($lang == 'fr' || $lang == 'de' || $lang == 'it' || $lang == 'es'){
        $redirect = 'http://103.3.229.181/teosyalpen/'.$lang;
        header('Location:' .$redirect);
        die();
    }
}
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content = "width = device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Teosyalpen</title>
    <!-- Bootstrap -->
	<link href="css/style.min.css?vr=1.0" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/storelocator.css" />
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<body>
	<!-- Mobile landscMode -->
	<div class="landscMode">
      <div class="container">
    <div class="row">
     <div class="mobile-land"><img class="logoHome" src="images/teosyalpen_laboratories_logo_popup.png" alt="Teosyalpen Laboratories"/></div>
          <div class="preloaderLand">
              <h1 id="landscMode-contant">Please rotate the screen</h1>
          </div>

        </div>
      </div>
    </div>

	<!-- Preloader -->
	 <div class="preloader"></div>
	<div id="fullpage" class="enWrap">
	<div class="wrapper">
	<!-- Home Section -->
	<section id="homeBg" class="section">
		<section class="contentSection">
	<!-- Header Section -->
		<header>
		<div id="mobile-nav" class="mobile-nav"><i class="fa fa-bars"></i></div>
			<div class="container">
				<div class="row">
					<div class="pull-left logo desktopLogo"><img class="logoHome" src="images/teosyalpen_laboratories_home_logo.png" alt="Teosyalpen Laboratories"/></div>
					<div class="pull-left logo mobileLogo"><img class="logoHome" src="images/teosyalpen_laboratories_logo.png" alt="Teosyalpen Laboratories"/></div>
					<div class="pull-right"><a href="javascript: void(0)" onclick="popup('http://www.teosyalpen.com/pro/')"  class="proBtn proBtnHome">PRO<i class="fa fa-stethoscope fa-flip-horizontal faHome"></i></a></div>
        </div>
			</div>
		</header>

		<!-- Homepage Content Section -->
		<article class="innerContent" id="homeContent">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-5 hide-homeImg">
						<img id="hide-homeImgSeringue" src="images/seringue.png"/>
						<img src="images/teosyalpen_homebg.png" class="img-responsive imgCenter"/>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4 nopad">
						<div class="innerTxt">
							<h1>Why suffer in the <span> name of beauty?</span></h1>
							<p>Are you interested in<span class="innerTxtclr"> hyaluronic acid injections,</span> but fear pain or a long recovery time?</p>
							<p>There’s no need to suffer in the name of
							beauty. Thanks to TEOSYAL<sup>®</sup>PEN, <span class="innerTxtclr"> gentle injections are possible<sup>1</sup>.</p>
							 <a class="btn btn-primary contentBtn" href="#momdocteur" role="button">Practitioner finder<i class="fa fa-map-marker"></i></a> 
						</div>
					</div>

					<div id="homeSeringue" class="col-xs-12 col-sm-6 col-md-7 col-md-offset-1">
						<img src="images/seringue.png" alt="seringue" class="img-responsive"/>
					</div>
				</div>
			</div>
		</article>
		</section>

		<div class="arrow_scroll">
			<div class="iconArrow" data-menuanchor="natural"><!--<a href="#natural">--><i class="fa fa-angle-down"></i><span>Scroll down</span></a></div>
		</div>
	</section>
	<!-- Home Section End-->

	<!-- Natural Section -->
	<section id="naturalPageContent" class="section">
		<section class="contentSection">
	<!-- Header Section -->
		<header>
		<div id="mobile-nav" class="mobile-nav"><i class="fa fa-bars"></i></div>
			<div class="container">
				<div class="row">
					<div class="pull-left logo"><img src="images/teosyalpen_laboratories_logo_2.png" alt="Teosyalpen Laboratories"/></div>
					<div class="pull-right"><a href="javascript: void(0)" onclick="popup('http://www.teosyalpen.com/pro/')"  class="proBtn proBtnHome">PRO<i class="fa fa-stethoscope fa-flip-horizontal faHome"></i></a></div>
				</div>
			</div>
		</header>
	<!-- Natural Content Section -->
		<article class="innerContent" id="naturalPageContent">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<img src="images/teosyalpen_img1.png" alt="Teosyalpen Laboratories" class="img-responsive"/>

					</div>
					<div class="col-xs-12 col-sm-6 col-md-1"></div>
					<div class="col-xs-12 col-sm-5 col-md-4">
						<div class="innerTxt">
							<h1>What are <span>hyaluronic acid injections?</span></h1>
							<p>Hyaluronic acid is an <span class="innerTxtclr">essential skin component.</span> It acts like a
sponge that retains water and <span class="innerTxtclr">keeps the skin moisturized, plumped and healthy.</span></p>
							<p>As we lose 50 % of our hyaluronic acid between the age of 40 and 50 years old<sup>2</sup>, the skin becomes dry, thin and fragile. </p>
							<p>In order to help <span class="innerTxtclr">reduce the signs of ageing,</span> hyaluronic acid
gels can be injected within the skin, where <span class="innerTxtclr">it will act as a filler or a “Beauty Booster”.</span></p>

							<a class="btn btn-primary contentBtn" href="http://www.teoxane.com/en/my-first-injection" role="button" target="_blank">My first injection<i class="iconsprite injectionicon"></i></a>
						</div>
					</div>


				</div>
			</div>

		</article>
		 	<div class="footerTxt">
					<ul>
						<li><sup>2</sup> The Observatoire des Cosmétiques. October 2010.</li>
					<!-- 	<li>* Beauty Accelerator</li> -->

					</ul>
			</div>
		</section>

	</section>
	<!-- Natural Section End -->
	<!-- Slider Section -->
	<section id="sliderContent" class="section">
		<section class="contentSection slideimgheight">
 		<!-- Slider Content Section -->
		<section id="doctor-slider" >
		<div class="container-fluid nopad ">
			<div class="row-fluid">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			  <div class="carousel-inner " role="listbox">
					<div class="item active item1" id="item1">
						<!-- Header Section -->
							<header>

						<div id="mobile-nav" class="mobile-nav"><i class="fa fa-bars"></i></div>
							<div class="container1">
								<div class="row1">
									<div class="pull-left logo marginOffetleft"><img src="images/teosyalpen_laboratories_logo.png" alt="Teosyalpen Laboratories"/></div>
                  <div class="pull-right marginOffetright"><a href="javascript: void(0)" onclick="popup('http://www.teosyalpen.com/pro/')"  class="proBtn proBtnHome">PRO<i class="fa fa-stethoscope fa-flip-horizontal faHome"></i></a></div>
								</div>
							</div>

						</header>


					<div class="row-fluid">
						<div class="col-xs-12 col-sm-7 col-md-6 slideimgheight slideimgheight1">
							<div class="slideimgwrap">
								<div class="slideimg1"></div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-4  slideContentHeight slideContentHeight1">
							<div class="innerTxt slidebotTxt sliderTxt1">
							<h1><span class="hide1">Gentle injections with the first, cordless, motorised</span> hyaluronic acid injection system</h1>
							<p>A <span class="innerTxtclr"> natural result, the absence of side effects</span> and <span class="innerTxtclr">pain </span> are, for you, essential criteria regarding filler injections<sup>1</sup>.</p>
							<p>TEOSYAL<sup>®</sup>PEN was created <span class="innerTxtclr">for you and the practitioners</span> who want to bring filler injections at a new level of expertise. TEOSYAL<sup>®</sup>PEN is a unique electronic dispenser <span class="innerTxtclr">specifically designed for hyaluronic acid filler injections</span> </p>
							</div>
							<div class="footerTxt footerTxt1">
								<ul>
                  <li><sup>1</sup> Kantar Health. The European TEOSYAL<sup>®</sup>PEN trial included 30 physicians and 236
                    patients. 42 patients had never received manual injection with a hyaluronic acid-based
                    filler. Report N°40HB64. 2014. “Achieving a natural result”, “not having side effects”
                    and “not feeling pain” are qualitative criteria assessed on a scale of 0 (not important)
                    to 5 (very important). Here are results for “important” (4) to “very important” (5).</li>
  								<li>The TEOSYAL<sup>®</sup>PEN is a non-sterile device intended to assist medical practionners in
  								  injecting dermal fillers. Manufactured in Switzerland by JuvaPlus. Contraindications: It is the practionner’s full responsibility to read
    								and follow the instructions for use in order to avoid any adverse reactions or
    								complaints. For further information, please read carefully the user guide by asking your practitioner for the one provided in the box.
    								If you are a patient, please refer also to your doctor for more details about your
    								treatment. TEOSYAL<sup>®</sup>PEN is a medical device of class IIa (CE marking 0434). Filling
    								products treatment may require several retouches during time in order to obtain the
    								desired correction. </li>
							  </ul>
							</div>
						</div>

					</div>
				</div>
				<div class="item item2" id="item2">
				<!-- Header Section -->
						<header>
							<div id="mobile-nav" class="mobile-nav"><i class="fa fa-bars"></i></div>
								<div class="container1">
								<div class="row1">
									<div class="pull-left logo marginOffetleft"><img src="images/teosyalpen_laboratories_logo_2.png" alt="Teosyalpen Laboratories"/></div>
									<div class="pull-right marginOffetright"><a href="javascript: void(0)" onclick="popup('http://www.teosyalpen.com/pro/')"  class="proBtn proBtnHome">PRO<i class="fa fa-stethoscope fa-flip-horizontal faHome"></i></a></div>
								</div>
							</div>
						</header>
				 		<div class="row-fluid">
						<div class="col-xs-12 col-sm-5 col-md-5 marginOffetleftTxt slideContentHeight slideContentHeight2">
							<div class="innerTxt sliderBarContent sliderTxt2" id="indicator-container">
								<h1 class="slideheader2"><span>Gentle injection,</span>a new level of comfort</h1>
								<div class="row">
								   <div class="col-xs-12 col-sm-8 col-md-4 vcenter">
									<div class="indicator">
											<div class="outer2">
												<div class="inner inner2" id="inner1" data-to="70" data-speed="1000">70</div>
												<div class="title">of patients</div>
											</div>
										</div>
								  </div>
								   <div class="col-xs-12 col-sm-12 col-md-7 vcenter colLeftPadnone">
									<p class="progressTxt">For 70% of patients, the <span class="innerTxtclr">intensity of pain was assessed at 0 or 1</span> during injections with TEOSYAL<sup>®</sup>PEN </span>versus 18% for manual injections<sup>1</sup>.</p>
								  </div>
								</div>

								<div class="row  padtop75 clearfix">
								  <div class="col-xs-12 col-sm-8 col-md-4 vcenter">
									<div class="indicator">
											<div class="outer1">
											<div class="inner22 innerImg"></div>
												<div class="title headTxt">FASTER <span>recovery</span></div>
												<!-- <div class="inner inner1" id="inner1">faster</div> -->
												<div class="title"></div>
											</div>
										</div>
								  </div>
								     <div class="col-xs-12 col-sm-12 col-md-7 vcenter colLeftPadnone">

									<p class="progressTxt">Afterwards, you can <span class="innerTxtclr">quickly resume normal activities,</span> such as going back to work the same day.</p>

								  </div>
								</div>

								<div class="row padtop75 clearfix">
								    <div class="col-xs-12 col-sm-12 col-md-4 vcenter">
									<img src="images/patients_img.png" class="img-responsive patientsImgAlign"alt="TEOSYALPEN" />
								  </div>
								    <div class="col-xs-12 col-sm-12 col-md-7 vcenter colLeftPadnone">
									<p class="progressTxt">9/10 of patients would <span class="innerTxtclr"> prefer to have their next injections with TEOSYAL<sup>®</sup>PEN</span> (90.6%) rather than manually <sup>1</sup>.</p>

									<p class="progressTxt">9/10 of patients would <span class="innerTxtclr">recommend TEOSYAL<sup>®</sup>PEN</span> to their friends (91.7%) rather than manual injection<sup>1</sup>.</p>
								  </div>
								</div>

							</div>
      					<div class="footerTxt footerTxt2">
									<ul>
  										<li><sup>1</sup>Kantar Health. The European TEOSYAL<sup>®</sup>PEN trial included 30 physicians and 236 patients. 42 patients had never received manual injection with a hyaluronic acid-based filler. Report N°40HB64. 2014. Intensity of pain by the patients was assessed on a scale from 0 (no pain) to 5 (important pain).</li>
									</ul>
			        </div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 slideimgheight slideimgheight2 marginOffetrightImg">
							<div class="slideimgwrap">
								<div class="slideimg2"></div>
							</div>
						</div>
					</div>



				</div>

					<!-- Slide -->
				<div class="item item3" id="item3">
				<!-- Header Section -->
						<header>

						<div id="mobile-nav" class="mobile-nav"><i class="fa fa-bars"></i></div>
							<div class="container1">
								<div class="row1">
									<div class="pull-left logo marginOffetleft"><img src="images/teosyalpen_laboratories_logo_2.png" alt="Teosyalpen Laboratories"/></div>
									<div class="pull-right marginOffetright"><a href="javascript: void(0)" onclick="popup('http://www.teosyalpen.com/pro/')"  class="proBtn proBtnHome">PRO<i class="fa fa-stethoscope fa-flip-horizontal faHome"></i></a></div>
								</div>
							</div>

						</header>
					<div class="row-fluid">
						<div class="col-xs-12 col-sm-5 col-md-4 marginOffetleftTxt slideContentHeight slideContentHeight3">
						<div class="innerTxt sliderTxt3">
							<h1>An accurate tool <span>for your beauty</span></h1>
							<p><span class="innerTxtclr">TEOSYAL<sup>®</sup>PEN</span> allows your doctor to bring his art to life. As everything is controlled electronically, your doctor is able to fully focus on the gel placement. </p>
              <p>The gel is injected<span class="innerTxtclr"> slowly and regularly</span>, using the motorised injection system.</p>
              <p>TEOSYAL<sup>®</sup>PEN is also adapted to particularly <span class="innerTxtclr">delicate areas, opening up new possibilities for your beauty regimen.</span></p>
						<p class="slide3InnerTxt">"Why would you recommend TEOSYAL<sup>®</sup>PEN to your friends?<sup>1 </sup>"</p>
							<ul class="arrowTxt">
  							<li>"Good results, less redness"</li>
  							<li>"Natural results and no pain"</li>
  							<li>"Fewer side effects"</li>
  							<li>"Less bleeding"</li>
							</ul>

							</div>
							<div class="footerTxt footerTxt3">
							<ul>
								<li><sup>1</sup> Kantar Health. The European TEOSYAL<sup>®</sup>PEN trial included 30 physicians and 236
patients. 42 patients had never received manual injection with a hyaluronic acid-based filler. Report N°40HB64. 2014.</li>
							</ul>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6  col-md-offset-1 slideimgheight slideimgheight3 marginOffetrightImg">
							<div class="slideimgwrap">
								<div class="slideimg3"></div>
							</div>
						</div>
					</div>
				</div>

			  </div>
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<div class="enSlideTxt">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</div>
			  </a>
			  <a class="right carousel-control slideTxt1" href="#carousel-example-generic" role="button" data-slide="next">
				<div class="enSlideTxt">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				<div class="preview txt1">gentle injection </div>
				</div>
			  </a>
			</div>
			</div>
			</div>
		</section>
		</section>


	</section>
	<!-- Slider Section End -->
	<!-- Map Section -->
	 <section id="mapSection" class="section ">
	  	<section class="contentSection fp-scrollable1"> 
	<!-- Header Section -->
		 <header>
		<div id="mobile-nav" class="mobile-nav"><i class="fa fa-bars"></i></div>
			<div class="container">
				<div class="row">
					<div class="pull-left logo"><img src="images/teosyalpen_laboratories_logo_2.png" alt="Teosyalpen Laboratories"/></div>
				</div>
			</div>
		</header> 
	   <!-- Map Content Section -->
	    <section id="doctorsPageContent" class="innerContent">
		  <div class="container">
				<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-5">
					<div class="mapSearchWrap" id="mapSearchWrap">
						<h1>Find a doctor equipped with Teosyal<sup>®</sup>Pen near you <img src="images/plusminus.png" id="plus" /></h1>
						<div class="innerForm">
							<form id="bh-sl-user-location" method="post" action="#">
								<div class="input-group stylish-input-group">
								    <input type="text" class="form-control" id="bh-sl-address" name="bh-sl-address" placeholder="Address, city, zip code…" value="" >
										<span class="input-group-addon" id="bh-sl-submit">
											 <i class="fa fa-search fa-flip-horizontal"></i>
										</span>
								</div>
								<div class="select-style">
								  <select id="bh-sl-region" name="bh-sl-region">
									<option value="FR" >FRANCE</option>
									<option value="UK" selected>UK</option>
                                    <option value="IT">ITALY</option>
								  </select>
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
	  <div class="map-cover"></div>
	</section> 
	<!-- Map Section end -->
	<section id="mediaContent" class="section">
    <section class="contentSection1 slideimgheight11">
        <!-- Header Section -->
     	<header>
		<div id="mobile-nav" class="mobile-nav"><i class="fa fa-bars"></i></div>
			<div class="container">
				<div class="row">
					<div class="pull-left logo"><img src="images/teosyalpen_laboratories_logo.png" alt="Teosyalpen Laboratories"/></div>
					<div class="pull-right"><a href="javascript: void(0)" onclick="popup('http://www.teosyalpen.com/pro/')"  class="proBtn proBtnHome">PRO<i class="fa fa-stethoscope fa-flip-horizontal faHome"></i></a></div>
				</div>
			</div>
		</header>
        <!-- Media Content Section -->
			<article class="innerContent">
				  <div class="container-fluid media-container">
					<div class="row-fluid">
					  <div class="col-md-6 col-sm-6 col-xs-12 nopad mediaImgheight">
						<div class="media-image1">

								<div class="mediaInner rightBorder">
									<div class="medialeftImg"></div>
								  <div class="circle youtube" rel="FKyapJ5t0Ak" id="videoleft1"><div class="tri"></div></div>
								  <div class="innerTxt12">
								  <h1>NO PEN, <br/>  NO GAIN<sup>™</sup></h1>

								  </div>
								</div>

					  </div>
					  </div>

				 <div class="col-md-6 col-sm-6 col-xs-12 nopad mediaImgheight">
						<div class="media-image1">
						<div class="mediaInner">
						  <div class="mediarightImg"></div>
						  <div class="circle youtube" rel="f_ZkM1PS-SA" id="videoleft"><div class="tri"></div></div>
						  <div class="innerTxt12">
						  <h1>MAKING-OF<br/> TEOSYAL<sup>®</sup>PEN</h1>
						  </div>
						</div>
						</div>
					  </div>
					</div>
				  </div>
				</article>
    </section>
	</section>
	<!-- Media Section End -->
	<!-- Teoxane Section -->
	<section id="teoxaneContent" class="section">
    <section class="contentSection">
        <!-- Header Section -->
        <header>
            <div id="mobile-nav" class="mobile-nav"><i class="fa fa-bars"></i>
            </div>
            <div class="container">
                <div class="row">
                    <div class="pull-right"><a href="javascript: void(0)" onclick="popup('http://www.teosyalpen.com/pro/')"  class="proBtn proBtnHome">PRO<i class="fa fa-stethoscope fa-flip-horizontal faHome"></i></a></div>
                </div>
            </div>
        </header>
        <!-- Teoxane Content Section -->
            <article class="innerContent" id="teoxaneContent">
				<div class="container-fluid nopad">
                <div class="row-fluid nopad teoxaneTop">
                    <div class="col-md-12 col-sm-12 nopad">
                        <div class="teoxane-image">

                            <img src="images/teoxane_face.jpg" class="img-responsive imgCenter" />
                           <a href="http://www.teoxane.com/en" target="_blank"> <div class="lab-teoxane img-responsive imgCenter teo-img-logo"></div></a>
							<!-- <img src="images/teoxane_labrotories_white.png"class="lab-teoxane"/> -->


                        </div>
                    </div>
                </div>
                <div class="row-fluid nopad teoxaneMiddle">
                    <div class="col-md-12 col-sm-12 nopad">
                        <div class="teoxane-image1">
                           <img src="images/beauty.jpg" class="img-responsive imgCenter" />
                           <a href="http://www.teoxane-beauty.co.uk/" target="_blank"> <div class="lab-teoxane1 img-responsive imgCenter teo-img-logo1"></div></a>
                        </div>
                    </div>
                </div>
                </div>

				<div class="teoxaneBottom">
				<div class="container">
                <div class="row teo-footer">
                    <div class="col-sm-3  col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
                        <img src="images/teosyalpen_laboratories_logo_2.png" class="footerlogo"/>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 teo-foot">
                        <ul>
                            <li>105, rue de Lyon</li>
                            <li>1203 Genève, Suisse</li>
                            <li>+41 22 344 96 36 </li>
                        </ul>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2 teo-foot">
                        <ul>
						  <li><a href="https://www.facebook.com/TEOXANE.LABORATORIES?ref=hl" target="_blank">FACEBOOK</a></li>
						  <li><a href="https://twitter.com/teoxane" target="_blank">TWITTER</a></li>
						  <li><a href="https://www.youtube.com/user/TeoxaneLaboratories" target="_blank">YOUTUBE</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-3  teo-foot">
                         <ul>
                            <li>legal terms</li>
                            <li data-toggle="modal" data-target="#myModallegals" class="legalspoup">&copy; 2015 teoxane laboratories</li>
                            <li>DESIGNED BY <a href="http://thirtydirtyfingers.com/" target="_blank">THIRTY DIRTY FINGERS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </article>
    </section>

</section>
	<!-- Teoxane Section End -->
	</div>
	<!-- End Wrapper -->
	</div>
	<!-- End Fullpage -->

	<!-- Language Popup Box -->
	<!-- Modal -->
	<div class="languagePopup">
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			 <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span></button>
     		 </div>
			  <div class="modal-body">
				<div class="languagePoupInner">
				<div class="container1">
					<div class="row">
						<div class="col-xs-12 col-sm-5 languagetxtWrap"><img src="images/teosyalpen_laboratories_logo_popup.png" alt="Teosyalpen Laboratories" class="img-responsive imgCenter" /></div>
						<div class="col-xs-12 col-sm-4">
							<h2>languages</h2>
							<ul>
                                
								<!--<li><a class="language1" href="#" rel="da">deutsch</a></li>-->
                                <li><a class="language" href="#" rel="de">DEUTSCH</a></li>
								<li><a class="language active" href="#" rel="en">english</a></li>
                                <li><a class="language" href="#" rel="es">ESPAÑOL</a></li>
								<!-- <li><a class="language1" href="#" rel="es">espanol</a></li>-->
								<li><a class="language" href="#" rel="fr">français</a></li>
                <!-- <li><a class="language" href="#" rel="de">german</a></li>-->
								<li><a class="language" href="#" rel="it">italiano</a></li>
								<!--<li><a class="language1" href="#" rel="ne">nederlands</a></li>
								<li><a class="language1" href="#" rel="po">polsku</a></li>
								<li><a class="language1" href="#" rel="pr">Português</a></li>
								<li><a class="language1" href="#" rel="ru">russian</a></li>
								<li><a class="language1" href="#" rel="sv">svenska</a></li> -->
						   </ul>
						</div>
						<div class="col-xs-12 col-sm-3">
							<h2>follow</h2>
							<ul>
								<li><a href="https://www.facebook.com/TEOXANE.LABORATORIES?ref=hl" target="_blank">Facebook</a></li>
								<li><a href="https://twitter.com/teoxane" target="_blank">Twitter</a></li>
								<li><a href="https://www.youtube.com/user/TeoxaneLaboratories" target="_blank">Youtube</a></li>
							</ul>
						</div>
					</div>
				</div>
				</div>
			  </div>

			</div>
		  </div>
		</div>
	</div>
	<!--Mention legals popup-->
		<div class="legalsPopup">
		<div class="modal fade" id="myModallegals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			 <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span></button>
     		 </div>
			  <div class="modal-body">
			  <div class="legalspopupTxt">
			     <p>This website <a href="http://teosyalpen.com/">http://teosyalpen.com/</a> is owned and operated by Teoxane SA, a Swiss company with a capital of € 250,000 CHF.
Registration in Geneva: C11-660-1948003-8</p>
                  <h5>PUBLICATION DIRECTOR</h5>
                  <p>Ms Taupin, Teoxane SA CEO</p>
                   <h5>HEADQUARTERS</h5>
                  <p>105, rue de Lyon<br>
1203 Geneva, Switzerland<br>
Tel +41 22 344 96 36<br>
Fax +41 22 340 29 33</p>
                   <h5>WEBSITE CONCEPTION AND DEVELOPMENT</h5>
                  <p><strong>Thirty Dirty Fingers</strong><br>
73, rue du Faubourg Poissonnière 75009 Paris<br>
Tel:+339.51.16.31.15<br>
<a href="mailto:hello@thirtydirtyfingers.com">hello@thirtydirtyfingers.com</a><br>
<a href="http://www.thirtydirtyfingers.com" target="_blank">www.thirtydirtyfingers.com</a>

                  </p>

                  <h5>HOSTING COMPANY</h5>
                  <p><strong><a href="http://www.ganesh-hosting.ch" target="_blank">Ganesh Hosting</a> SARL</strong><br>
Swissmedia Center<br>
Rue du Clos 12<br>
1800 Vevey – Suisse<br>
Tel: (0041) 021 921 76 74<br>
Fax: (0041) 21 964 17 91

                  </p>

                   <h5>PATENT, TRADEMARKS</h5>
                  <p>Teoxane owns the intellectual property rights or owns the rights to use all the items available on this website, including text, images, graphics, logos, icons, sounds and software. In any case you may not reproduce, distribute, modify or distort the content of this website, even partially, whatever the means or process used, except with the prior written permission of: Teoxane SA. Any unauthorized use of this website or any of its materials will be deemed to constitute an infringement and prosecuted.

                  </p>

                   <h5>PHOTO CREDITS</h5>
                  <p>Photos published are copyrighted and belong to their respective owners. </p>

                   <h5>DISCLAIMERS</h5>
                  <p>This website is accessible at all times to users. However, Teoxane reserves the right to modify, suspend or interrupt access to all or part of the website due to technical maintenance . Teoxane will strive to maintain access to the website but not in any way guarantee that access will be uninterrupted. So Teoxane may not be held liable for any damages, direct or indirect, related to the interruption or discontinuation of access to the website.</p>

                    <h5>PRIVACY POLICY</h5>
                  <p>Teoxane will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. You may request details of personal information which we hold about you. If you would like a copy of the information held on you please write to us. If you believe that any information we are holding on you is incorrect or incomplete, please write to or email us as soon as possible, at the following address: <a href="mailto:info@teoxane.com">info@teoxane.com</a>. We will promptly correct any information found to be incorrect.</p>

                   <h5>LOG FILES</h5>
                  <p>When someone visits our website we collect standard internet log information and details of visitor behavior patterns. We do this to find out things such as the number of visitors to the various parts of the site. We collect this information in a way which does not identify anyone. We do not make any attempt to find out the identities of those visiting our website using the data in the logs. We will not associate any log data gathered from this site with any personally identifying information from any source.</p>

                 <h5>COMMENT AND ENQUIRY FORMS</h5>
                  <p>Our website allows visitors to leave comments and contact us via an enquiry form. We collect the following information: Contact details such as Name, Email, Web Address, IP Address and Comment or Enquiry.</p>
                  <p>We require this information for the following reasons:To improve our products and services,  to encourage visitor interaction and discussion on our website, to be able to respond to visitor enquiries</p>

                  <h5>COOKIES</h5>
                  <p>Cookies are small text files that are placed on your computer by websites that you visit. They are widely used in order to make websites work, or work more efficiently, as well as to provide information to the owners of the site. Cookies that are used by this website are necessary in order for us to provide and improve upon our value added products and services and to remain competitive. Cookies are not shared with any third parties.</p>
                  <p>Cookies are used to collect information about how visitors use our site. We use the information to compile reports and to help us improve the site. The cookies collect information in an anonymous form, including the number of visitors to the site, where visitors have come to the site from and the pages they visited.</p>
                  <p>Google’s privacy policy may be found here <a href="http://www.google.com/analytics/learn/privacy.html" target="_blank">http://www.google.com/analytics/learn/privacy.html</a> </p>
                  <p>Most web browsers allow some control of most cookies through the browser settings. To find out more about cookies, including how to see what cookies have been set and how to manage and delete them, visit <a href="http://www.allaboutcookies.org" target="_blank">www.allaboutcookies.org.</a></p>

                  <p>To opt out of being tracked by Google Analytics across all websites visit <a href="http://tools.google.com/dlpage/gaoptout" target="_blank">http://tools.google.com/dlpage/gaoptout.</a> </p>


                   <h5>LINKS TO OTHER WEBSITES</h5>
                  <p>This website may contain links to other websites of interest. However, once you have used these links to leave this website, you should note that we do not have any control over other websites. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites, as such sites are not governed by this Privacy Statement. You should exercise caution and look at the Privacy Statement applicable to the website in question.</p>

         </div>
			  </div>

			</div>
		  </div>
		</div>
	</div>

	<!-- Navigation Section -->
	<nav class="navWrap" id="navSlide">
		<div class="menuIconWrap">
			<div class="langTxt" data-toggle="modal" data-target="#myModal">EN</div>
			<div class="menuIcon">
				<ul>
					<li data-menuanchor="home"><a href="#home"><i class="iconsprite homeicon hovericon"></i><span>Home</span></a></li>
					<li data-menuanchor="natural"><a href="#natural"><i class="iconsprite naturalicon"></i><span>Natural</span></a></li>
					<li data-menuanchor="gentle_injection"><a href="#gentle_injection"><i class="iconsprite smoothicon"></i><span>Gentle Injection</span></a></li>
          <li data-menuanchor="momdocteur"><a href="#momdocteur"><i class="iconsprite mydoctoricon"></i><span>Practitioner Finder</span></a></li>
					<li data-menuanchor="medias"><a href="#medias"><i class="iconsprite mediaicon"></i><span>Medias</span></a></li>
					<li data-menuanchor="teoxane"><a href="#teoxane"><i class="iconsprite teoxaneicon"></i><span>Teoxane</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
    <!-- jQuery -->
    <script src="js/app.min.js"></script>
	<script src="assets/js/libs/handlebars.min.js"></script>
	<script src="assets/js/libs/jquery.nicescroll.min.js"></script>
	<!-- changed the google map version to 3.21 because in version 3.22 the control pan is deprecated -->
    <script src="http://maps.google.com/maps/api/js?v=3.21&sensor=false&libraries=places&language=en"></script>
    <script src="assets/js/plugins/storeLocator/jquery.storelocator.js"></script>
    <script src="js/custom.js"></script>
 		
          <script type="text/javascript">
            function popup(url)
            {
             params  = 'width='+screen.width;
             params += ', height='+screen.height;
             params += ', top=0, left=0'
             params += ', fullscreen=yes';

             newwin=window.open(url,'windowname4', params);
             if (window.focus) {newwin.focus()}
             return false;
            }

            function initialize() {
		var options = {
		  // types: ['(cities)'],		  
		};
		var input = document.getElementById('bh-sl-address');
		new google.maps.places.Autocomplete(input, options);
	 } 	 
	 initialize();

          </script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-44528935-4', 'auto');
ga('send', 'pageview');
$("#bh-sl-region").val("UK");
     for(var lang=0;lang<$('#bh-sl-region option').length;lang++){
         if(country_cookie==$('#bh-sl-region option').eq(lang).val())
         $("#bh-sl-region").val(country_cookie)         
     }
</script>
<!-- End Google Analytics -->
    </body>
</html>