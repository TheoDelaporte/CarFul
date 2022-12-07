<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'carefull' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '7bEIcG3.kRcUi<A7}Fhgz$xHpK>h B$%&CP$YrjY>*c._8.[+*wWk63Q}Rrq&8eU' );
define( 'SECURE_AUTH_KEY',  'CAr`xG2.K$E%;vdo7_5ASAV~F+oxmhX|I2^7B:U!b5Y{[{8<u+(AON*)^arnY79Y' );
define( 'LOGGED_IN_KEY',    'm*);lxxMLcF9{RBK;nA$b9CU-<xD[^|VXuN5jATW_*c,OypA:TK$L<k!(oG5)=2z' );
define( 'NONCE_KEY',        'ifo_~@C#Vu{@T0$>w]W/bj/k?4g4-].xc8iC;5QB#G57k_ ^inuZeXy?{+n5XcaM' );
define( 'AUTH_SALT',        'h/@+GMK[Q-?DzDLjl7P<$HeQ}a^q6Md$MbLTEn#Nh;q!RMQ85->-RTyjTJ]+}H+o' );
define( 'SECURE_AUTH_SALT', '~RiZR>M<x*OWXe]3=/QR%X]F@v&RSB2|6fps!seA`O)dlwhF(.0;l7B!yt/PJ5ZO' );
define( 'LOGGED_IN_SALT',   'LAv9~3 rmSfW[]H=C?bDFe3B]s-Pzc8<Sh=-wF2~y,rP`[]Ob&0V+nVccrbsruN{' );
define( 'NONCE_SALT',       'zp~yTG4C(w*;SS7^UFB 0F9-vQ3<%8tJL|m1>QxeFZW7p`%i>}pG]s&7&/K#-$ G' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
