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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'futureTeam');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '#xNp(C|P.=yM4!}D`xSK]*8m-/yjtN%1xV.9_mx65:)<sw,d+I.Oo>g$va4P@Y:&');
define('SECURE_AUTH_KEY',  'yXjXRyB+{.$3%7,:pf[pR<=es9z4/CEE0y{]zNOpNiIK2%_FFt^kwcsaj|b:4xi_');
define('LOGGED_IN_KEY',    ']PS9Jet yi|r$-v>:n7>y`:dAk=Pbpg~vZ0Z25`qs!:Ze#OrA{.LcG,:XVn`jq/D');
define('NONCE_KEY',        '5&fi=p$t5:Fx pD2SCH]d/.DW]sZwFyqER3vry*B5UyMpB4?#}0W~M)OO5$6VykR');
define('AUTH_SALT',        'p,37}.:LYx%**;=9Gtupb+$Su>7rsIK#`Sr)9O3Ss(wk}Ti)7eWfgYE(c<H%gmup');
define('SECURE_AUTH_SALT', 'FT* 544x (zq9]/hG0=m]O.e=)gI_mwZG.3d6%$B4y,llcs.g.$uBwudJ4b<43{X');
define('LOGGED_IN_SALT',   'O|nryCLVz!R9hw>e:IVBD7]eTuKc_GSsZ5KCJ/TmYRU7u.g[[{R4|j6xgW;l.J>7');
define('NONCE_SALT',       'm{ioY^n%a~D%N4OycfNyqE]*!mD8icgT;HDf[ p!%K!0`UrfKJZON=k7u/mu:NU ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ft_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
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