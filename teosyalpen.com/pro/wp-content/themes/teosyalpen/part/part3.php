			
<?php
require ('customfield.php');
?>

<div class="partcont" data-center="opacity: 1" data-106-top="opacity: 0" data-anchor-target=".part3 .is">
    <div class="left2">
        <?php
        $post_part = get_page($idPagePart);
        $content = apply_filters('the_content', $post_part->post_content);
        echo $content;
        ?>
    </div>
    <div class="right2 hidemobile">	
        <img class="pen3" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/pen3.png" alt="Teosyal Pen"/>
    </div>
    <div class="clear clear50"></div>


    <img id="prev3" class="prevmob  hidesite" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/mobile/prev.png" alt="Previous" />
    <img id="next3" class="nextmob hidesite" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/mobile/next.png" alt="Next" />

    <div class="slidefull">
        <div class="slide" id="slidemobile3">
            <div class="slidecont">
                <div class="left slidemob3" data-bottom="opacity: 1" data-center="opacity: 0" data-anchor-target=".part3 .left">
                    <h3>LESS</h3><div class="traitblanc hidemobile"></div>
                    <div class="clear clear50 hidemobile"></div>
                    <ul>
                        <li class="picone"><img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/picto/pain.png" alt="Pain" /><br />Pain</li>
                        <li class="pictwo"><img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/picto/syringe.png" alt="Fear of syringe" /><br />Fear of syringes</li>
                        <li class="picthree"><img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/picto/side.png" alt="Side effects" /><br />Side effects</li>
                    </ul>
                </div>	
                <div class="center hidemobile"><div class="is"><span>IS</span></div>	</div>	
                <div class="right slidemob3">
                    <h3>MORE</h3><div class="traitblanc hidemobile"></div>
                    <div class="clear clear50 hidemobile"></div>
                    <ul>
                        <li class="picone"><img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/picto/patients.png" alt="Patients" /><br />Patients</li>
                        <li class="pictwo"><img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/picto/loyalty.png" alt="Loyalty" /><br />Loyalty</li>
                        <li class="picthree"><img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/picto/incomes.png" alt="Incomes" /><br />Income</li>
                    </ul>
                </div>	
            </div>	
        </div>	
    </div>	

    <div class="clear clear50 hidemobile"></div>
    <h2><?php echo $titre; ?></h2>	
    <div class="clear"></div>
</div>
<div class="clear"></div>
<div class="bas hidemobile">	
    <a class="btn next" href="#experts" data-menuanchor="experts">
        <img class="norm" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/nextfl.png" alt="Next" />
    </a>
</div>	
<div class="clear"></div>
