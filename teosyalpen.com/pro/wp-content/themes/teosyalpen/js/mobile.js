
var SENSIBILITE = 50;

/*** SLIDE **/

var VITESSE_MOBILE = 10000;
var ETAPESCROLLSPEED = 1000;
var NUM_MOBILE_MORE = 2;





function traitekeydown_mobile(e)
{
    //affLog(e.which);
    if (e.which == 39) {
        next_mobile2(e)
    }
    if (e.which == 37) {
        prev_mobile2(e)
    }
}


/*** SLIDE PART 2 **/

var PAS_MOBILE2 = 0;
var CURRENT_MOBILE2 = 0;
var NEXT_MOBILE2 = 0;
var NUM_MOBILE2 = 0;
var BLOCK2 = false;

function retaille_slidemobile2(w)
{
	if(NUM_MOBILE2 == 0) return;
	PAS_MOBILE2 = w;
	document.getElementById('slidemobile2').scrollLeft = PAS_MOBILE2*(CURRENT_MOBILE2+1);//reset the slider so the first image is still visible
	jQuery('.slidemob2').width(PAS_MOBILE2);
	jQuery('#slidemobile2 .slidecont').width(PAS_MOBILE2*(NUM_MOBILE2+NUM_MOBILE_MORE));
} 
function slidemobile2(first)
{
	PAS_MOBILE2 = jQuery('.slidemob2').width();
    NUM_MOBILE2 = jQuery('.slidemob2').length;
	
	if(NUM_MOBILE2 == 0) return;
	
	jQuery('.slidemob2').width(PAS_MOBILE2);
	jQuery('#slidemobile2 .slidecont').width(PAS_MOBILE2*(NUM_MOBILE2+NUM_MOBILE_MORE));
	
	
   jQuery('.slidemob2').first().addClass('endless_slider_first2');//identify the first and last images
   jQuery('.slidemob2').last().addClass('endless_slider_last2');
	
   
   jQuery('.endless_slider_first2').clone().appendTo('#slidemobile2 .slidecont');//clone the first image and put it at the end
   jQuery('.endless_slider_last2').clone().prependTo('#slidemobile2 .slidecont');//clone the last image and put it at the front
   
   
   jQuery('.slidemob2').first().addClass('hidesite');
   jQuery('.slidemob2').last().addClass('hidesite');
   
   
	jQuery('.slidemob2').width(PAS_MOBILE2);
	
	document.getElementById('slidemobile2').scrollLeft = PAS_MOBILE2;//reset the slider so the first image is still visible
	
    jQuery('#prev2').click(function(ev) {
        prev_mobile2(ev);
    });

    jQuery('#next2').click(function(ev) {
        next_mobile2(ev);
    });
}

function prev_mobile2(e)
{
    e.preventDefault();
    if (CURRENT_MOBILE2 == 0)
	{
		affLog(-(NUM_MOBILE2)*PAS_MOBILE2);
		document.getElementById('slidemobile2').scrollLeft = (NUM_MOBILE2+1)*PAS_MOBILE2;//reset the slider back to the last image without animating
        NEXT_MOBILE2 = NUM_MOBILE2-1;
    }
	else
	{
        NEXT_MOBILE2 = CURRENT_MOBILE2 - 1;
	}
	move_mobile2(NEXT_MOBILE2);
}

function next_mobile2(e)
{
    e.preventDefault();
    if (CURRENT_MOBILE2 == NUM_MOBILE2 - 1)
	{
		affLog(-1*PAS_MOBILE2);
		document.getElementById('slidemobile2').scrollLeft = -1*PAS_MOBILE2;//reset the slider so the first image is still visible
        NEXT_MOBILE2 = 0;
	}
    else
	{
        NEXT_MOBILE2 = CURRENT_MOBILE2 + 1;
	}
    move_mobile2(NEXT_MOBILE2);
}

function move_mobile2(id)
{
    if (!BLOCK2)
    {
		BLOCK2 = true;

			CURRENT_MOBILE2 = id;

			jQuery('#slidemobile2').stop().animate({scrollLeft: PAS_MOBILE2 * (id+1)}, ETAPESCROLLSPEED, function()
			{
			});
		
		setTimeout(function() {
			BLOCK2 = false;
		}, ETAPESCROLLSPEED);
    }
}





/*** SLIDE PART 3 **/






var PAS_MOBILE3 = 0;
var CURRENT_MOBILE3 = 0;
var NEXT_MOBILE3 = 0;
var NUM_MOBILE3 = 0;
var BLOCK3 = false;

function retaille_slidemobile3(w)
{
	if(NUM_MOBILE3 == 0) return;
	PAS_MOBILE3 = w;
	document.getElementById('slidemobile3').scrollLeft = PAS_MOBILE3*(CURRENT_MOBILE3+1);//reset the slider so the first image is still visible
	jQuery('.slidemob3').width(PAS_MOBILE3);
	jQuery('#slidemobile3 .slidecont').width(PAS_MOBILE3*(NUM_MOBILE3+NUM_MOBILE_MORE));
} 

function slidemobile3()
{
	PAS_MOBILE3 = jQuery('.slidemob3').width();
    NUM_MOBILE3 = jQuery('.slidemob3').length;
	
	if(NUM_MOBILE3 == 0) return;

	jQuery('.slidemob3').width(PAS_MOBILE3);
	jQuery('#slidemobile3 .slidecont').width(PAS_MOBILE3*(NUM_MOBILE3+NUM_MOBILE_MORE));
	
   jQuery('.slidemob3').first().addClass('endless_slider_first3');//identify the first and last images
   jQuery('.slidemob3').last().addClass('endless_slider_last3');
	
   
   jQuery('.endless_slider_first3').clone().appendTo('#slidemobile3 .slidecont');//clone the first image and put it at the end
   jQuery('.endless_slider_last3').clone().prependTo('#slidemobile3 .slidecont');//clone the last image and put it at the front
   
   jQuery('.slidemob3').first().addClass('hidesite');
   jQuery('.slidemob3').last().addClass('hidesite');
   
	jQuery('.slidemob3').width(PAS_MOBILE3);
	
	document.getElementById('slidemobile3').scrollLeft = PAS_MOBILE3;//reset the slider so the first image is still visible
	
    jQuery('#prev3').click(function(ev) {
        prev_mobile3(ev);
    });

    jQuery('#next3').click(function(ev) {
        next_mobile3(ev);
    });
}

function prev_mobile3(e)
{
    e.preventDefault();
    if (CURRENT_MOBILE3 == 0)
	{
		affLog(-(NUM_MOBILE3)*PAS_MOBILE3);
		document.getElementById('slidemobile3').scrollLeft = (NUM_MOBILE3+1)*PAS_MOBILE3;//reset the slider back to the last image without animating
        NEXT_MOBILE3 = NUM_MOBILE3-1;
    }
	else
	{
        NEXT_MOBILE3 = CURRENT_MOBILE3 - 1;
	}
	move_mobile3(NEXT_MOBILE3);
}

function next_mobile3(e)
{
    e.preventDefault();
    if (CURRENT_MOBILE3 == NUM_MOBILE3 - 1)
	{
		affLog(-1*PAS_MOBILE3);
		document.getElementById('slidemobile3').scrollLeft = -1*PAS_MOBILE3;//reset the slider so the first image is still visible
        NEXT_MOBILE3 = 0;
	}
    else
	{
        NEXT_MOBILE3 = CURRENT_MOBILE3 + 1;
	}
    move_mobile3(NEXT_MOBILE3);
}

function move_mobile3(id)
{
    if (!BLOCK3)
    {
		BLOCK3 = true;

			CURRENT_MOBILE3 = id;

			jQuery('#slidemobile3').stop().animate({scrollLeft: PAS_MOBILE3 * (id+1)}, ETAPESCROLLSPEED, function()
			{
			});
		
		setTimeout(function() {
			BLOCK3 = false;
		}, ETAPESCROLLSPEED);
    }
}









/*** SLIDE PART 5 **/










var PAS_MOBILE5 = 0;
var CURRENT_MOBILE5 = 0;
var NEXT_MOBILE5 = 0;
var NUM_MOBILE5 = 0;
var BLOCK5 = false;

function retaille_slidemobile5(w)
{
	if(NUM_MOBILE5 == 0) return;
	PAS_MOBILE5 = w;
	document.getElementById('slidemobile5').scrollLeft = PAS_MOBILE5*(CURRENT_MOBILE5+1);//reset the slider so the first image is still visible

	jQuery('.slidemob5').width(PAS_MOBILE5);
	jQuery('#slidemobile5 .slidecont').width(PAS_MOBILE5*(NUM_MOBILE5+NUM_MOBILE_MORE));
} 

function slidemobile5()
{
	PAS_MOBILE5 = jQuery('.slidemob5').width();
    NUM_MOBILE5 = jQuery('.slidemob5').length;
	
	if(NUM_MOBILE5 == 0) return;

	jQuery('.slidemob5').width(PAS_MOBILE5);
	jQuery('#slidemobile5 .slidecont').width(PAS_MOBILE5*(NUM_MOBILE5+NUM_MOBILE_MORE));
	
   jQuery('.slidemob5').first().addClass('endless_slider_first5');//identify the first and last images
   jQuery('.slidemob5').last().addClass('endless_slider_last5');
	
   
   jQuery('.endless_slider_first5').clone().appendTo('#slidemobile5 .slidecont');//clone the first image and put it at the end
   jQuery('.endless_slider_last5').clone().prependTo('#slidemobile5 .slidecont');//clone the last image and put it at the front
   
   jQuery('.slidemob5').first().addClass('hidesite');
   jQuery('.slidemob5').last().addClass('hidesite');
   
	jQuery('.slidemob5').width(PAS_MOBILE5);
	
	document.getElementById('slidemobile5').scrollLeft = PAS_MOBILE5;//reset the slider so the first image is still visible
	
    jQuery('#prev5').click(function(ev) {
        prev_mobile5(ev);
    });

    jQuery('#next5').click(function(ev) {
        next_mobile5(ev);
    });
}

function prev_mobile5(e)
{
    e.preventDefault();
    if (CURRENT_MOBILE5 == 0)
	{
		affLog(-(NUM_MOBILE5)*PAS_MOBILE5);
		document.getElementById('slidemobile5').scrollLeft = (NUM_MOBILE5+1)*PAS_MOBILE5;//reset the slider back to the last image without animating
        NEXT_MOBILE5 = NUM_MOBILE5-1;
    }
	else
	{
        NEXT_MOBILE5 = CURRENT_MOBILE5 - 1;
	}
	move_mobile5(NEXT_MOBILE5);
}

function next_mobile5(e)
{
    e.preventDefault();
    if (CURRENT_MOBILE5 == NUM_MOBILE5 - 1)
	{
		affLog(-1*PAS_MOBILE5);
		document.getElementById('slidemobile5').scrollLeft = -1*PAS_MOBILE5;//reset the slider so the first image is still visible
        NEXT_MOBILE5 = 0;
	}
    else
	{
        NEXT_MOBILE5 = CURRENT_MOBILE5 + 1;
	}
    move_mobile5(NEXT_MOBILE5);
}

function move_mobile5(id)
{
    if (!BLOCK5)
    {
		BLOCK5 = true;

			CURRENT_MOBILE5 = id;


			jQuery('.slideimg').fadeTo(ETAPESCROLLSPEED,0 );
			jQuery('.slideimg'+(id+1)).stop(true).fadeTo(ETAPESCROLLSPEED,1);
			
			
			jQuery('#slidemobile5').stop().animate({scrollLeft: PAS_MOBILE5 * (id+1)}, ETAPESCROLLSPEED, function()
			{
			});
		
		setTimeout(function() {
			BLOCK5 = false;
		}, ETAPESCROLLSPEED);
    }
}









/*** SLIDE PART 6 **/










var PAS_MOBILE6 = 0;
var CURRENT_MOBILE6 = 0;
var NEXT_MOBILE6 = 0;
var NUM_MOBILE6 = 0;
var BLOCK6 = false;

function retaille_slidemobile6(w)
{
	PAS_MOBILE6 = w;
	document.getElementById('slidemobile6').scrollLeft = PAS_MOBILE6*(CURRENT_MOBILE6+1);//reset the slider so the first image is still visible
	jQuery('.slidemob6').width(PAS_MOBILE6);
	jQuery('#slidemobile6 .slidecont').width(PAS_MOBILE6*(NUM_MOBILE6+NUM_MOBILE_MORE));
} 

function slidemobile6()
{
	jQuery('.filairecont').scrollLeft = 500;
		
	PAS_MOBILE6 = jQuery('.slidemob6').width();
    NUM_MOBILE6 = jQuery('.slidemob6').length;
	
	if(NUM_MOBILE6 == 0) return;

	jQuery('.slidemob6').width(PAS_MOBILE6);
	jQuery('#slidemobile6 .slidecont').width(PAS_MOBILE6*(NUM_MOBILE6+NUM_MOBILE_MORE));
	
	jQuery('.slidemob6').first().addClass('endless_slider_first6');//identify the first and last images
	jQuery('.slidemob6').last().addClass('endless_slider_last6');

   
   jQuery('.endless_slider_first6').clone().appendTo('#slidemobile6 .slidecont');//clone the first image and put it at the end
   jQuery('.endless_slider_last6').clone().prependTo('#slidemobile6 .slidecont');//clone the last image and put it at the front
   
   jQuery('.slidemob6').first().addClass('hidesite');
   jQuery('.slidemob6').last().addClass('hidesite');
   
	jQuery('.slidemob6').width(PAS_MOBILE6);
	
	document.getElementById('slidemobile6').scrollLeft = PAS_MOBILE6;//reset the slider so the first image is still visible
	
	
		
	jQuery('.zone'+(NEXT_MOBILE6+1)).children('.norm').fadeTo(ETAPESCROLLSPEED, 0);
	jQuery('.zone'+(NEXT_MOBILE6+1)).children('.hov').stop(true).fadeTo(ETAPESCROLLSPEED,1);
	
				jQuery('.filairecont').stop().animate({scrollLeft: 500}, ETAPESCROLLSPEED, function()
				{
				});
	
    jQuery('#prev6').click(function(ev) {
        prev_mobile6(ev);
    });

    jQuery('#next6').click(function(ev) {
        next_mobile6(ev);
    });
}

function prev_mobile6(e)
{
    e.preventDefault();
    if (CURRENT_MOBILE6 == 0)
	{
		affLog(-(NUM_MOBILE6)*PAS_MOBILE6);
		document.getElementById('slidemobile6').scrollLeft = (NUM_MOBILE6+1)*PAS_MOBILE6;//reset the slider back to the last image without animating
        NEXT_MOBILE6 = NUM_MOBILE6-1;
    }
	else
	{
        NEXT_MOBILE6 = CURRENT_MOBILE6 - 1;
	}
	move_mobile6(NEXT_MOBILE6);
}

function next_mobile6(e)
{
    e.preventDefault();
    if (CURRENT_MOBILE6 == NUM_MOBILE6 - 1)
	{
		affLog(-1*PAS_MOBILE6);
		document.getElementById('slidemobile6').scrollLeft = -1*PAS_MOBILE6;//reset the slider so the first image is still visible
        NEXT_MOBILE6 = 0;
	}
    else
	{
        NEXT_MOBILE6 = CURRENT_MOBILE6 + 1;
	}
    move_mobile6(NEXT_MOBILE6);
}

function move_mobile6(id)
{
    if (!BLOCK6)
    {
		BLOCK6 = true;

			CURRENT_MOBILE6 = id;

			//alert(id);
			jQuery('.zone .hov').fadeTo(ETAPESCROLLSPEED,0 );
			jQuery('.zone .norm').stop(true).fadeTo(ETAPESCROLLSPEED, 1);
				
			jQuery('.zone'+(id+1)).children('.norm').fadeTo(ETAPESCROLLSPEED, 0);
			jQuery('.zone'+(id+1)).children('.hov').stop(true).fadeTo(ETAPESCROLLSPEED,1);
			
			if((id+1) > 4)
			{
				jQuery('.filairecont').stop().animate({scrollLeft: 0}, ETAPESCROLLSPEED, function()
				{
				});
			
			}
			else
			{
				jQuery('.filairecont').stop().animate({scrollLeft: 500}, ETAPESCROLLSPEED, function()
				{
				});
			
			}
			
			
			
			jQuery('#slidemobile6').stop().animate({scrollLeft: PAS_MOBILE6 * (id+1)}, ETAPESCROLLSPEED, function()
			{
			});
		
		setTimeout(function() {
			BLOCK6 = false;
		}, ETAPESCROLLSPEED);
    }
}











/*** SLIDE PART 5b **/














var PAS_MOBILE7 = 0;
var CURRENT_MOBILE7 = 0;
var NEXT_MOBILE7 = 0;
var NUM_MOBILE7 = 0;
var BLOCK7 = false;

function retaille_slidemobile7(w)
{
	PAS_MOBILE7 = w;
	document.getElementById('slidemobile7').scrollLeft = PAS_MOBILE7*(CURRENT_MOBILE7+1);//reset the slider so the first image is still visible

	jQuery('.slidemob7').width(PAS_MOBILE7);
	jQuery('#slidemobile7 .slidecont').width(PAS_MOBILE7*(NUM_MOBILE7+NUM_MOBILE_MORE));
} 

function slidemobile7()
{
	PAS_MOBILE7 = jQuery('.slidemob7').width();
    NUM_MOBILE7 = jQuery('.slidemob7').length;
	
	if(NUM_MOBILE7 == 0) return;

	jQuery('.slidemob7').width(PAS_MOBILE7);
	jQuery('#slidemobile7 .slidecont').width(PAS_MOBILE7*(NUM_MOBILE7+NUM_MOBILE_MORE));
	
   jQuery('.slidemob7').first().addClass('endless_slider_first7');//identify the first and last images
   jQuery('.slidemob7').last().addClass('endless_slider_last7');
	
   
   jQuery('.endless_slider_first7').clone().appendTo('#slidemobile7 .slidecont');//clone the first image and put it at the end
   jQuery('.endless_slider_last7').clone().prependTo('#slidemobile7 .slidecont');//clone the last image and put it at the front
   
   jQuery('.slidemob7').first().addClass('hidesite');
   jQuery('.slidemob7').last().addClass('hidesite');
   
	jQuery('.slidemob7').width(PAS_MOBILE7);
	
	document.getElementById('slidemobile7').scrollLeft = PAS_MOBILE7;//reset the slider so the first image is still visible
	
    jQuery('#prev7').click(function(ev) {
        prev_mobile7(ev);
    });

    jQuery('#next7').click(function(ev) {
        next_mobile7(ev);
    });
}

function prev_mobile7(e)
{
    e.preventDefault();
    if (CURRENT_MOBILE7 == 0)
	{
		affLog(-(NUM_MOBILE7)*PAS_MOBILE7);
		document.getElementById('slidemobile7').scrollLeft = (NUM_MOBILE7+1)*PAS_MOBILE7;//reset the slider back to the last image without animating
        NEXT_MOBILE7 = NUM_MOBILE7-1;
    }
	else
	{
        NEXT_MOBILE7 = CURRENT_MOBILE7 - 1;
	}
	move_mobile7(NEXT_MOBILE7);
}

function next_mobile7(e)
{
    e.preventDefault();
    if (CURRENT_MOBILE7 == NUM_MOBILE7 - 1)
	{
		affLog(-1*PAS_MOBILE7);
		document.getElementById('slidemobile7').scrollLeft = -1*PAS_MOBILE7;//reset the slider so the first image is still visible
        NEXT_MOBILE7 = 0;
	}
    else
	{
        NEXT_MOBILE7 = CURRENT_MOBILE7 + 1;
	}
    move_mobile7(NEXT_MOBILE7);
}

function move_mobile7(id)
{
    if (!BLOCK7)
    {
		BLOCK7 = true;

			CURRENT_MOBILE7 = id;


			jQuery('.slideimg').fadeTo(ETAPESCROLLSPEED,0 );
			jQuery('.slideimg'+(id+1)).stop(true).fadeTo(ETAPESCROLLSPEED,1);
			
			
			jQuery('#slidemobile7').stop().animate({scrollLeft: PAS_MOBILE7 * (id+1)}, ETAPESCROLLSPEED, function()
			{
			});
		
		setTimeout(function() {
			BLOCK7 = false;
		}, ETAPESCROLLSPEED);
    }
}























































