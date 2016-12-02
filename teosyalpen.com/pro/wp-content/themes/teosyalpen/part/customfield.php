<?php

$titre = get_post_meta($idPagePart, 'titre', true);
$soustitre = get_post_meta($idPagePart, 'soustitre', true);
$surtitre = get_post_meta($idPagePart, 'surtitre', true);

if($idPagePart == 10)
{
	$numbertopleft = get_post_meta($idPagePart, 'numbertopleft', true);
	$titretopleft = get_post_meta($idPagePart, 'titretopleft', true);
	$texttopleft = get_post_meta($idPagePart, 'texttopleft', true);
	
	$numbertopright = get_post_meta($idPagePart, 'numbertopright', true);
	$titretopright = get_post_meta($idPagePart, 'titretopright', true);
	$texttopright = get_post_meta($idPagePart, 'texttopright', true);
	

	$numberbottomleft = get_post_meta($idPagePart, 'numberbottomleft', true);
	$titrebottomleft = get_post_meta($idPagePart, 'titrebottomleft', true);
	$textbottomleft = get_post_meta($idPagePart, 'textbottomleft', true);
	
	$numberbottomright = get_post_meta($idPagePart, 'numberbottomright', true);
	$titrebottomright = get_post_meta($idPagePart, 'titrebottomright', true);
	$textbottomright = get_post_meta($idPagePart, 'textbottomright', true);
	
}
if($idPagePart == 15)
{
	$ename1 = get_post_meta($idPagePart, 'ename1', true);
	$town1 = get_post_meta($idPagePart, 'town1', true);
	$etext1 = get_post_meta($idPagePart, 'etext1', true);
	$epic1 = get_post(get_post_meta(get_the_ID(), 'epic1', true));
	$evid1 = get_post_meta($idPagePart, 'evid1', true);

	$ename2 = get_post_meta($idPagePart, 'ename2', true);
	$town2 = get_post_meta($idPagePart, 'town2', true);
	$etext2 = get_post_meta($idPagePart, 'etext2', true);
	$epic2 = get_post(get_post_meta(get_the_ID(), 'epic2', true));
	$evid2 = get_post_meta($idPagePart, 'evid2', true);

	$ename3 = get_post_meta($idPagePart, 'ename3', true);
	$town3 = get_post_meta($idPagePart, 'town3', true);
	$ename3 = get_post_meta($idPagePart, 'ename3', true);
	$etext3 = get_post_meta($idPagePart, 'etext3', true);
	$epic3 = get_post(get_post_meta(get_the_ID(), 'epic3', true));
	$evid3 = get_post_meta($idPagePart, 'evid3', true);
}

if($idPagePart == 17)
{
	$titleface1 = get_post_meta($idPagePart, 'titleface1', true);
	$textface1 = get_post_meta($idPagePart, 'textface1', true);
	$vidface1 = get_post_meta($idPagePart, 'vidface1', true);

	$titleface2 = get_post_meta($idPagePart, 'titleface2', true);
	$textface2 = get_post_meta($idPagePart, 'textface2', true);
	$vidface2 = get_post_meta($idPagePart, 'vidface2', true);

	$titleface3 = get_post_meta($idPagePart, 'titleface3', true);
	$textface3 = get_post_meta($idPagePart, 'textface3', true);
	$vidface3 = get_post_meta($idPagePart, 'vidface3', true);
}

if($idPagePart == 19)
{
	$titlezone1 = get_post_meta($idPagePart, 'titlezone1', true);
	$textzone1 = get_post_meta($idPagePart, 'textzone1', true);

	$titlezone2 = get_post_meta($idPagePart, 'titlezone2', true);
	$textzone2 = get_post_meta($idPagePart, 'textzone2', true);

	$titlezone3 = get_post_meta($idPagePart, 'titlezone3', true);
	$textzone3 = get_post_meta($idPagePart, 'textzone3', true);

	$titlezone4 = get_post_meta($idPagePart, 'titlezone4', true);
	$textzone4 = get_post_meta($idPagePart, 'textzone4', true);

	$titlezone5 = get_post_meta($idPagePart, 'titlezone5', true);
	$textzone5 = get_post_meta($idPagePart, 'textzone5', true);

	$titlezone6 = get_post_meta($idPagePart, 'titlezone6', true);
	$textzone6 = get_post_meta($idPagePart, 'textzone6', true);
}

if($idPagePart == 21)
{
	$adress = get_post_meta($idPagePart, 'adress', true);
	$phone = get_post_meta($idPagePart, 'phone', true);
	$fax = get_post_meta($idPagePart, 'fax', true);
	$email = get_post_meta($idPagePart, 'email', true);
	
	$brochure = get_post_meta($idPagePart, 'brochure', true);
	$notice = get_post_meta($idPagePart, 'notice', true);
	$instructions = get_post_meta($idPagePart, 'instructions', true);
}


if($idPagePart == 109)
{
	$title1 = get_post_meta($idPagePart, 'title1', true);
	$text1 = get_post_meta($idPagePart, 'text1', true);

	$title2 = get_post_meta($idPagePart, 'title2', true);
	$text2 = get_post_meta($idPagePart, 'text2', true);

	$title3 = get_post_meta($idPagePart, 'title3', true);
	$text3 = get_post_meta($idPagePart, 'text3', true);

	$title4 = get_post_meta($idPagePart, 'title4', true);
	$text4 = get_post_meta($idPagePart, 'text4', true);
}
?>
