<?php
require ('customfield.php');
?>

<div class="partcont">
    <h1 class="coindroit"><?php echo $titre; ?></h1>
    <img id="prev2" class="prevmob  hidesite" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/mobile/prev.png" alt="Previous" />
    <img id="next2" class="nextmob hidesite" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/mobile/next.png" alt="Next" />
    <div class="partcont2">
        <div class="left">
            <div class="three">
				<div class="rondimg">
					<img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/rond.png" alt="<?php echo $titretopleft; ?>" />
				</div>
				<h2 class="titre"><?php echo $titretopleft; ?></h2>
                <div class="texttopleft">
					<?php echo apply_filters('the_content', $texttopleft); ?>
                </div>
				<div class="chiffre"><?php echo $numbertopleft; ?></div>
            </div>
            <div class="clear hidemobile"></div>
			<img class="flechestat flechestatl hidemobile" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/fleche-statl.png" alt="Relation" />
            <div class="clear hidemobile"></div>
            <div class="three threebas">
				<div class="rondimg">
					<img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/rond.png" alt="<?php echo $titrebottomleft; ?>" />
				</div>
				<h2 class="titre"><?php echo $titrebottomleft; ?></h2>
                <div class="texttopleft">
					<?php echo apply_filters('the_content', $textbottomleft); ?>
                </div>
				<div class="chiffre"><?php echo $numberbottomleft; ?></div>
            </div>
        </div>
        <div class="center hidemobile">
			<img class="flechestat flechestatt hidemobile" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/fleche-statt.png" alt="Relation" />
            <div class="ha">
                <div class="td">
                    <h2>HA</h2>
                    <p class="p1">INJECTION</p>
                    <p class="p2">STATS</p>
                </div>
            </div>
			<img class="flechestat flechestatb hidemobile" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/fleche-statb.png" alt="Relation" />
        </div>
        <div class="right">
            <div class="three">
				<div class="rondimg">
					<img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/rond.png" alt="<?php echo $titretopright; ?>" />
				</div>
				<h2 class="titre"><?php echo $titretopright; ?></h2>
                <div class="texttopleft">
					<?php echo apply_filters('the_content', $texttopright); ?>
                </div>
				<div class="chiffre"><?php echo $numbertopright; ?></div>
            </div>
            <div class="clear hidemobile"></div>
			<img class="flechestat flechestatr hidemobile" src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/fleche-statr.png" alt="Relation" />
            <div class="clear hidemobile"></div>
            <div class="three threebas">
				<div class="rondimg">
					<img src="/pro/wp-content/themes/teosyalpen/images/loaderimg.gif" data-src="/pro/wp-content/themes/teosyalpen/images/bg/rond.png" alt="<?php echo $titrebottomright; ?>" />
				</div>
				<h2 class="titre"><?php echo $titrebottomright; ?></h2>
                <div class="texttopleft">
					<?php echo apply_filters('the_content', $textbottomright); ?>
                </div>
				<div class="chiffre"><?php echo $numberbottomright; ?></div>
            </div>
        </div>

        <div class="clear"></div>

    </div>
    <div class="clear clear50"></div>

</div>


<h2 class="botttom"><?php echo $soustitre; ?></h2>
<div class="bas hidemobile">
    <a class="btn next" href="#technology" data-menuanchor="technology">
        <img class="norm" width="17" height="7" src="/pro/wp-content/themes/teosyalpen/images/bg/nextbleufl.png" alt="Next" />
    </a>
</div>
<div class="clear"></div>
