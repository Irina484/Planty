<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'marie' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RX`khl@{f:/i2M@$4Rqdf0ctiE-xF;&/cV{[]|9&7d4;Z-{$LgJolXz/8QpMG%NJ' );
define( 'SECURE_AUTH_KEY',  'Zp1FkjJOe4vXU/fY2z=]w.7H><c$iJ{QfyU|2`RQNb=*tCx)_)XYwPD7ey(@m3Y2' );
define( 'LOGGED_IN_KEY',    '{T-lSOh:&^m1D8nc]Lf!wVbR/h{0OCZJ<>I >ACXp*|][^f8ij~6wh*!vK]la,!z' );
define( 'NONCE_KEY',        '~GD,w$ .KQrT9c&S_mjd{>)sD V7RHP?)~AJJlj`=Ni.V&{Op[(&+$:|zp=*GPQd' );
define( 'AUTH_SALT',        'Wc7QDg]Kp7/vus$JSDxb79p3pS[w 0WLC|5tX<*!)%G|MI4Gi_z}cIs@g6:Zyv h' );
define( 'SECURE_AUTH_SALT', '_F!H_q5.k<oA&W=9SBL`*ZJ+GdL<=2d@R,3Qm)a-USIQ&A_-29S8NI;:v0DlUO`x' );
define( 'LOGGED_IN_SALT',   ']LEjrc-uRvqepK0cG@bA2g-U^]*Ac_7,Hi&Vwfo:*K-^&0jCcouT_Zn!2[S_uI55' );
define( 'NONCE_SALT',       'MzWriO&,k*7^Vf4?HWX$r( ,[+;qm_~&]~ae04Y.>BLV#Ga;i&pES!duK]c}O9@+' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
