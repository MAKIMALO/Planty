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
define( 'DB_NAME', 'Planty4' );

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
define( 'AUTH_KEY',         '2Ji#Ax~KN4`V!gvl4U^^k[PO_Zgo1Zf5bvKxV{2p3sPS9+xKEcN&J_5pO+Dm/;^[' );
define( 'SECURE_AUTH_KEY',  '@?Z<ty |$VMvJwev$L*J:0wscS@4R#(DplD]KGu!SAfHLjqz/~2q{n?w}Q`BKb1G' );
define( 'LOGGED_IN_KEY',    '`Ej{k;9T)M(-1g_y|}RLt2*s&:.tf,FY9UzZIzqW4OA!J+aZ2sn`} Z89=[ |bGE' );
define( 'NONCE_KEY',        'MX%3ffT*y^Z&H/sNSF8nks8|d{#_>md<V%n8f36|mofYEzOJm}#Uqag|i9s.w-#W' );
define( 'AUTH_SALT',        'z$tW416UHzHN<N-qZ,1upWx_UZ]xSGVwcnP4!,sy4c_{O><_qUVe~Tfo<JtPKmiZ' );
define( 'SECURE_AUTH_SALT', 'j<WsGHp!(ykw8u!_*2t$vBiSlFj:Y}Y5wRQE^Ua4=369=Gj@U:G6z=lTyy.?Q2bL' );
define( 'LOGGED_IN_SALT',   '88U=K/Mop4MjO+%4`S* ;=OHx+yRpg#PXJYZZ0MNx~tGIsC@1W^pZ_7%LS5XU 2*' );
define( 'NONCE_SALT',       's3]1djq*faS5@ OTgPT+B&@gm4A;uk|KJ.@`a4dlz7jJ<4]ysI9E0X{Swhm-k]On' );
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
