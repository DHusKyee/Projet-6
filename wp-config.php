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
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '! _-LUus<eC!]@rb*m$xVIr B/@l+aX=ZS6iJhCA`Y&KsFw9x$x;*!_TXT3I=Jvn' );
define( 'SECURE_AUTH_KEY',  'nF#Vd<_IR|!Hj|bL.6Jcg~74kS[l9{R-mH!-nN=8/QDL<{Nrw:rZ:IE8|Ll)%o?.' );
define( 'LOGGED_IN_KEY',    '[&W2g=UR7m$Ky4?WJ~vcn ^mX^FOogE{:8wZLTrHuV2YPX![J]/&4k.H^b%* ezM' );
define( 'NONCE_KEY',        'TcA}^0[wCMhK^A6e=-r.]&1gqa1MIC3Rcw5?1l/zEPmnk>C:f(K~8W 05M4UH=_n' );
define( 'AUTH_SALT',        'S0l*1dt16RY{?EQ$#wj) 0Zb{DKjem:^%&8WP:pka4Ee>Cf1i^JPpY)_qZ#1JleI' );
define( 'SECURE_AUTH_SALT', 'mI_NmP7c}o*#,xW]?6A:Ri4mn,rnZ3E&cKg<f-Mb)]m.9Dj9ca3=RQm{CPJpI5QK' );
define( 'LOGGED_IN_SALT',   'Y%|!<2wm!tbdb$Kd8a@ga[/xW|WAr),6V96 ^e6999uZ8I<t;jBSyv^vJ+3 Ojd%' );
define( 'NONCE_SALT',       'pdlU^.?f>.G#2dL>(c^  h9#y{g3b5B~21a)gbebd=g8R~95XQ{PL$$0<t#9CNqc' );
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
