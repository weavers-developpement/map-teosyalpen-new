<?php 
require ('customfield.php');
$imgFace = ($detect->isMobile()) ? 'face-mobile.png' : 'face.png';
?>
<div class="face">
    <div class="facec">
        <img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/<?php echo $imgFace; ?>" class="imgface" alt="Face" />
        <div class="rolloveropa zone zoneface zonefront">
            <img class="norm" id="vid1launch" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/cible.png" alt="Zone front" />
            <img class="hov" id="vid1launch2" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/cible-hover.png" alt="Zone front" />
            <div class="bulle">
                <div class="traitbulle"></div>	
                <div class="bullec">
                    <h3><?php echo $titleface1; ?></h3>
                    <p><?php echo $textface1; ?></p>	
                    <div class="vid vid1" id="<?php echo $vidface1; ?>"></div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="rolloveropa zone zoneface zoneoeil">
            <img class="norm" id="vid2launch" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/cible.png" alt="Delicate areas" />
            <img class="hov" id="vid2launch2" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/cible-hover.png" alt="Delicate areas" />
            <div class="bulle">
                <div class="traitbulle"></div>
                <div class="bullec">
                    <h3><?php echo $titleface2; ?></h3>
                    <p><?php echo $textface2; ?></p>
                    <div class="vid vid2" id="<?php echo $vidface2; ?>"></div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="rolloveropa zone zoneface zonelevre">
            <img class="norm" id="vid3launch" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/cible.png" alt="Sensitive areas" />
            <img class="hov" id="vid3launch2" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/cible-hover.png" alt="Sensitive areas" />
            <div class="bulle">
                <div class="traitbulle"></div>
                <div class="bullec">
                    <h3><?php echo $titleface3; ?></h3>
                    <p><?php echo $textface3; ?></p>
                    <div class="vid vid3" id="<?php echo $vidface3; ?>"></div>	
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php
if (!$detect->isMobile() ) {
?>
<div class="bas hidemobile">	 
    <a class="btn next" href="#experts" data-menuanchor="experts">
        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/nextfl.png" alt="Next" />
    </a>
</div>	
<div class="clear"></div>
<?php
}
?>
