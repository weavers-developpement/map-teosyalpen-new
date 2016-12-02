<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
define ('WPLANG', 'en_GB');
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'teosyalpen_map');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'teosyalpen_map');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'a2Tb88&h');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */

define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OCK&&@d62t@/d^;~1g|7xD,)]O1NXeaj82hFEJxS>2yHKhX^3|%mK*RsKUZZLvjH');
define('SECURE_AUTH_KEY',  'a^f7QanV*!qP|)ja$>ReC7?z[y*5Rc-&r3_:>K5v`drAq);7`e.judFrZb:D->ED');
define('LOGGED_IN_KEY',    '5:U2pI?+7Zn*Bp5ACcPY~Y0|(6xl9kMH=nN|;3(kxRjsYBSWN`t=V/bIU=9r4`oF');
define('NONCE_KEY',        'w ,Az_CaQt2G${Kdy.=0b(/~]3N!V+XGFgHe2S_&5GGLoBh}lyI^UR%BHB~Xa8U1');
define('AUTH_SALT',        '=5nn(*{#>p,gS(#%HXQP~]PL+l`@q@xiB>{!8~Zm_0TL*yMUAo=WmdQbSS<}AIz8');
define('SECURE_AUTH_SALT', 'mkkzekH8)E1,]wtXP7~DqaJ`91rTyb|^4r;zc<HdLK)iEVBc/+aUx@<-i-*{|`4I');
define('LOGGED_IN_SALT',   'Ws[ksSZY9%])caC5imLHj(4]{WUJpk-IQYvr.O$}Di {Rlns8X)}`p;8oBH1IKVO');
define('NONCE_SALT',       '}Z`h^EB8[6-(7AA:uvWT`<_z)XblI sPu,s.OhyV!|vg<2rbu@<c 21,>fk[h,rH');
/**#@-*/

/* Custom WordPress URL. */

define( 'WP_CONTENT_DIR', ABSPATH . 'files' );
define( 'WP_CONTENT_URL', 'http://map.teosyalpen.com/files' );

define( 'UPLOADS', 'medias' );

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wpmap_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');