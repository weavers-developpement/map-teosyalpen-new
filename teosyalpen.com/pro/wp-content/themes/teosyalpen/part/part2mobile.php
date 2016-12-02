<?php
require ('customfield.php');
?>

<div class="partcont">
    <h1 class="coindroit"><?php echo $titre; ?></h1>
    <img id="prev2" class="prevmob  hidesite" src="/pro/wp-content/themes/teosyalpen/images/mobile/prev.png" alt="Previous" />
    <img id="next2" class="nextmob hidesite" src="/pro/wp-content/themes/teosyalpen/images/mobile/next.png" alt="Next" />
    <div class="partcont2">
        <div class="slide" id ="slidemobile2">
            <div class="slidecont">
                <div class="three slidemob slidemob2">
                    <div class="rond regular table">
						<div class="tr">
							<h2 class="td"><?php echo $titretopleft; ?></h2>
						</div>
                    </div>
					<div class="texttopleft">
						<?php echo apply_filters('the_content', $texttopleft); ?>
						<div class="chiffre"><?php echo $numbertopleft; ?></div>
					</div>
                </div>
                <div class="three slidemob slidemob2">
                    <div class="rond traitement table">
						<div class="tr">
							<h2 class="td"><?php echo $titrebottomleft; ?></h2>
						</div>
                    </div>
					<div class="texttopleft">
						<?php echo apply_filters('the_content', $textbottomleft); ?>
						<div class="chiffre"><?php echo $numberbottomleft; ?></div>
					</div>
                </div>
                <div class="three slidemob slidemob2">
                    <div class="rond fear table">
						<div class="tr">
							<h2 class="td"><?php echo $titretopright; ?></h2>
						</div>
                    </div>
					<div class="texttopleft">
						<?php echo apply_filters('the_content', $texttopright); ?>
						<div class="chiffre"><?php echo $numbertopright; ?></div>
					</div>
                </div>
                <div class="three slidemob slidemob2">
                    <div class="rond common table">
						<div class="tr">
							<h2 class="td"><?php echo $titrebottomright; ?></h2>
						</div>
                    </div>
					<div class="texttopleft">
						<?php echo apply_filters('the_content', $textbottomright); ?>
						<div class="chiffre"><?php echo $numberbottomright; ?></div>
					</div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<h2 class="botttom"><?php echo $soustitre; ?></h2>

