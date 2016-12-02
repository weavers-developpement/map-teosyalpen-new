<?php
if(!function_exists('db')) {
	function db($var) {
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}
}
if(!function_exists('akerd')) {
	function akerd($sKey, $aArray, $val) {
		if(is_array($aArray) && array_key_exists($sKey, $aArray)) {
			return $aArray[$sKey];
		} else {
			return $val;
		}
	}
}

/**
 * Retourne 
 * - l'extrait si renseigné 
 * - ou le contenu de l'article avant la balise more si présente
 * - ou extrait par défaut à partir du contenu
 *  
 * @param int $iPostId
 */
function getTheCustomExcerpt($iPostId, $iNbWords = 0) {
	$sExcerpt = '';
	$sExcerpt = get_post_field( 'post_excerpt', $iPostId );
	if(empty($sExcerpt)) {
		$sContent = get_post_field( 'post_content', $iPostId );
		$aContentParts = get_extended( $sContent );
		if(!empty($aContentParts['extended'])) {
			$sExcerpt = $aContentParts['main'];
		} else {
			$sExcerpt = wp_trim_words($sContent, 55);
		}
	}
	if(!empty($iNbWords)) {
		$sExcerpt = wp_trim_words($sExcerpt, $iNbWords);
	}
	return apply_filters('the_excerpt', $sExcerpt);
}

if(!function_exists('sanitizeContactFormField')) {
	function sanitizeContactFormField($sField) {
		return trim(stripslashes(strip_tags(nl2br($sField))));
	}
}
