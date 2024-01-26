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
define( 'AUTH_KEY',         ',cY|}fn!4{bQ6S3Z6T1U&72v%mB2FT^/fekoix!ekb0J;xG#}A.n.6F{uf93v9]!' );
define( 'SECURE_AUTH_KEY',  'FZI2}1G2Fy1(Sf{J{}S_>7KkD)wSr{8(JZ6&}t/a;c8S`EMno)1-m2ivIZ7nO|_l' );
define( 'LOGGED_IN_KEY',    '+L7ACEHVG,mu*Ip sew!83(Y;E6_srY46MLx6@Vk;SoT<;0U@;BXdCTHEh+:ej3=' );
define( 'NONCE_KEY',        '=-#LYbx*@iMP;ZF@Q0PP)RvZUw|pwkIZeB.:Q3}*QlpM{k>9;T_8;FMy%|AY`Xez' );
define( 'AUTH_SALT',        'H@QtQ0(97;!Ty.<XJ8%/|>|{+H,.sZNnD.^5OtF=$/Bz-k16ZQ|,Vk0=m@oJ2PvT' );
define( 'SECURE_AUTH_SALT', 'oet6{ZN8D[}itss P/]4=)3Y|ciF}Nr|5SUq-?i6&|bcP#^xru./K1x jQM,amH:' );
define( 'LOGGED_IN_SALT',   'o=fs?L!iNfZYlTCgI{(jNtC_,C*+8bF(@O2_9<h;5T[TbI6`|~n3CI5#yyn55MyX' );
define( 'NONCE_SALT',       '0.[QNUd*lRD6AjYis4/{5iqW,1pBszSt7x;c93rVZ[9e}70 vMlHbjQS(,I/#R=H' );
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
