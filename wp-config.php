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
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'BAfu5o&PR/|7(992RPvIP*#E;NQy3%LXJstc5]p<c57 [q@?dO0},5`dS:>z0A3z' );
define( 'SECURE_AUTH_KEY',  '^D;(S,NSi7z:K`1kvI$.FNkGPUAG{b8s*7bzWXh`QkM~k=)jm{=fh/N2po:!kU}N' );
define( 'LOGGED_IN_KEY',    ' k}@-(cF^BE`2n=<q,@NMs=;MNOtBdP Ig_.S5<dbfTTc@tsr 2GV|bNnE<q>AfQ' );
define( 'NONCE_KEY',        'b8,k|JYW^hLd?P{YX.(R(5#hYa(1oC,|;B8 sPgjk9B{G]Rlyxonyf JnVCZB3$s' );
define( 'AUTH_SALT',        'D.#.CrMJZJL3[n ;VX?0:lU]Uzr7(vLejOmr{f*#Gzw}T*4hmKnWscy7)EP-.u28' );
define( 'SECURE_AUTH_SALT', '#Qur>6q0OQ%W1ESs^nT;d>,Kc&$|z$%[x{M4VP`3x 0-;GFG[4O=3x3-~T.A6%[{' );
define( 'LOGGED_IN_SALT',   'i?3TVYyD<s^j^v@wQk(eHtzJwz6:4Abz$8A5n@uWnD}bv0-1q~TVYvN0$6GKj{!0' );
define( 'NONCE_SALT',       '`p<dR|/gs5}[UTU]<Hy*MV3Rx7@DOHa9DKT2WLP}5WrQur@tY}-/l;[w@-6-)B6r' );
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
