<?php
//ces 5 premières lignes doivent impérativement se retrouver tout au début de votre page, avant tout code PHP ou HTML !!!
header('Content-Type: text/html; charset=iso-8859-1');
$cryptinstall="crypt/cryptographp.fct.php";
include $cryptinstall;  

$filename = "infos.php";
if(file_exists($filename))
{ ?>

	<?php
	include("infos.php");
	?>

	<?php
	if($_POST)
	{
		$from = htmlentities(stripslashes($_POST['e-mail']));
		$title1 = stripslashes($_POST['objet']);
		$title = "Message d'un visiteur [$title1]";
		$content = stripslashes($_POST['message']);
		$nom = ucfirst(stripslashes($_POST['nom']));
		$prenom = ucfirst(stripslashes($_POST['prenom']));
		
		if($title1 != '') /* verification de l'objet */
		{
			if($content != '<br>' OR $content !=  '') /* vérification du message */
			{
				if($nom != '') /* vérification du champs 'nom' */
				{
					if($prenom != '')
					{
						$auteur = $prenom.' '.$nom;
					}
					else
					{
						$auteur = $nom;
					}
					
					if(chk_crypt($_POST['code']))
					{
						if (getenv("HTTP_CLIENT_IP"))
						$ip = getenv("HTTP_CLIENT_IP");
						elseif(getenv("HTTP_X_FORWARDED_FOR"))
						$ip = getenv("HTTP_X_FORWARDED_FOR");
						else
						$ip = getenv("REMOTE_ADDR");

						$useragent = $_SERVER['HTTP_USER_AGENT'];
						require_once('libs/useragent.php');

						$infosclient .= '<hr /><p>IP : <a href="http://ipgetinfo.com/index.php?ip='.$ip.'">'.$ip.'</a><br />';
						
						if($_SERVER['GEOIP_CITY'] != '')
						$infosclient .= 'Localisation : '.utf8_encode($_SERVER['GEOIP_CITY']).', '.$_SERVER['GEOIP_COUNTRY_NAME'].' (<a href="http://maps.google.com/maps?q='.$_SERVER['GEOIP_LATITUDE'].','.$_SERVER['GEOIP_LONGITUDE'].'">carte</a>)<br />';
						
						$infosclient .= 'User-agent : '.$useragent.'<br />';
						$userinfo = get_ua_info($useragent);
						$infosclient .= 'Navigateur : '.$userinfo['name'].' '.$userinfo['ua_version'].'<br />';
						$infosclient .= 'OS : '.$userinfo['os'].' '.$userinfo['os_version'].'</p>';
						
						$auteur = utf8_encode($auteur);
						$titre = utf8_encode($title);
						$contenu = utf8_encode($content.$infosclient);
						
						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$headers .= 'From: '.$auteur.' <'.$from.'>' . "\r\n";
						if (@mail($email,$titre,$contenu,$headers))
						$ok = true;
						else
						$erreur = 'Votre message n\'a pas été envoyé pour une raison inconnue, merci de réessayer plus tard.';
						$erreuren = 'Your message hasn\'t been delivered because of an unknown reason, please try again later.';
						
						if($_POST['copie'])
						{
							$email = $from;
							@mail($email,$titre,$contenu,$headers);
						}
					}
					else
					$erreur = 'Code de vérification incorrect.';
					$erreuren = 'Checking code incorrect.';
				}
				else
				$erreur = 'Merci de renseigner le champs Nom';
				$erreuren = 'You must enter your name.';
			}
			else
			$erreur = 'Merci de renseigner le message';
			$erreuren = 'You must enter your message.';
		}
		else
		$erreur = 'Merci de renseigner l\'objet du message.';
		$erreuren = 'You must enter the object of message.';
	}
}
else {
header('Location: install.php');
}

// systeme de langue
if ($_GET['lang'] == "fr" OR $_GET['lang'] == "en")
{
	$lang2 = $_GET['lang'];
}
else
{
	$lang2 = $lang;
}


if ($lang2 == "fr")
{
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="content-type" content="text/html; charset=iso-8859-15" />
			<title>Formulaire de contact</title>
			<link href="styleform.css" rel="stylesheet" type="text/css" media="screen" />
			<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
			<script type="text/javascript" src="nicEdit_fr.js"></script>
			
			<!-- Facebox -->
			<script src="http://clementdugal.com/jquery.js" type="text/javascript"></script>
			<link href="http://clementdugal.com/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
			<script src="http://clementdugal.com/facebox/facebox.js" type="text/javascript"></script>
			<script type="text/javascript">
			  jQuery(document).ready(function($) {
				$('a[rel*=facebox]').facebox();
				$('a[rel*=facebox]').facebox({
				  loading_image : 'http://clementdugal.com/facebox/loading.gif',
				  close_image   : 'http://clementdugal.com/facebox/closelabel.gif'
				});
			  })
			</script>
			
			<!-- Textareas -->
			<script type="text/javascript">
			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
			</script>
			
			<!-- Fonction vérification mail du formulaire -->
			<script type="text/javascript">
			function valideMail(type)
			{
				var mail = document.getElementById('e-mail').value;
				var verif = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]{2,}[.][a-zA-Z]{2,4}$/;
				if (verif.exec(mail) == null)
				{
					if(type == 'default')
					document.getElementById('statusmail').innerHTML = 'L\'adresse e-mail est invalide';
					document.getElementById('statusmail').className = 'rouge';
					document.getElementById('send').disabled=true;
					return false;
				}
				else
				{
					if(type == 'default')
					document.getElementById('statusmail').innerHTML = 'L\'adresse e-mail est valide';
					document.getElementById('statusmail').className = 'vert';
					document.getElementById('conseil').style.display = 'none';
					document.getElementById('send').disabled=false;
					return true;
				}
			}
			
			
			/* fct° langue */
			var langue = '<?php echo $lang2; ?>',
				bouton = document.getElementById('boutonChanger') ;

			bouton.disabled = true ;
			function changeDisabled(valeur) {
			  if (valeur==langue) {
				 bouton.disabled = true ;
			  }
			  else {
				 bouton.disabled = false ;
			  }
			}
			</script>
		</head>
	<body><div class="encadre"><div class="interieur">
	<center><h1>Formulaire de contact</h1>
	<form method="post" action="contact.php?lang=fr">
	
	<?php	
	if(!$ok)
	{

	if($erreur != '') {
		echo '<table><tr><td><img src="images/erreur.png" /></td>';
		echo '<td><p class="error" style="color:red;">'.$erreur.'</p></td></tr></table>';
	}
	?>

	<p><table>
		<tr>
			<td><label for="nom">Nom *</label> : <br /></td>
			<td><input type="text" name="nom" id="nom" size="66" tabindex="10" value="<?php echo $_POST['nom']; ?>" /></td>
		</tr>
		<tr>
			<td><label for="prenom">Prénom</label> : <br /></td>
			<td><input type="text" name="prenom" id="prenom" size="66" tabindex="20" value="<?php echo $_POST['prenom']; ?>" /></td>
		</tr>
		<tr>
			<td><label for="e-mail">Votre e-mail *</label> : <br /></td>
			<td><input type="text" onchange="javascript:valideMail('default');" onblur="javascript:valideMail('default');" onkeyup="javascript:valideMail('default');" name="e-mail" id="e-mail" size="66" tabindex="25" value="<?php echo $_POST['e-mail']; ?>" /><br />
			<span id="statusmail"></span></td><br />
		</tr>
		<tr>
			<td><label for="objet">Objet du message *</label> : <br /></td>
			<td><input type="text" name="objet" id="objet" size="66" tabindex="30" value="<?php echo $_POST['objet']; ?>"/></td>
		</tr>
		<tr>
			<td><label for="message">Votre message *</label> : <br /></td>
			<td><textarea name="message" id="message" rows="11" cols="50" tabindex="40"><?php echo $_POST['message']; ?></textarea><br />
			<input type="checkbox" name="copie" id="copie"/><label for="copie">M'envoyer une copie.</label></td>
		</tr>
		<tr>
			<td><label for="code">Recopiez le code *</label> : <br /></td>
			<td><?php dsp_crypt(0,1); ?><input type="text" name="code" id="code"></td>
		</tr>
	</table></p>
	<p><input type="submit" value="Envoyer" name="send" id="send" />
	</form><br />
	<script type="text/javascript">
	<!--
	document.write('<span id="conseil"> (<em>Il est impossible d\'envoyer le formulaire tant que votre adresse e-mail est invalide.');
	document.write('</em>)</span>');
	-->
	</script>
	<form action="contact.php?lang=fr" method="post"><input type="submit" value="Remise à zéro" /></form>
	</p>
	<?php
	}
	else
	echo '<table><tr><td><img src="images/info.png" /></td><td><p style="color:green;">Votre message a bien été envoyé.</p></td></tr></table>';
	?><p><a href="<?php echo $site; ?>">Retour</a></center></p>
	</div></div>
	<center><p class="copy">Ce formulaire a été généré par <a href="#cf" class="blanc" rel="facebox">ContactForm, un script de Mes-scripts-PHP.com</a>.<br />
	Langue: Français (<a href="#lang" rel="facebox" class="copy">changer</a>)</p></center>
	
	<div  id="lang" style="display:none;">
	<center><h2>Changer la langue du formulaire</h2><br />
	<form method="get" action="contact.php" class="copy">
	<select name="lang" id="langf" onchange="changeDisabled(this.value)">
	<option value="fr" selected="selected">Français</option>
	<option value="en">English</option></select>
	<input type="submit" value="Valider" id="boutonChanger" />
	</form>
	</center></div>
	
	<div id="cf" style="display:none;">
	<p>ContactForm est un des scripts gratuit proposé par Mes Scripts PHP.com. Ce script est librement téléchargeable à partir de notre site.
	Il est distribué sous licence GNU-GPL. Merci encore à tous ceux qui nous soutiennent et à tous ceux qui téléchargent nos scripts !</p>
	<p><a href="http://www.mes-scripts-php.com/" target="_blank">Visiter Mes Scripts PHP.com</a></p>
	</div>
	
	<script type="text/javascript">
	<!--
	if(valideMail('noprint') != true)
	document.getElementById('send').disabled=true;
	else
	document.getElementById('conseil').style.display = 'none';
	-->
	</script>
	</body>
	</html>
<?php
}
elseif ($lang2 == "en")
{ ?>
	<!-- 
	      Anglais
	-->
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="content-type" content="text/html; charset=iso-8859-15" />
			<title>Contact formulary</title>
			<link href="styleform.css" rel="stylesheet" type="text/css" media="screen" />
			<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
			
			<!-- Facebox -->
			<script src="http://clementdugal.com/jquery.js" type="text/javascript"></script>
			<link href="http://clementdugal.com/facebox/facebox.css" media="screen" rel="stylesheet" type="text/css"/>
			<script src="http://clementdugal.com/facebox/facebox.js" type="text/javascript"></script>
			<script type="text/javascript">
			  jQuery(document).ready(function($) {
				$('a[rel*=facebox]').facebox();
			  // On peut aussi personnaliser les images
			  // de chargement et de fermeture :
				$('a[rel*=facebox]').facebox({
				  loading_image : 'http://clementdugal.com/facebox/loading.gif',
				  close_image   : 'http://clementdugal.com/facebox/closelabel.gif'
				});
			  })
			</script>
			
			<!-- Textarea nicEditor -->
			<script type="text/javascript" src="nicEdit.js"></script>
			<script type="text/javascript">
			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
			</script>
			
			<script type="text/javascript">
			function valideMail(type)
			{
				var mail = document.getElementById('e-mail').value;
				var verif = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]{2,}[.][a-zA-Z]{2,4}$/;
				if (verif.exec(mail) == null)
				{
					if(type == 'default')
					document.getElementById('statusmail').innerHTML = 'The e-mail address is not valid';
					document.getElementById('statusmail').className = 'rouge';
					document.getElementById('send').disabled=true;
					return false;
				}
				else
				{
					if(type == 'default')
					document.getElementById('statusmail').innerHTML = 'The e-mail address is valid';
					document.getElementById('statusmail').className = 'vert';
					document.getElementById('conseil').style.display = 'none';
					document.getElementById('send').disabled=false;
					return true;
				}
			}
			
			function lang()
			{
				var langform = document.getElementById('langform').value;
				if (langform == 'en')
				{
					document.getElementById('sendlang').disabled=false;
				}
				else
				{
					document.getElementById('sendlang').disabled=true;
				}
			}
			</script>
		</head>
	<body><div class="encadre"><div class="interieur">
	<center><h1>Contact formulary</h1>
	<form method="post" action="contact.php?lang=en">
	<?php
	if(!$ok)
	{

	if($erreuren != '') {
		echo '<table><tr><td><img src="images/erreur.png" /></td>';
		echo '<td><p class="error" style="color:red;">'.$erreuren.'</p></td></tr></table>';
	}
	?>

	<p><table>
		<tr>
			<td><label for="nom">Surname *</label> : <br /></td>
			<td><input type="text" name="nom" id="nom" size="66" tabindex="10" value="<?php echo $_POST['nom']; ?>" /></td>
		</tr>
		<tr>
			<td><label for="prenom">First name</label> : <br /></td>
			<td><input type="text" name="prenom" id="prenom" size="66" tabindex="20" value="<?php echo $_POST['prenom']; ?>" /></td>
		</tr>
		<tr>
			<td><label for="e-mail">Your e-mail *</label> : <br /></td>
			<td><input type="text" onchange="javascript:valideMail('default');" onblur="javascript:valideMail('default');" onkeyup="javascript:valideMail('default');" name="e-mail" id="e-mail" size="66" tabindex="25" value="<?php echo $_POST['e-mail']; ?>" /><br />
			<span id="statusmail"></span></td><br />
		</tr>
		<tr>
			<td><label for="objet">Object of message *</label> : <br /></td>
			<td><input type="text" name="objet" id="objet" size="66" tabindex="30" value="<?php echo $_POST['objet']; ?>"/></td>
		</tr>
		<tr>
			<td><label for="message">Your message *</label> : <br /></td>
			<td><textarea name="message" id="message" rows="11" cols="50" tabindex="40"><?php echo $_POST['message']; ?></textarea><br />
			<input type="checkbox" name="copie" id="copie"/><label for="copie">Send to me a copy.</label></td>
		</tr>
		<tr>
			<td><label for="code">Copy the same code *</label> : <br /></td>
			<td><?php dsp_crypt(0,1); ?><input type="text" name="code" id="code"></td>
		</tr>
	</table></p>
	<p><input type="submit" value="Send" name="send" id="send" /></form><br />
	<script type="text/javascript">
	<!--
	document.write('<span id="conseil"> (<em>It is impossible to send the formulary if your e-mail address is not valid.');
	document.write('</em>)</span>');
	-->
	</script>
	<form action="contact.php?lang=en" method="post"><input type="submit" value="Reset" /></form>
	</p>
	<?php
	}
	else
	echo '<table><tr><td><img src="images/info.png" /></td><td><p style="color:green;">Your message has been sent.</p></td></tr></table>';
	?><p><a href="<?php echo $site; ?>">Back</a></center></p>
	</div></div>
	<center><p class="copy">This formulary is generated by  <a href="#cf" class="blanc" rel="facebox">ContactForm, a script of Mes-scripts-PHP.com</a>.<br />
	Language: English (<a href="#lang" rel="facebox" class="copy">change</a>)</p></center>
		
	<div  id="lang" style="display:none;">
	<center><h2>Change the language of the formulary</h2><br />
	<form method="get" action="contact.php" class="copy"><select name="lang" id="lang" id="langform"><option value="fr">Français</option><option value="en" selected="selected">English</option></select><input type="submit" value="Valid" id="sendlang" /></form>
	</center></div>
	
	<script type="text/javascript">
	<!--
	if(valideMail('noprint') != true)
	document.getElementById('send').disabled=true;
	else
	document.getElementById('conseil').style.display = 'none';
	-->
	</script>
	<div id="cf" style="display:none;">
	<p>ContactForm is a free script offered by Mes scripts PHP.com. This script is freely downloadable from our website. It is distributed under the 
	GNU-GPL lisense. Thank you again to all those who support us and to all those who download our scripts!</p>
	<p><a href="http://www.mes-scripts-php.com/" target="_blank">Visit Mes Scripts PHP.com (in French)</a></p>
	</div>
	</body>
	</html>
<?php
}
	
	