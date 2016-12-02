/*! viewportSize | Author: Tyson Matanich, 2013 | License: MIT */
(function(n){n.viewportSize={},n.viewportSize.getHeight=function(){return t("Height")},n.viewportSize.getWidth=function(){return t("Width")};var t=function(t){var f,o=t.toLowerCase(),e=n.document,i=e.documentElement,r,u;return n["inner"+t]===undefined?f=i["client"+t]:n["inner"+t]!=i["client"+t]?(r=e.createElement("body"),r.id="vpw-test-b",r.style.cssText="overflow:scroll",u=e.createElement("div"),u.id="vpw-test-d",u.style.cssText="position:absolute;top:-1000px",u.innerHTML="<style>@media("+o+":"+i["client"+t]+"px){body#vpw-test-b div#vpw-test-d{"+o+":7px!important}}<\/style>",r.appendChild(u),i.insertBefore(r,e.head),f=u["offset"+t]==7?i["client"+t]:n["inner"+t],i.removeChild(r)):f=n["inner"+t],f}})(this);

 /**
 * This demo was prepared for you by Petr Tichy - Ihatetomatoes.net
 * Want to see more similar demos and tutorials?
 * Help by spreading the word about Ihatetomatoes blog.
 * Facebook - https://www.facebook.com/ihatetomatoesblog
 * Twitter - https://twitter.com/ihatetomatoes
 * Google+ - https://plus.google.com/u/0/109859280204979591787/about
 * Article URL: http://ihatetomatoes.net/how-to-create-a-parallax-scrolling-website-part-2/
 */

var HFOOTER = 34;
var VITROLL = 500;
var BLOCKSCROLL = 500; // duree de blocage du scroll
var NBSCROLL = 8;
var IE8;
var IE7;
var IS_MOBILE = false;
var CANSCROLL = true;
var CURRENT_PART = 1;
var WIDTH_PAGE = 1000;
var HEIGHT_PAGE = 1000;
var WIDTH_CONTENU = 1000;
var DRAG_ON = false;
var resizeTimeout;

var ZONEOPEN = false;

var ISLOADMOBILE = false;
var TIMEOUTLOADMOBILE;

var ISLOAD = false;
var TIMEOUTLOA;

( function( $ ) {
	
	
						
	$(window).ready(function(){
		affLog('ready');
			$('img').each(function(){
		
				if($(this).attr('data-src')){
					$(this).addClass('whauto');
				}
			});	
	});					
	
	$(window).load(function(){
	
		affLog('load');
	
		// Setup variables
		$window = $(window);
		$slide = $('.homeSlide');
		$slideTall = $('.homeSlideTall');
		$slideTall2 = $('.homeSlideTall2');
		$body = $('body');
		htmlbody = $('html,body');
		html = $('html');
		var duration = 500;
		
		CANSCROLL = false;

		IS_MOBILE = ($window.width() < 800);
		
		if(IS_MOBILE || IS_TABLET) 
		{
			loadMobileAndTablet();
		}
		if(IS_MOBILE) 
		{
			loadMobile();
		}
		else
		{
			$body.removeClass('loading').addClass('loaded');
			CANSCROLL = true;
			load();
		}	
		
			load_all();
		
			$('img').each(function(){
		
				if($(this).attr('data-src')){
					$(this).attr('src', $(this).attr('data-src'));
					affLog('data-src '+$(this).attr('data-src'));
					
					$(this).load(function(){
						$(this).removeClass('whauto');
					});


				}
			});	
		
	});
	
	var player;
	var playerZone;
	var vimeoClose = false;
	var vimeovid1Close = false;
	var vimeovid2Close = false;
	var vimeovid3Close = false;
		
	function doOnOrientationChange() {
		switch(window.orientation) 
		{  
		  case -90:
		  case 90:
				/*CANSCROLL = true;
				load();*/
				if (IS_TABLET) location.reload();
			//alert('landscape');
			break; 
		  default:
			//alert('portrait');
				if (IS_TABLET) location.reload();
			break; 
		}
	}
		

	function loadMobileAndTablet(){

		window.addEventListener('orientationchange', doOnOrientationChange);

		//console.log('tablet');
		jQuery('.vidtem1').click(function (e) {
			document.location = jQuery(this).attr("data-uri");
		});
		jQuery('.vidtem2').click(function (e) {
			document.location = jQuery(this).attr("data-uri");
		});
		jQuery('.vidtem3').click(function (e) {
			document.location = jQuery(this).attr("data-uri");
		});
		
		
		jQuery('.footer .fancybox').click(function (e) {
			document.location = jQuery(this).attr("data-uri");
		});
		
		jQuery('.zone .norm, .zone .hov').click(function (e) {
			
			e.stopPropagation();

			jQuery('.bulle').fadeOut();
			jQuery(this).parent().children('.bulle').stop(true).fadeIn();
			jQuery('.zone').children('.hov').fadeTo(ETAPESCROLLSPEED, 0);
			jQuery('.zone').children('.norm').fadeTo(ETAPESCROLLSPEED, 1);
			jQuery(this).parent().children('.hov').stop(true).fadeTo(ETAPESCROLLSPEED, 1);
			jQuery(this).parent().children('.norm').fadeTo(ETAPESCROLLSPEED, 0);
	
		});


	}
	
	function load_fancy(){
	
		$('.vimeo').fancybox({
			type: 'iframe',
			'closeBtn' : false,
			overlay : null,
		    helpers: {

			// Enable the media helper to better handle video.
			media: true,

			// Put comments within the white border.
			/*title: {
			    type: 'inside'
			}*/
		    },

		    // Do not use this because it tries to fit title text as well.
		    fitToView: true,

		    // Prevent the introduction of black bars when resized for mobile.
		    aspectRatio: true,

		    // Restrict content to the display dimensions.
		    maxWidth: "100%",
		    maxHeight: "100%",

		    // Change the title keyword to 'caption' to avoid title text in tooltips.
		    beforeLoad: function() {
			//this.title = $(this.element).attr('caption');
		    },

		    // Override the default iframe dimensions with manually set dimensions.
		    afterLoad: function() {
			this.width = $(this.element).data("width");
			this.height = $(this.element).data("height");
		    }
		});


		$('.vimeov2').fancybox({
			//type: 'iframe',
			'closeBtn' : false,
			overlay : null,
		    helpers: {

			// Enable the media helper to better handle video.
			//media: true,

			// Put comments within the white border.
			/*title: {
			    type: 'inside'
			}*/
		    },

		    // Do not use this because it tries to fit title text as well.
		    fitToView: true,

		    // Prevent the introduction of black bars when resized for mobile.
		    aspectRatio: true,

		    // Restrict content to the display dimensions.
		    maxWidth: "100%",
		    maxHeight: "100%",

		    afterClose: function() {
				affLog('onClosed');
				player.api("pause");
				player = null;
				vimeoClose = true;
		    },

		    // Override the default iframe dimensions with manually set dimensions.
		    afterLoad: function() {

				affLog('afterLoad');
                var iframe = jQuery('#vimeo1player')[0];
                player = $f(iframe);
                if (player)
                { 
                    player.addEvent("ready", function() {
						affLog('ready');
						if(!vimeoClose)
							player.api("play"); // lancer en autoplay de toute façon
					});
				}
				vimeoClose = false;
				this.width = $(this.element).data("width");
				this.height = $(this.element).data("height");
		    }
		});

		$('.vidtem1').fancybox({
			//type: 'iframe',
			'closeBtn' : false,
			overlay : null,
		    helpers: {

			// Enable the media helper to better handle video.
			//media: true,

			// Put comments within the white border.
			/*title: {
			    type: 'inside'
			}*/
		    },

		    // Do not use this because it tries to fit title text as well.
		    fitToView: true,

		    // Prevent the introduction of black bars when resized for mobile.
		    aspectRatio: true,

		    // Restrict content to the display dimensions.
		    maxWidth: "100%",
		    maxHeight: "100%",

		    afterClose: function() {
				affLog('onClosed 1');
				player1.api("pause");
				player1 = null;
				vimeov1Close = true;
		    },


		    // Override the default iframe dimensions with manually set dimensions.
		    afterLoad: function() {
				affLog('afterLoad 1');

                var iframe1 = jQuery('#vidtem1player')[0];
                player1 = $f(iframe1);
                if (player1)
                { 
                    player1.addEvent("ready", function() {
						player1.api("play"); // lancer en autoplay de toute façon
					});
				}

				this.width = $(this.element).data("width");
				this.height = $(this.element).data("height");
		    }
		});

		$('.vidtem2').fancybox({
			//type: 'iframe',
			'closeBtn' : false,
			overlay : null,
		    helpers: {

			// Enable the media helper to better handle video.
			//media: true,

			// Put comments within the white border.
			/*title: {
			    type: 'inside'
			}*/
		    },

		    // Do not use this because it tries to fit title text as well.
		    fitToView: true,

		    // Prevent the introduction of black bars when resized for mobile.
		    aspectRatio: true,

		    // Restrict content to the display dimensions.
		    maxWidth: "100%",
		    maxHeight: "100%",

		    afterClose: function() {
				affLog('onClosed 2');
				player2.api("pause");
				player2 = null;
				vimeovid2Close = true;
		    },

		    // Override the default iframe dimensions with manually set dimensions.
		    afterLoad: function() {
				affLog('afterLoad 2');

                var iframe2 = jQuery('#vidtem2player')[0];
                player2 = $f(iframe2);
                if (player2)
                { 
                    player2.addEvent("ready", function() {
						if(!vimeovid2Close)
							player2.api("play"); // lancer en autoplay de toute façon
					});
				}
				vimeovid2Close = false;
				this.width = $(this.element).data("width");
				this.height = $(this.element).data("height");
		    }
		});

		$('.vidtem3').fancybox({
			//type: 'iframe',
			'closeBtn' : false,
			overlay : null,
		    helpers: {

			// Enable the media helper to better handle video.
			//media: true,

			// Put comments within the white border.
			/*title: {
			    type: 'inside'
			}*/
		    },

		    // Do not use this because it tries to fit title text as well.
		    fitToView: true,

		    // Prevent the introduction of black bars when resized for mobile.
		    aspectRatio: true,

		    // Restrict content to the display dimensions.
		    maxWidth: "100%",
		    maxHeight: "100%",

		    afterClose: function() {
				affLog('onClosed 3');
				player3.api("pause");
				player3 = null;
				vimeovid3Close = true;
		    },

		    // Override the default iframe dimensions with manually set dimensions.
		    afterLoad: function() {
				affLog('afterLoad 3');

                var iframe3 = jQuery('#vidtem3player')[0];
                player3 = $f(iframe3);
                if (player3)
                { 
                    player3.addEvent("ready", function() {
						if(!vimeovid3Close)
							player3.api("play"); // lancer en autoplay de toute façon
					});
				}
				vimeovid3Close = false;
				this.width = $(this.element).data("width");
				this.height = $(this.element).data("height");
		    }
		});
		
		
		$(".fancybox").fancybox({
			'closeBtn' : false,
			overlay : null
		 });
	}
	
	
	function loadMobile(){
		ISLOADMOBILE = true;
		$body.removeClass('loading').addClass('loaded');
		if($('.homeSlide').length > 2)
		{
			$.fn.fullpage({
					//anchors: ['home', 'datas', 'product', 'experts', 'injection', 'technology', 'meet-us'],
					//anchors: ['home', 'facts', 'technology', 'injection', 'experts', 'meet-us'],
					anchors: ['home', 'facts', 'technology', 'injection', 'experts', 'meet-us', 'footer'],
					menu: '#menu'
			});

		}
		//slidemobile2();
		//slidemobile3();
		//slidemobile5();
		slidemobile6();
		slidemobile7();
	}

	var player;

	function load_vid(){
		
		var vid1 = $('.vid1').attr('id');
		var vid2 = $('.vid2').attr('id');
		var vid3 = $('.vid3').attr('id');
		$('.vid1').html('<iframe src="http://player.vimeo.com/video/'+vid1+'?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vid1player&amp;wmode=transparent" id="vid1player" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
		$('.vid2').html('<iframe src="http://player.vimeo.com/video/'+vid2+'?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vid2player&amp;wmode=transparent" id="vid2player" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
		$('.vid3').html('<iframe src="http://player.vimeo.com/video/'+vid3+'?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vid3player&amp;wmode=transparent" id="vid3player" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');

		var vimeo1 = $('.vimeo1').attr('data-id');		
		$('.vimeo1').html('<iframe src="http://player.vimeo.com/video/'+vimeo1+'?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vimeo1player&amp;wmode=transparent" id="vimeo1player" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
/*
                var jiframe = jQuery('#vimeo1player')[0];
                var iframe = jQuery('#vimeo1player')[0];
                player = $f(iframe);
                if (player)
                { 
                        player.api("play"); // lancer en autoplay de toute façon

			//alert('player');
                    player.addEvent("ready", function() {

			alert('ready');
                        player.api("play"); // lancer en autoplay de toute façon

		    });
	    	}
*/
		var vidtem1 = $('#vidtem1').attr('data-id');
		var vidtem2 = $('#vidtem2').attr('data-id');
		var vidtem3 = $('#vidtem3').attr('data-id');
		$('#vidtem1').html('<iframe src="http://player.vimeo.com/video/'+vidtem1+'?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vidtem1player&amp;wmode=transparent" id="vidtem1player" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
		$('#vidtem2').html('<iframe src="http://player.vimeo.com/video/'+vidtem2+'?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vidtem2player&amp;wmode=transparent" id="vidtem2player" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
		$('#vidtem3').html('<iframe src="http://player.vimeo.com/video/'+vidtem3+'?title=0&amp;byline=0&amp;portrait=0&amp;api=1&amp;player_id=vidtem3player&amp;wmode=transparent" id="vidtem3player" width="800" height="450" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
    
	}
	
	function load_all() {
	

		WIDTH_PAGE =  $window.width();
		WIDTH_CONTENU  =  $window.width()-100;
	
		$(document).click(function(event) { 
			if($(event.target).parents().attr('class') != 'vimeo') {

			//alert(' click outside');
				if(ZONEOPEN)
				{
					
					if(WIDTH_CONTENU > 800) {
						jQuery('.face').css('margin-left', 0);
						//affLog($(event.target).parents().attr('class'));
						jQuery('.facec').stop().animate({'margin-right':  0}, ETAPESCROLLSPEED, function()
						{
						});
					}
					jQuery('.zoneface .bulle').fadeOut(ETAPESCROLLSPEED);
					jQuery('.zoneface').removeClass('current');
					jQuery('.zoneface').children('.hov').fadeTo(ETAPESCROLLSPEED, 0);
					jQuery('.zoneface').children('.norm').fadeTo(ETAPESCROLLSPEED, 1);
					ZONEOPEN = false;
					animPuce('part5');
					
					playerZone.api("pause");
					playerZone.api("seekTo", 0); // retour début vidéo
					playerZone = null;
					
				}
			
			}        
		})

		jQuery('.zoneface .norm, .zoneface .hov').click(function (e) {
			
			e.stopPropagation();
			//alert('zoneface');
			ZONEOPEN = true;
			
			jQuery('.zoneface').removeClass('current');
			jQuery(this).parent('.zoneface').addClass('current');
			
			jQuery('.zoneface').children('.hov').fadeTo(ETAPESCROLLSPEED, 0);
			jQuery('.zoneface').children('.norm').fadeTo(ETAPESCROLLSPEED, 1);
			
			jQuery(this).parent('.zoneface').children('.norm').stop(true).fadeTo(ETAPESCROLLSPEED,0);
			jQuery(this).parent('.zoneface').children('.hov').stop(true).fadeTo(ETAPESCROLLSPEED,1);
				
			jQuery('.zoneface .bulle').fadeOut();
			jQuery(this).parent('.zoneface').children('.bulle').stop(true).fadeTo(ETAPESCROLLSPEED,1);
			
			var idZone = jQuery(this).attr('id').replace('launch','player');
			//alert(WIDTH_CONTENU);
			if(WIDTH_CONTENU > 800) {
				if(WIDTH_CONTENU < 1000) {
					right = (WIDTH_CONTENU < 900) ? 200 : 100;
					jQuery('.face').stop().animate({'margin-left':  -right}, ETAPESCROLLSPEED);
				}
				jQuery('.facec').stop().animate({'margin-right':  (75 * WIDTH_CONTENU / 100)}, ETAPESCROLLSPEED, function()
				{

						var iframeZone = jQuery('#'+idZone)[0];
						playerZone = $f(iframeZone);
						if (playerZone)
						{ 
							playerZone.addEvent("ready", function() {
								playerZone.api("seekTo", 0); // retour début vidéo
								playerZone.api("play"); // lancer en autoplay de toute façon
							});
						}
						
				});
			}
			
		});
	
	}
	function load() {
		ISLOAD = true;
		//alert(IS_TABLET);
		if(jQuery(".pen1").length > 0 && !IE8 && !IS_TABLET) {
			InitMouse();
			CallMouseMoveAnimate();
			load_anim();
		}
		var ua = navigator.userAgent,
		//eventc = (ua.match(/iPad/i)) ? "touchstart" : "click";
		eventc = (IS_TABLET) ? "touchstart" : "click";

		if(eventc == 'click')
			load_fancy();
	
	/*
		var s = skrollr.init({
			edgeStrategy: 'set',
			easing: {
				WTF: Math.random,
				inverted: function(p) {
					return 1-p;
				}
			}
		});
	*/
	
	
		$('.menu .current').children('.norm').fadeTo("normal",0);
		$('.menu .current').children('.hov').stop(true).fadeTo("normal",1);

		$body.removeClass('loading').addClass('loaded');

		if($('.homeSlide').length > 2)  // on est en home : onepage
		{
			$.fn.fullpage({
				//anchors: ['home', 'datas', 'product', 'experts', 'universal', 'injection', 'technology', 'meet-us', 'footer'],
				//anchors: ['home', 'product', 'experts', 'universal', 'injection', 'technology', 'meet-us', 'footer'],
				anchors: ['home', 'facts', 'technology', 'injection', 'experts', 'meet-us', 'footer'],
				menu: '#menu'
			});
		}
		else // on est pas en home pas de onepage
		{
			var windowsWidth = $('.section').width();
			if(IS_MOBILE)
			{
				windowsWidth = $(window).width();
			}
			windowsHeight = $(window).height();

			//$('.nav').css('left', windowsWidth).css('right', 'auto');
			$('.nav').css('right', $(window).width() - $('.section').width());
			$('.next').hide();			

			$('.section').each(function(){

				
			if(!$(this).hasClass('footer')) 
				$(this).addClass('table').wrapInner('<div class="tableCell" style="height:' + windowsHeight + 'px;width:' + windowsWidth + 'px;" />');

				var scrollHeight = windowsHeight - parseInt($(this).css('padding-bottom')) - parseInt($(this).css('padding-top'));
			
				//adjusting the height of the table-cell for IE and Firefox
				//if(options.verticalCentered){
					$(this).find('.tableCell').css('height', windowsHeight + 'px');
					$(this).find('.tableCell').css('width', windowsWidth + 'px');
				//}
				
				h = windowsHeight;
				if($(this).hasClass('footer')) h = 36;
			
				$(this).css('height', h + 'px');
			});
		}

		retaille();	
		
		$(window).resize(function() {
			clearTimeout(resizeTimeout);
			resizeTimeout = setTimeout(retaille, 100);
		});
			
		if(!IE8) 
			$('.drag').drags();
		
		/*** zone visage **/

		$(document).on("mouseup", function() {
		
				DRAG_ON = false;
                $('.drag').removeClass('draggable');
                $('.drag').removeClass('active-handle').parent().removeClass('draggable');
                $('.teosyalpen3d').removeClass('dragon');
     
		})
		


		/*** rollovers **/
		
		jQuery('.zone1').children('.bulle').stop(true).fadeIn();
		jQuery('.zone1').children('.hov').stop(true).fadeTo("normal",1);
		jQuery('.zone1').children('.norm').fadeTo("normal",0 );

		if(!IS_TABLET) {
		
			jQuery('.rollover').mouseenter(function() {
				
				if(!jQuery(this).hasClass('current') && !jQuery(this).hasClass('next') && !DRAG_ON)
				{
					if(jQuery(this).hasClass('zone'))
					{
						jQuery('.bulle').fadeOut();
						jQuery(this).children('.bulle').stop(true).fadeIn();
						jQuery('.zone').children('.hov').fadeTo(ETAPESCROLLSPEED, 0);
						jQuery('.zone').children('.norm').fadeTo(ETAPESCROLLSPEED, 1);
					}
					/*else
					{*/
						jQuery(this).children('.hov').stop(true).fadeTo(ETAPESCROLLSPEED, 1);
						jQuery(this).children('.norm').fadeTo(ETAPESCROLLSPEED, 0);
					//}
				}
			}).mouseleave(function() {
				if(!jQuery(this).hasClass('current') && !jQuery(this).hasClass('next') && !DRAG_ON)
				{

					if(jQuery(this).hasClass('zone'))
					{
						jQuery(this).children('.bulle').fadeOut();
					}
					//else
					//{
						jQuery(this).children('.hov').fadeTo(ETAPESCROLLSPEED, 0);
						jQuery(this).children('.norm').stop(true).fadeTo(ETAPESCROLLSPEED, 1);
					//}
				}
			});

			
			jQuery('.rolloveropa').mouseenter(function() {
				
				if(!jQuery(this).hasClass('current'))
				{
					//jQuery(this).children('.norm').fadeTo("normal",1 );

					jQuery(this).children('.hov').stop(true).fadeTo(ETAPESCROLLSPEED, 1);
					jQuery(this).children('.norm').fadeTo(ETAPESCROLLSPEED, 0);
				}
				
			}).mouseleave(function() {
				
				if(!jQuery(this).hasClass('current'))
				{
					//jQuery(this).children('.norm').stop(true).fadeTo("normal",0.5);
					jQuery(this).children('.hov').fadeTo(ETAPESCROLLSPEED, 0);
					jQuery(this).children('.norm').stop(true).fadeTo(ETAPESCROLLSPEED, 1);
				}
			});
		
		} else {

		}
		/*** slide **/
		
		slide();

		load_vid();
	}

	
   $.fn.drags = function(opt) {

        opt = $.extend({handle:"",cursor:"move"}, opt);

        if(opt.handle === "") {
            var $el = this;
        } else {
            var $el = this.find(opt.handle);
        }

        return $el.css('cursor', opt.cursor).on("mousedown", function(e) {
            if(opt.handle === "") {
                var $drag = $(this).addClass('draggable');
                $('.teosyalpen3d').addClass('dragon');
            } else {
                var $drag = $(this).addClass('active-handle').parent().addClass('draggable');
                $('.teosyalpen3d').addClass('dragon');
            }
            var z_idx = $drag.css('z-index'),
                drg_h = $drag.outerHeight(),
                drg_w = $drag.outerWidth(),
                pos_y = $drag.offset().top + drg_h - e.pageY,
                pos_x = $drag.offset().left + drg_w - e.pageX;
            $drag.css('z-index', 1000).parents().on("mousemove", function(e) {
			
				if( $('.draggable').length > 0) DRAG_ON = true;
				affLog('pageX '+e.pageX+' pos_x '+pos_x+' drg_w'+drg_w);
				
				var pos = e.pageX + pos_x - drg_w;
				var w = e.pageX + pos_x - (drg_w/2);
				
				if(w < WIDTH_CONTENU && w > 0)
				{
					jQuery('.teosyalpen3d.dragon').css({'width':  (w+1) });
				
					$('.draggable').offset({
						//top:e.pageY + pos_y - drg_h,
						left:pos
					}).on("mouseup", function() {
						$(this).removeClass('draggable').css('z-index', z_idx);
						DRAG_ON = false;
						animDrag();
					});
				}
				
            });
            e.preventDefault(); // disable selection
        }).on("mouseup", function() {
				DRAG_ON = false;
				animDrag();
            if(opt.handle === "") {
                $(this).removeClass('draggable');
                $('.teosyalpen3d').removeClass('dragon');
            } else {
                $(this).removeClass('active-handle').parent().removeClass('draggable');
                $('.teosyalpen3d').removeClass('dragon');
            }
        });
		

    }
		
	function fadeTo_iefix(el, vitesse, opacite)
	{
		//afflog('fadeTo_iefix  '+' el : '+el.attr('id')+' opacite : '+opacite);
		if (IE8) {
			if (opacite == 1)
				jQuery(el).show();
			else if (opacite == 0)
				jQuery(el).hide();
			jQuery(el).css('opacity', opacite);
			jQuery(el).css('filter', "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='fichier-png-24bits.png')");
		} else {
			//jQuery(el).css('opacity', opacite);

			if (opacite == 1)
				jQuery(el).stop().fadeIn();
			else if (opacite == 0)
				jQuery(el).stop().fadeOut();
			else
			{
				jQuery(el).stop().fadeTo(opacite, vitesse);
			}
		}
	}
	
	
	
} )( jQuery );

function retaille ()
{
	/*** zone blue filaire **/
	
		WIDTH_PAGE =  $window.width();
		WIDTH_CONTENU  =  $window.width()-100;
		
	if(jQuery('.teosyalpen3d').length > 0)
	{
		jQuery('.teosyalpen3d').css({'width':  WIDTH_CONTENU/2-40});
			
		jQuery('.filairebg').css({'width':  WIDTH_CONTENU});
		
		if(jQuery('.drag').length > 0)
			jQuery('.drag').css({'left':  WIDTH_CONTENU/2-40});
		
		
		//jQuery('.face').css({'right':  WIDTH_PAGE/2});
		
	}
	
	if(jQuery('.facec').length > 0 && !IS_MOBILE)
	{
		jQuery('.facec').css('width', 'auto');
		jQuery('.facec').width(jQuery('.facec .imgface').width());
	}
} 
	
	
/*** SLIDE PART  **/

var PAS = 0;
var CURRENT = 0;
var NEXT = 0;
var NUM = 0;
var BLOCK = false;

function retaille_slide ()
{
	PAS = jQuery('.slidetem').width();
	document.getElementById('slide').scrollLeft = PAS*(CURRENT+1);//reset the slider so the first image is still visible
} 
function slide()
{
	NUM = jQuery('.slidetem').length;
	if(NUM >0)
	{
		PAS = jQuery('.slidetem').width();

		jQuery('.slidetem').width(PAS);
		jQuery('#slide .slidecont').width(PAS*(NUM+2));

		jQuery('.slidetem').first().addClass('endless_slider_first');//identify the first and last images
		jQuery('.slidetem').last().addClass('endless_slider_last');


		jQuery('.endless_slider_first').clone().appendTo('#slide .slidecont');//clone the first image and put it at the end
		jQuery('.endless_slider_last').clone().prependTo('#slide .slidecont');//clone the last image and put it at the front

		jQuery('.slidetem').width(PAS);

		document.getElementById('slide').scrollLeft = PAS;//reset the slider so the first image is still visible

		jQuery('#prev').click(function(ev) {
		prev(ev);
		});

		jQuery('#next').click(function(ev) {
		next(ev);
		});
	}
}

function prev(e)
{
    e.preventDefault();
    if (CURRENT == 0)
	{
		affLog(-(NUM)*PAS);
		document.getElementById('slide').scrollLeft = (NUM+1)*PAS;//reset the slider back to the last image without animating
        NEXT = NUM-1;
    }
	else
	{
        NEXT = CURRENT - 1;
	}
	move(NEXT);
}

function next(e)
{
    e.preventDefault();
    if (CURRENT == NUM - 1)
	{
		affLog(-1*PAS);
		document.getElementById('slide').scrollLeft = -1*PAS;//reset the slider so the first image is still visible
        NEXT = 0;
	}
    else
	{
        NEXT = CURRENT + 1;
	}
    move(NEXT);
}

function move(id)
{
    if (!BLOCK)
    {
		BLOCK = true;

			CURRENT = id;

			jQuery('#slide').stop().animate({scrollLeft: PAS * (id+1)}, ETAPESCROLLSPEED, function()
			{
			});
		
		setTimeout(function() {
			BLOCK = false;
		}, ETAPESCROLLSPEED);
    }
}


function affLog(txt)
{
	//console && console.log && console.log(txt);
}
