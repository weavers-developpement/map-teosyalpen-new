// variable de dev
var TIMEOUT_ANIM;
var TIMEOUT_ANIM2;
var TIMEOUT_ANIM3;
var TIMEOUT_ANIM4;
var TIMEOUT_ANIM5;
var TIMEOUT_ANIM6;
var TIMEOUT_ANIM7;
var ANIM_DRAG = true;
var TIMEOUT_ANIM_NEXT;

// params
var scrollingSpeed = 700; // durée du scroll pour retarder anim a l arrivee (voir jquery.fullPage.js)

var marginTopNext1; // marge defaut next 1
var marginBottomNext1; // marge defaut next 1
var marginTopNext; // marge defaut next autres

var marginLeftDrag; // marge defaut fleche drag
var marginRightDrag; // marge defaut fleche drag

var heightPuce;  // height defaut puce visage
var widthPuce;  // width defaut puce visage
var marginLeftPuce;  // marge defaut puce visage
var marginTopPuce;  // marge defaut puce visage

var WIDTHPX = 2; // amplitude en px modif width puce visage
var NEXTPX = 5; // amplitude en px modif marge img next 1 et autres et  fleche drag

function load_anim(){

		widthPuce = jQuery('.part5 .rolloveropa img').css('width').replace('px','');
		heightPuce = jQuery('.part5 .rolloveropa img').css('height').replace('px','');
		marginLeftPuce = jQuery('.part5 .rolloveropa img').css('margin-left').replace('px','');
		marginTopPuce = jQuery('.part5 .rolloveropa img').css('margin-top').replace('px','');

		//marginTopNext = jQuery('.part2 .bas img').css('margin-top').replace('px', '');
		/*
		marginTopNext1 = jQuery('.part1 .bas img').css('margin-top').replace('px', '');
		marginBottomNext1 = jQuery('.part1 .bas img').css('margin-bottom').replace('px', '');*/

		marginLeftDrag = jQuery('.part6 .drag img.dragfr').css('margin-left').replace('px', '');
		marginRightDrag = jQuery('.part6 .drag img.dragfl').css('margin-right').replace('px', '');
/*
		jQuery('.part2 .number .numberc').each(function () {
			jQuery(this).stop().css('height', jQuery('.part2 .number .chiffre').height());
			//jQuery(this).stop().css('width', jQuery(this).width());
			//jQuery(this).attr('data-top', number*jQuery(this).height()*1);
		});
		jQuery('.part2 .number .chiffre').each(function () {
			//jQuery(this).stop().css('height', jQuery(this).height());
			//jQuery(this).stop().css('width', jQuery(this).width());
			var number = jQuery(this).html()*1;
			jQuery(this).attr('data-top', (number)*jQuery(this).height()*1);
			var html ='';
			for(i=0; i <= number; i++) {
				html +='<span>'+i+'</span>';
				//html +=''+i+' ';
			}
			//html ='<div>'+html+'</div>';
			jQuery(this).html(html);
		});*/
animNext1('part1');
}

function moveSectionAnimation(el){

         jQuery('#cookie-notice').fadeOut();
					jQuery('.zoneface .bulle').fadeOut(ETAPESCROLLSPEED);
					jQuery('.zoneface').removeClass('current');
					jQuery('.zoneface').children('.hov').fadeTo(ETAPESCROLLSPEED, 0);
					jQuery('.zoneface').children('.norm').fadeTo(ETAPESCROLLSPEED, 1);
					ZONEOPEN = false;
					
	if(IS_MOBILE) return;

	
	
	
	
	
	affLog('move ' + el.attr('id'));
	elId = el.attr('id');
	/*
	if(elId == 'part3') {


		jQuery('.part3 .right h3').stop().css('opacity', 0);
		jQuery('.part3 .right li').stop().css('opacity', 0);
		jQuery('.part3 .left h3').stop().css('opacity', 0);
		jQuery('.part3 .left li').stop().css('opacity', 0);
		clearTimeout(TIMEOUT_ANIM3);
		TIMEOUT_ANIM3 = setTimeout(function () {
		
			var vitesse = 500;

			jQuery('.part3 .right h3').stop().css('opacity', 0);
			jQuery('.part3 .right li').stop().css('opacity', 0);
			jQuery('.part3 .left li').stop().css('opacity', 0);
			jQuery('.part3 .left h3').stop().css('opacity', 0).animate({
				opacity: 1,
			}, vitesse, function() {
				jQuery('.part3 .left li.picone').stop().css('opacity', 0).animate({
					opacity: 1,
				}, vitesse, function() {
					jQuery('.part3 .left li.pictwo').stop().css('opacity', 0).animate({
						opacity: 1,
					}, vitesse, function() {
						jQuery('.part3 .left li.picthree').stop().css('opacity', 0).animate({
							opacity: 1,
						}, vitesse, function() {
							jQuery('.part3 .right h3').stop().css('opacity', 0).animate({
								opacity: 1,
							}, vitesse, function() {
								jQuery('.part3 .right li.picone').stop().css('opacity', 0).animate({
									opacity: 1,
								}, vitesse, function() {
									jQuery('.part3 .right li.pictwo').stop().css('opacity', 0).animate({
										opacity: 1,
									}, vitesse, function() {
										jQuery('.part3 .right li.picthree').stop().css('opacity', 0).animate({opacity : 1}, vitesse);
									});
								});
							});
						});
					});
				});
			});
		
		}, scrollingSpeed);
	}
	if(elId == 'part2' || elId == 'part4') {
	}*/
	/*if(elId == 'part2') {
		jQuery('.part2 .number .chiffre').each(function () {
			var top = jQuery(this).attr('data-top')*1;
			jQuery(this).stop().css('top', 0).animate({top : -top}, 2000, 'easeOutCirc');
		});
	}
	if(elId == 'part1' || elId == 'part3') {
		jQuery('.part2 .number .chiffre').each(function () {
			var top = jQuery(this).attr('data-top')*1;
			jQuery(this).stop().css('top', -top).animate({top : 0}, 2000, 'easeOutCirc');
		});
	}*/

	
	if(elId == 'part5') {
		clearTimeout(TIMEOUT_ANIM4);
		TIMEOUT_ANIM4 = setTimeout(function () {
			/*
		jQuery('#'+elId+' .rolloveropa img').stop().effect( "bounce", 
          {distance:5, direction:'down', times:2}, 1000 );
			*/
			jQuery('#'+elId+' .play').stop().animate({marginLeft: "+=5"}, 500, function() {
				jQuery(this).stop().animate({marginLeft: "-=5"}, 500);
			});
		
		}, scrollingSpeed);
	}
	
	
	if(elId == 'part4') {
		clearTimeout(TIMEOUT_ANIM5);
		TIMEOUT_ANIM5 = setTimeout(function () {
			animPuce(elId);
		}, scrollingSpeed);
	}
	
	if(elId == 'part3') {
		clearTimeout(TIMEOUT_ANIM6);
		TIMEOUT_ANIM6 = setTimeout(function () {
		
			animDrag();
			
			retaille ();
			/*
			w = WIDTH_CONTENU/4+50;
			w2 = WIDTH_CONTENU/4+25;
			jQuery('#'+elId+' .teosyalpen3d ').stop().animate({width: "-="+w}, 500, function() {
				jQuery(this).stop().animate({width: "+="+w2}, 500);
			});
		
			jQuery('#'+elId+' .drag').stop().animate({left: "-="+w}, 500, function() {
				jQuery(this).stop().animate({left: "+="+w2}, 500);
			});*/
		
			var vitPart6 = 1000;
			w = WIDTH_CONTENU/2;
			w2 = WIDTH_CONTENU/2-40;
			jQuery('#'+elId+' .teosyalpen3d ').stop().animate({width: WIDTH_CONTENU}, vitPart6, function() {
				jQuery(this).stop().animate({width: w2}, vitPart6);
			});
		/*
			jQuery('#'+elId+' .drag').stop().animate({left: "+="+w}, vitPart6, function() {
				jQuery(this).stop().animate({left: "-="+w2}, vitPart6);
			});*/
			jQuery('#'+elId+' .drag').stop().animate({left: WIDTH_CONTENU}, vitPart6, function() {
				jQuery(this).stop().animate({left: w2}, vitPart6);
			});
		
		
		}, scrollingSpeed);
	}
	
	
	/*
	if(elId == 'part7') {
		clearTimeout(TIMEOUT_ANIM6);
		TIMEOUT_ANIM6 = setTimeout(function () {
		
			animDrag();
			
			retaille ();
		
			var vitPart6 = 1000;
			w = WIDTH_CONTENU/2;
			w2 = WIDTH_CONTENU/2+50;
			jQuery('#'+elId+' .teosyalpen3d ').stop().animate({width: "+="+w}, vitPart6, function() {
				jQuery(this).stop().animate({width: "-="+w2}, vitPart6);
			});
		
			jQuery('#'+elId+' .drag').stop().animate({left: "+="+w}, vitPart6, function() {
				jQuery(this).stop().animate({left: "-="+w2}, vitPart6);
			});
		
		
		}, scrollingSpeed);
	}*/
	
	if(elId == 'part6') {
		jQuery('.part7 h1').stop().css('opacity', 0);
		jQuery('.part7 .pen6').stop().css('opacity', 0);
		jQuery('.part7 .mid2').stop().css('opacity', 0);
		jQuery('.part7 .bottom').stop().css('opacity', 0);
		clearTimeout(TIMEOUT_ANIM7);
		TIMEOUT_ANIM7 = setTimeout(function () {
		
			jQuery('.part7 .pen6').stop().css('opacity', 0);
			jQuery('.part7 .mid2').stop().css('opacity', 0);
			jQuery('.part7 .buttons').stop().css('opacity', 0);
			jQuery('.part7 h1').stop().css('opacity', 0).animate({
				opacity: 1,
			}, 500, function() {
				jQuery('.part7 .pen6').stop().css('opacity', 0).animate({opacity : 1}, 500, function() {
					jQuery('.part7 .mid2').stop().css('opacity', 0).animate({opacity : 1}, 500, function() {
						jQuery('.part7 .try span').stop().animate({marginTop: "+=3"}, 500, function() {
							jQuery(this).stop().animate({marginTop: "0"}, 500);
						});
						
						jQuery('.part7 .buttons').stop().css('opacity', 0).animate({opacity : 1}, 500, function() {
							jQuery('.part7 .buttons .btn').stop().animate({marginTop: "+=3"}, 500, function() {
								jQuery(this).stop().animate({marginTop: "0"}, 500);
							});
						});
						
					});
				});
			});
		
		}, scrollingSpeed);
		
	}
	// next 1
	/*
	if(elId == 'part1') {
	
		clearTimeout(TIMEOUT_ANIM_NEXT);
		TIMEOUT_ANIM_NEXT = setTimeout(function () {
			animNext1(elId);
		}, scrollingSpeed);
	
	}*/
	// next
	if(elId == 'part2' || elId == 'part3' || elId == 'part4' || elId == 'part5' || elId == 'part6' || elId == 'part7') {
		clearTimeout(TIMEOUT_ANIM_NEXT);
		TIMEOUT_ANIM_NEXT = setTimeout(function () {
			animNext(elId)
		}, scrollingSpeed);
	}
}


function animPuce(elId) {
	if(!ZONEOPEN) {

		jQuery('#'+elId+' .rolloveropa img').stop().css('width', widthPuce);
		jQuery('#'+elId+' .rolloveropa img').stop().css('height', heightPuce);
		jQuery('#'+elId+' .rolloveropa img').stop().css('margin-left', marginLeftPuce);
		jQuery('#'+elId+' .rolloveropa img').stop().css('margin-top', marginTopPuce);

		//var moitie = WIDTHPX;
		var moitie = WIDTHPX/2;
/*
		jQuery('#'+elId+' .rolloveropa img').stop().animate({width: "+="+WIDTHPX, height: "+="+WIDTHPX, marginLeft: "-="+moitie, marginTop: "-="+moitie}, 500, function() {
			jQuery(this).stop().animate({width: "-="+WIDTHPX, height: "-="+WIDTHPX, marginLeft: "+="+moitie, marginTop: "+="+moitie}, 500, function() {
				animPuce(elId);
			});
		});*/
//alert(widthPuce);
		jQuery('#'+elId+' .rolloveropa img').stop().animate({width: widthPuce-WIDTHPX, height: heightPuce-WIDTHPX, marginLeft: marginLeftPuce+moitie, marginTop: marginTopPuce+moitie}, 500, function() {
			jQuery(this).stop().animate({width: widthPuce, height: heightPuce, marginLeft: marginLeftPuce, marginTop: marginTopPuce}, 500, function() {
				animPuce(elId);
			});
		});

	}
}


function animNext1(elId) {

	 jQuery('#'+elId+' .bas img').stop().css('margin-top', marginTopNext1);
	 jQuery('#'+elId+' .bas img').stop().css('margin-bottom', marginBottomNext1);

	jQuery('#'+elId+' .bas img').stop().animate({marginTop: "+="+NEXTPX, marginBottom: "-="+NEXTPX}, 500, function() {
		jQuery(this).stop().animate({marginTop: "-="+NEXTPX, marginBottom: "+="+NEXTPX}, 500, function() {
			animNext1(elId);
		});
	});
}

function animNext(elId) {

	 jQuery('#'+elId+' .bas img').stop().css('margin-top', marginTopNext);

	jQuery('#'+elId+' .bas img').stop().animate({marginTop: "+="+NEXTPX}, 500, function() {
		jQuery(this).stop().animate({marginTop: "-="+NEXTPX}, 500, function() {
			animNext(elId);
		});
	});
}

function animDrag() {
	if(!DRAG_ON) {
		 jQuery('.part6 .drag img.dragfr').stop().css('margin-left', marginLeftDrag);
		 jQuery('.part6 .drag img.dragfl').stop().css('margin-right', marginRightDrag);

		jQuery('.part6 .drag img.dragfr').stop().animate({marginLeft: "+=3"}, 500, function() {
			jQuery(this).stop().animate({marginLeft: "-=3"}, 500, function() {
				animDrag();
			});
		});
		jQuery('.part6 .drag img.dragfl').stop().animate({ marginRight: "+=3"}, 500, function() {
			jQuery(this).stop().animate({marginRight: "-=3"}, 500);
		});
	}
}




// Mouse
var MouseRatioX, MouseRatioY = MouseDecalX = MouseDecalY = 0;
var inertieValX = inertieValY = 0;
var MouseInertia = .05;
var LimitX = 0;
function InitMouse() {
	jQuery(document).mousemove(function(e){
		MouseRatioX = e.clientX / WIDTH_PAGE;
		MouseRatioY = e.clientY / HEIGHT_PAGE;
		MouseDecalX = ((MouseRatioX - .5) * 7);
		MouseDecalY = ((MouseRatioY - .5) * 2);
		e.preventDefault();
	});
}

function CallMouseMoveAnimate() {



    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
                                   || window[vendors[x]+'CancelRequestAnimationFrame'];
    }
 
    if (!window.requestAnimationFrame)
        window.requestAnimationFrame = function(callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
              timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
 
    if (!window.cancelAnimationFrame)
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        };








	window.requestAnimationFrame(CallMouseMoveAnimate);
	//LimitX  = jQuery(".pen1").css("left").replace('px', '')*1;
	LimitX  += jQuery(".pen1").css("marginLeft").replace('px', '')*1;

		var valX = -Math.round((MouseDecalX * 10));
		inertieValX += (valX - inertieValX) * MouseInertia;
		
		var valY = -Math.round((MouseDecalY * 10));
		inertieValY += (valY - inertieValY) * MouseInertia;
		
		var x = inertieValX * Number(jQuery(".pen1").attr("data-depth"));
		var y = inertieValY * Number(jQuery(".pen1").attr("data-depth"));
		
		//	affLog('x'+(x*-1)+' LimitX'+LimitX);

		if(x < 0 && (x*-1) > LimitX) return; // pour éviter de sortir de l'écran

		jQuery(".pen1").css({'-webkit-transform':'translate('+x+'px, '+y+'px)', '-moz-transform':'translate('+x+'px, '+y+'px)', '-o-transform':'translate('+x+'px, '+y+'px)', '-ms-transform':'translate('+x+'px, '+y+'px)', 'transform': 'translate('+x+'px, '+y+'px)'});


}
