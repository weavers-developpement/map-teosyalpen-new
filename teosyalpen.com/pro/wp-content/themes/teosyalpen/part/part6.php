<?php 
require ('customfield.php');
$imgFilaire = ($detect->isMobile()) ? 'filaire-mobile.png' : 'filaire.png';
$imgFilaire = 'filaire.png';
?>


<div class="partcont">
        <h1 class="coindroit"><?php echo $titre; ?></h1>

    <?php
    $class = "";
    if (!$detect->isMobile() && !$detect->isTablet()) {
        ?>

        <div class="drag hidemobile">
            <div>
                <img width="14" height="24" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/dragfl.png" class="dragfl" alt="" />
                <img width="14" height="24" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/dragfr.png" class="dragfr" alt=""  />
            </div>
        </div>
        <div class="teosyalpen3d hidemobile">
            <div class="filairebg">

                <div class="filairecont">
                    <div class="filaire">
                        <div class="filairec">
                            <img class="" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/teosyalpen3d.png" alt="Teosyal Pen 3d" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
    ?>

    <div class="filairebg">

        <div class="echellev hidemobile">
            <div class="dessin"></div>
            <div class="clear"></div>
            <p>24 mm</p>
        </div>
        <div class="filairecont">
            <div class="filaire">
                <div class="filairec">
                    <img class="" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/<?php echo $imgFilaire; ?>" alt="filaire" />
                    <div class="rollover zone zone1">
                        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone.png" alt="<?php echo $titlezone1; ?>" />
                        <img class="hov" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone-hover.png" alt="<?php echo $titlezone1; ?>" />
                        <div class="bulle">
                            <div class="traitbullep"></div>
                            <div class="bullec">
                                <h3><?php echo $titlezone1; ?></h3>
                                <?php echo apply_filters('the_content', $textzone1); ?>
                            </div>
                        </div>
                    </div>
                    <div class="rollover zone zone2">
                        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone.png" alt="<?php echo $titlezone2; ?>" />
                        <img class="hov" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone-hover.png" alt="<?php echo $titlezone2; ?>" />
                        <div class="bulle">
                            <div class="traitbullep"></div>
                            <div class="bullec">
                                <h3><?php echo $titlezone2; ?></h3>
                                <?php echo apply_filters('the_content', $textzone2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="rollover zone zone3">
                        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone.png" alt="<?php echo $titlezone3; ?>" />
                        <img class="hov" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone-hover.png" alt="<?php echo $titlezone3; ?>" />
                        <div class="bulle">
                            <div class="traitbullep"></div>
                            <div class="bullec">
                                <h3><?php echo $titlezone3; ?></h3>
                                <?php echo apply_filters('the_content', $textzone3); ?>
                            </div>
                        </div>
                    </div>
                    <div class="rollover zone zone4">
                        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone.png" alt="<?php echo $titlezone4; ?>" />
                        <img class="hov" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone-hover.png" alt="<?php echo $titlezone4; ?>" />
                        <div class="bulle">
                            <div class="traitbullep"></div>
                            <div class="bullec">
                                <h3><?php echo $titlezone4; ?></h3>
                                <?php echo apply_filters('the_content', $textzone4); ?>
                            </div>
                        </div>
                    </div>
                    <div class="rollover zone zone5">
                        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone.png" alt="<?php echo $titlezone5; ?>" />
                        <img class="hov" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone-hover.png" alt="<?php echo $titlezone5; ?>" />
                        <div class="bulle">
                            <div class="traitbullep"></div>	
                            <div class="bullec">
                                <h3><?php echo $titlezone5; ?></h3>
                                <?php echo apply_filters('the_content', $textzone5); ?>
                            </div>
                        </div>
                    </div>
                    <div class="rollover zone zone6">
                        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone.png" alt="<?php echo $titlezone6; ?>" />
                        <img class="hov" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/zone-hover.png" alt="<?php echo $titlezone6; ?>" />
                        <div class="bulle">
                            <div class="traitbullep"></div>
                            <div class="bullec">
                                <h3><?php echo $titlezone6; ?></h3>
                                <?php echo apply_filters('the_content', $textzone6); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="echellehcont hidemobile">
            <div class="echelleh">
                <div class="dessin"></div>
                <div class="clear"></div>
                <p>130 mm</p>
            </div>
        </div>
        <div class="grams hidemobile">40 Grams</div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="bas hidemobile">	
    <a class="btn next" href="#injection" data-menuanchor="injection">
        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/nextfl.png" alt="Next" />
    </a>
</div>	
<div class="clear"></div>
