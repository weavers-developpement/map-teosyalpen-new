// Remplacez la valeur UA-XXXXXX-Y par l'identifiant analytics de votre site.
gaProperty = 'UA-44528935-4';

// Désactive le tracking si le cookie d’Opt-out existe déjà.

var disableStr = 'ga-disable-' + gaProperty;

if (document.cookie.indexOf('cookie_notice_accepted=false') > -1) {
	window[disableStr] = true;
	console.log(disableStr);
}

jQuery(document).ready(function($) {

    $(document).on('click', '.gaOptout', function(event) {
	gaOptout();
    });
    $(document).on('click', '#cn-accept-cookie', function(event) {
        event.preventDefault();
        var cnTime = new Date();
        var cnLater = new Date();
        //set new time in seconds
        cnLater.setTime(parseInt(cnTime.getTime()) + parseInt(cnArgs.cookieTime) * 1000);
        //set cookie
        document.cookie = cnArgs.cookieName + '=true' + ';expires=' + cnLater.toGMTString() + ';' + (cnArgs.cookieDomain !== undefined && cnArgs.cookieDomain !== '' ? 'domain=' + cnArgs.cookieDomain + ';' : '') + (cnArgs.cookiePath !== undefined && cnArgs.cookiePath !== '' ? 'path=' + cnArgs.cookiePath + ';' : '');
        //hide box
        if (cnArgs.hideEffect === 'fade') {
            $('#cookie-notice').fadeOut(300, function() {
                $(this).remove();
            });
        } else if (cnArgs.hideEffect === 'slide') {
            $('#cookie-notice').slideUp(300, function() {
                $(this).remove();
            });
        } else {
            $('#cookie-notice').remove();
        }
    });
    if (document.cookie.indexOf('cookie_notice_accepted') === -1) {//L'utilisateur n'a pas encore de cookie de consentement
        var referrer_host = document.referrer.split('/')[2];
        if (referrer_host != document.location.hostname) { //si il vient d'un autre site
            if (cnArgs.hideEffect === 'fade') {
                $('#cookie-notice').fadeIn(300);
            } else if (cnArgs.hideEffect === 'slide') {
                $('#cookie-notice').slideDown(300);
            }
        } else { //sinon on lui dépose un cookie 
            $('#cookie-notice').remove();
            var cnTime = new Date();
            var cnLater = new Date();
            //set new time in seconds
            cnLater.setTime(parseInt(cnTime.getTime()) + parseInt(cnArgs.cookieTime) * 1000);
            //set cookie
            document.cookie = cnArgs.cookieName + '=true' + ';expires=' + cnLater.toGMTString() + ';' + (cnArgs.cookieDomain !== undefined && cnArgs.cookieDomain !== '' ? 'domain=' + cnArgs.cookieDomain + ';' : '') + (cnArgs.cookiePath !== undefined && cnArgs.cookiePath !== '' ? 'path=' + cnArgs.cookiePath + ';' : '');
        }
    } else {
        $('#cookie-notice').remove();
    }



});

function getCookieExpireDate() { 
	var cookieTimeout = 34214400000;// Le nombre de millisecondes que font 13 mois 
	var date = new Date();
	date.setTime(date.getTime()+cookieTimeout);
	var expires = "; expires="+date.toGMTString();
	return expires;
}

// Fonction d'effacement des cookies   
function delCookie(name )   {
    path = ";path=" + "/";
    domain = ";domain=" + "."+document.location.hostname;
    var expiration = "Thu, 01-Jan-1970 00:00:01 GMT";       
    document.cookie = name + "=" + path + domain + ";expires=" + expiration;
}
  
// Efface tous les types de cookies utilisés par Google Analytics    
function deleteAnalyticsCookies() {
    var cookieNames = ["__utma","__utmb","__utmc","__utmz","_ga"]
    for (var i=0; i<cookieNames.length; i++)
        delCookie(cookieNames[i])
}
   
// La fonction d'opt-out   
function gaOptout() {
    document.cookie = disableStr + '=true;'+ getCookieExpireDate() +' ; path=/';       
    document.cookie = 'cookie_notice_accepted=false;'+ getCookieExpireDate() +' ; path=/';

    window[disableStr] = true;
    deleteAnalyticsCookies();
                $('#cookie-notice').FadeOut(300);
}

jQuery(window).load(function() {
    /* var $window = jQuery(window);
     $window.scroll(function () {
         jQuery('#cookie-notice').fadeOut();
     });*/
});