<?php
    
    if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip_address));   
    $countryCode = $ipdat->geoplugin_countryCode;    
    //$countryCode = 'FR';
?>


<script type="text/javascript">
    
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
var currip = "<?php echo $ipdat->geoplugin_request; ?>";
console.log("currip -> "+currip);
var country_code = "<?php echo $countryCode; ?>";
setCookie("country_code", country_code, 30);
var country_cookie = getCookie('country_code');
if(country_cookie=="DE")
country_cookie="GR";
console.log("COUNTRY CODE -> "+country_cookie);
</script>
