<?php





/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'teosyalpen_pro');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'teosyalpen_pro');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '0Uasy14@');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>~A3#G1DjxGsI}HrTq1/([${%^=L;KDI~:_`**[)!u<.@V]kEy-OAL+P+Ht@LPhM');
define('SECURE_AUTH_KEY',  '[X,]/$tEVPwE^1udO</?$z}Uy-~!_AdJjxTG3 t_iQU8F>9|)u5D,SEY$<vd4~7M');
define('LOGGED_IN_KEY',    ')eY@MuN^8X/8=.u):AGV{USPFA)-0=QH,EhzT()vM t%Agdm~|/8;AF^b|/?yt>u');
define('NONCE_KEY',        '**$RIPl*+)sw]=tE|l~;W!X194PeEKsf4Ot<UF7wXB6fO?$n]LQ_sWe,/,@3F<SO');
define('AUTH_SALT',        ')~NTx5BG{O4s D+c6P&0#K<I?]mq~!)8vsHamZN+I$I!48?K#X@Ls=6?ZrPy4L,h');
define('SECURE_AUTH_SALT', 'ThEJ|)rS:ZMTG+tb2eMD|4e&Gla[cm^(+<<_<J5:hS.6~d$K[]v36qK_acjrvsXe');
define('LOGGED_IN_SALT',   'F-jAb%<&HEydpdgIO@&|(I^]h3@6+|W[BP{(t.t(cK|oyhc6webC2F0|^.40.L0R');
define('NONCE_SALT',       'l<^op7<`33i(z^DmqlR{>vC/Fn/G<4C~;?xWH-x9FSd4PxqK4R3d8XK2g5[AL*W+');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
//define('WPLANG', 'fr_FR');
define('WPLANG', '');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
