$(document).ready(function(){
  $('.preloaderLand').show();
	/*setTimeout(function(){
  $('.enSlideTxt').append('<div class="preview txt3">Gentle injection</div>');
  $('.preview').css({'right':'48px' ,'opacity' : '1'});

}, 500);*/

//Onload slide_1 text display
    setInterval(function() {
    $rightControl.removeClass('slideTxt1');
    }, 6000);

	//Preloader
	$(window).load(function(){
    $('.preloaderLand').show();
    //clear previous map start.
    $("#bh-sl-address").val("");
    $('#map-container').storeLocator("init");
    $('#map-container').storeLocator();
    //$('.slideContentHeight1').css('height', '550px');

    //clear previous map end.
    $('.preloader').fadeOut('slow',function(){
      $(this).remove();
      slideimgheightset();
    	mediaImg();
    	footerHeightset();
  		sliderheightset(1);
  		sliderheightset(2);
  		sliderheightset(3);
  		teoxaneheightset();
    });



    if(navigator.userAgent.match(/Android/) && window.matchMedia("(orientation: portrait)").matches) {
      $("#fullpage").css("display","block");
      $(".landscMode").css("display","none");
      $(".mobile-land").css("display","none");
    }

    $('.slimScrollDiv').slimScroll({ scrollTo : '50px' });
    jQuery.fn.myIndicators();
    $('.slimScrollDiv').slimScroll({ scrollTo : '0px' });

    setTimeout(function () {

      var index = sessionStorage.getItem('sliderindex');
      if(index == "1") {
          console.log(1);
          $('.carousel').carousel(0);
      } else if(index == "2") {
        console.log(2);
        $('.carousel').carousel(1);
      } else if(index == "3") {
        console.log(3);
        $('.carousel').carousel(2);
      }

    },1000);
	});
	var isTouchDevice = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone)/);
	var isMobile = window.matchMedia("only screen and (max-width: 760px)");
	//Full page Mobile Device
    if (isMobile.matches) {
        $('#fullpage').fullpage ({
					scrollOverflow: true,
				  slidesNavigation: false,
					menu: '#navSlide',
				      navigation: false,
				    verticalCentered: false,
				    anchors: ['accueil', 'naturel','En_douceur','mon_docteur','medias','teoxane'],
				 	autoScrolling: true,
				    scrollBar: false,
					css3: false,
					normalScrollElements: '#listcontentScroll',
					normalScrollElementTouchThreshold: 8,
					touchSensitivity:20,
					resize: true,
					onLeave: function(){
					$('#carousel-example-generic').carousel({
							pause: true,
							interval: false
						}).carousel(0);

					 },
						afterLoad: function(){
            console.log("loaded");
							$rightControl.addClass('slideTxt1');
							setInterval(function() {
								$rightControl.removeClass('slideTxt1');
							}, 90000);



				   },
					afterResize: function() {


					}
        });
    }
    else {
    //Full page Desktop
     $('#fullpage').fullpage({
				    scrollOverflow: true,
				    slidesNavigation: false,
					menu: '#navSlide',
				    navigation: false,
				    verticalCentered: false,
				    anchors: ['accueil', 'naturel','En_douceur','mon_docteur','medias','teoxane'],
				 	autoScrolling: true,
				    scrollBar: false,
					css3: true,
					normalScrollElements: '#listcontentScroll',
					normalScrollElementTouchThreshold: 8,
					touchSensitivity: 8,
					resize: true,
					onLeave: function(){
					$('#carousel-example-generic').carousel({
						pause: true,
						interval: false
					}).carousel(0);

				 },
				 afterLoad: function(){

			       $rightControl.addClass('slideTxt1');
			     setInterval(function() {
			     $rightControl.removeClass('slideTxt1');
         }, 90000);




			   },
				 afterResize: function() {


				 },

	});
    }


 //Fullpage js and Modal scroll conflicts
  $(".modal").on('show.bs.modal', function (e) {

     $.fn.fullpage.setMouseWheelScrolling(false);
     $.fn.fullpage.setAllowScrolling(false);

     $(".modal").slimScroll({destroy: true});

}).on('hidden.bs.modal', function (e) {

     $.fn.fullpage.setMouseWheelScrolling(true);
     $.fn.fullpage.setAllowScrolling(true);

     $(".modal").slimScroll({destroy: true});

});


    // Navigation
	 if(!!('ontouchstart' in window)){//check for touch device

		$(".menuIcon ul li,.mobile-nav").click(function(e){
				$('.navWrap').toggleClass("active");
				 e.stopPropagation();

			});
			$("body").click(function(){
				$('.navWrap').removeClass("active");

			});

			$(".mobile-nav").click(function(){
				$(".navWrap").addClass("active");
			});

		}
	else{
		//behaviour and events for pointing device like mouse
		$(".menuIcon ul li").bind("mouseenter click",function(){
				$(".navWrap").addClass("active");
			});

			// The cursor leaves the menu area
			$(".navWrap").mouseleave(function(){
				$(".navWrap").removeClass("active");
			});

			 $(".menuIcon ul li").click(function(){
				$(".navWrap").removeClass("active");
			});
			 $(".mobile-nav").click(function(){
				$(".navWrap").addClass("active");
			});

	}

  $('#carousel-example-generic').on("slide.bs.carousel",function () {
      $('.footerTxt').css('visibility','hidden');
      $('.slimScrollDiv').slimScroll({ scrollTo : '0px' });
	});

  $('#carousel-example-generic').on('slid.bs.carousel', function () {
  		jQuery.fn.myIndicators();
      sliderheightset(1);
      sliderheightset(2);
      sliderheightset(3);
      $('.slimScrollDiv').slimScroll({ scrollTo : '0px' });
	});

	$('.carousel').carousel({
		interval: false,
	});



		 // get the carousel
	var $carousel = $(".carousel");

	// pause it
	$carousel.carousel('pause');

	// get right & left controls
	var $rightControl = $carousel.find(".right.carousel-control");
	var $leftControl = $carousel.find(".left.carousel-control");


	// hide the left control (first slide)
	$leftControl.hide();
  var $active = $carousel.find(".item.active");
  var curIndex=$active.index();

  if(curIndex==0){
   $rightControl.addClass('slideOnecontrol')
   }
   else{
     $rightControl.removeClass('slideOnecontrol')
   }
	// get 'slid' event (slide changed)
	$carousel.on('slid.bs.carousel', function() {
	// get active slide
	var $active = $carousel.find(".item.active");
  var curIndex=$active.index();
  if(curIndex==0){
   $rightControl.addClass('slideOnecontrol')
   }
   else{
     $rightControl.removeClass('slideOnecontrol')
   }
	// if the last slide,
		if (!$active.next().length) {
			// hide the right control
			$rightControl.hide();
			$leftControl.find('.enSlideTxt').append('<div class="preview txt3">gentle injection</div>');
			$leftControl.find('.frSlideTxt').append('<div class="preview txt3">une injection en douceur</div>');
			$leftControl.find('.txt2').remove();
      sessionStorage.setItem('sliderindex', 3);
		// if not,
		} else {
			// show the right control
			$rightControl.fadeIn();
			$rightControl.find('.enSlideTxt').append('<div class="preview txt3"> an accurate tool.. </div>');
			$rightControl.find('.frSlideTxt').append('<div class="preview txt3 txt33"> Un dispositif de haute précision...</div>');
			$leftControl.find('.enSlideTxt').append('<div class="preview txt2">the first system</div>');
			$leftControl.find('.frSlideTxt').append('<div class="preview txt2">Le premier système...</div>');
			$leftControl.find('.txt3').remove();
			$rightControl.find('.txt1').remove();
      sessionStorage.setItem('sliderindex', 2);
		}

		// if the first slide,
		if (!$active.prev().length) {
      sessionStorage.setItem('sliderindex', 1);
			// hide the left control
			$leftControl.hide();
			$rightControl.find('.enSlideTxt').append('<div class="preview txt1">gentle injection</div>');
			$rightControl.find('.frSlideTxt').append('<div class="preview txt1">une injection en douceur</div>');
			$rightControl.find('.txt3').remove();

		// if not,
		} else {
			// show it
			$leftControl.fadeIn();

			//$leftControl.append('<div class="preview txt3">left3</div>');

		}
});
	 $("#plus").click(function(){
	  $(".innerForm").toggle();
	 });

	// Map Search form submit
		$("#bh-sl-submit").click(function(){
            //alert($("#bh-sl-address").val());
            if($("#bh-sl-address").val().trim() != '') {
              $(".bh-sl-loc-list").getNiceScroll(0).doScrollTop(1,100)
                //alert('yes');
                $("#bh-sl-user-location").submit();
								setTimeout(function () {
									$('#listcontentScroll').removeClass('setDefaultHeight');
								}, 1000);
                $('.mapSearchWrap .slimScrollDiv, #listcontentScroll').animate({
                    height: '300px'
                }, 2000, function() {

             $( ".bh-sl-loc-list ul li:first-child" ).trigger( "click" );


            });
            }



        });



		$("#bh-sl-user-location").submit(function(){
            //alert($("#bh-sl-address").val());


            if($("#bh-sl-address").val().trim() != '') {
              $(".bh-sl-loc-list").getNiceScroll(0).doScrollTop(1,100)
                //alert('yes');
              /*   $("#bh-sl-user-location").submit(); */
								setTimeout(function () {
									$('#listcontentScroll').removeClass('setDefaultHeight');
								}, 1000);

                $('.mapSearchWrap .slimScrollDiv, #listcontentScroll').animate({
                    height: '300px'
                }, 2000, function() {

             $( ".bh-sl-loc-list ul li:first-child" ).trigger( "click" );

           });
            }
        });

		// Carousel Swipe
        if (isMobile.matches || isTouchDevice) {
		$("#carousel-example-generic").swiperight(function() {
    		  $(this).carousel('prev');


	    		});
		   $("#carousel-example-generic").swipeleft(function() {
		      $(this).carousel('next');
	   });}

	autoPlayYouTubeModal();
	imgheightset();

	//Language Change URL
		  $(".langTxt").click(function(){
              var sitename = "http://www.teosyalpen.com/";
              var hash = window.location.hash;
              $( "a.language" ).each(function( index ) {
                var lang = $(this).attr("rel");
                  //if(lang == 'en') lang="";
                  $(this).attr("href", sitename + lang + hash);
              });

		});

		$(function () {
			$(".youtube").YouTubeModal({
		   autoplay:1, width:'99%', height:'97%'
			});
		});


	function sliderheightset(id1) {

		var id1;
		var curvheight = $(window).height();
		var curvwidth = $(window).width();

		var innerContentheight = $('#sliderContent .sliderTxt'+id1).innerHeight();
		var footerContentheight = $('#sliderContent .footerTxt'+id1).innerHeight();
		var totalInnerContent = innerContentheight + footerContentheight + 56;
		//alert(innerContentheight + 'aaa');
			//e.preventDefault();
		if (curvwidth >= 200) {
			if (curvheight <= totalInnerContent) {
				$('.slideimgheight'+id1).css('height', totalInnerContent);
				$('.slideContentHeight'+id1).css('height', totalInnerContent);
			}
			else {

				$('.slideimgheight'+id1).css('height', curvheight + 10);
				//$('.slideimgheight1').css('height', curvheight + 1);
				$('.slideContentHeight'+id1).css('height', curvheight + 10);
			}
		}
	  $('.footerTxt').css('visibility','visible');
    /* else{
		$('.slideContentHeight').css('height', curvheight);
		} */
	}

	slideimgheightset();
	mediaImg();
	footerHeightset();

		sliderheightset(1);
		sliderheightset(2);
		sliderheightset(3);
		teoxaneheightset();

    var inputFocus = false;
    var matchMedia = window.msMatchMedia || window.MozMatchMedia || window.WebkitMatchMedia || window.matchMedia;

    if (typeof(matchMedia) !== 'undefined') {
      window.matchMedia('(orientation: portrait)').addListener(function(e) {

        if(!inputFocus) {
          if(navigator.userAgent.match(/(Android|iPhone|iPod|iPad)/)) {
            location.reload();
          }
        } else {
            if(!navigator.userAgent.match(/(Android)/)) {
              if(navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
                location.reload();
              } else if (/Mobi/.test(navigator.userAgent)) {
                location.reload();
              } else {
                $("#fullpage").css("display","block");
                $(".landscMode").css("display","none");
                $(".mobile-land").css("display","none");
              }
            }
        }
      });
    }

    $('input').bind('focus', function(e) {
      inputFocus = true;
      if(isTouchDevice)
        $('.navWrap').css({'position':'absolute'});
    });


    $('input').bind('blur', function(e) {
      e.stopPropagation();

      if(!navigator.userAgent.match(/(Android)/)) {
        inputFocus = false;
      }

      if(isTouchDevice)
        $('.navWrap').css({'position':'fixed'});
    });

	// Resize function
	$(window).on('resize', function() {
		slideimgheightset();
		mediaImg();
		imgheightset();
		footerHeightset();
		sliderheightset(1);
		sliderheightset(2);
		sliderheightset(3);
		teoxaneheightset();

	});

	//Media Video Popup verticalCenter
	$(function() {
		function reposition() {
			var modal = $(this),
				dialog = modal.find('.modal-dialog.verticalCenter');
			modal.css('display', 'block');

			// Dividing by two centers the modal exactly, but dividing by three
			// or four works better for larger screens.
			dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
		}
		// Reposition when a modal is shown
		$('.modal').on('show.bs.modal', reposition);
		// Reposition when the window is resized
		$(window).on('resize', function() {
			$('.modal:visible').each(reposition);
		});
	});

});


function imgheightset() {
		var curvheight = $(window).height();
		$('.mediaImgheight').css('height', curvheight);
		//$(".lab-teoxane").css ('width',curvheight/2);
}
/*  function sliderheightset() {
		var curvheight = $('.fp-slidesContainer').height();
		$('.slideimgheight').css('height', curvheight);

} */
function footerHeightset() {
				//var curhwidth = $(window).width();
				//var curvheight = $(window).height();
				//var curvheight = $('.fp-section').height();
				//$('.slideimgheight').css('height', curvheight);
	if ($(document.body).height() < $(window).height()) {
	$('#sliderContent .footerTxt').attr('style', 'position: absolute!important; bottom: 0px;');
	}


}
//Teoxane 70% and 30% separater
function teoxaneheightset() {
	//alert('dad');
		var curvwidth = $(window).width();
		if (curvwidth >= 979 ) {
		//alert(curvwidth);
			var curvheightTop = parseInt($(window).height()  * 0.375);
			var curvheightBottom = $(window).height() - curvheightTop*2;
			$('.teoxaneTop').css('height', curvheightTop);
			$('.teoxaneMiddle').css('height', curvheightTop);
			$('.teoxaneBottom').css('height', curvheightBottom);
		}
		else if (window.matchMedia("(orientation: portrait)").matches) {
			$('.teoxaneTop').css('height', 'auto');
			$('.teoxaneMiddle').css('height', 'auto');
			$('.teoxaneBottom').css('height', 'auto');
	  }
		else{
			//alert('dad1');
			$('.teoxaneTop').css('height', 'auto');
			$('.teoxaneMiddle').css('height', 'auto');
			$('.teoxaneBottom').css('height', 'auto');

		}
}





  //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
  function autoPlayYouTubeModal() {
	$('#videolinkleft').click(function () {
        var src = 'https://www.youtube.com/watch?v=f_ZkM1PS-SA';
        $('#videopopupleft').modal('show');
        $('#videopopupleft iframe').attr('src', src);
    });

    $('#videopopupleft button').click(function () {
        $('#videopopupleft iframe').removeAttr('src');
    });
  }
	function slideimgheightset() {
			var curhwidth = $(window).width();
			var curvheight = $(window).height();
			$('.slider1').css('width', curhwidth).css('height', curvheight);
	}


	// Media Page

	function mediaImg() {

	  var dheight = $(window).height();
	  var dwidth = $(window).width();

	  $(".media-sideimage").css({"height": dheight});
	  $(".media-sideimage").css({"width":"100%"});
	  $(".overlay1").css({"width": (dwidth / 2)});
	  $(".overlay1").css({"left": (dwidth / 2)});

	}

 /* Progress Bar- Indicator animation */
            jQuery.fn.myIndicators = function() {
				jQuery('#indicator-container').addClass('playing');
                /* Outer Circle */
                jQuery('.outer1').circleProgress({
                    value:"",
                    size: 120,
                    startAngle: "",
                    thickness: 2,
                    reverse: false,
                    fill: {
                        //gradient: ["#87539e", "#87539e"]
                    }
                });
                jQuery('.outer2').circleProgress({
                    value: 0.70,
                    size: 120,
                    startAngle: 4.73,
                    thickness: 2,
                    reverse: false,
                    fill: {
                        gradient: ["#87539e", "#87539e"]
                    }
                });
                /* Outer Circle */

                /* Inner Circle */
                /* Numbers Count */
                jQuery('.inner').each(count);

                jQuery('.page-offers a').click(function (event) {
                    event.preventDefault();
                    setTimeout(showCounts, 1200)
                });
                function showCounts() {
                    jQuery('#inner1').countTo('restart');
                   // jQuery('#inner2').countTo('restart');
                }
                function count(options) {
                    var $this = jQuery(this);
                    options = jQuery.extend({}, options || {}, $this.data('countToOptions') || {});
                    $this.countTo(options);
                }
                /* Numbers Count */
                /* Bottom Text fadeIn */
                jQuery( ".indicator .title" ).delay( 800 ).fadeIn(1500);

                /* Bottom Text fadeIn */
            }
