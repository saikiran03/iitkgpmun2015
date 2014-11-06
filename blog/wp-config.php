<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
define('WP_HOME','http://iitkgpmun.springfest.in/blog');
define('WP_SITEURL','http://iitkgpmun.springfest.in/blog');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mun_munblog');

/** MySQL database username */
define('DB_USER', 'mun_munblog');

/** MySQL database password */
define('DB_PASSWORD', 'munblog');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D 0r95@|-pPKco/a?m1uu*LN3*&5}[;f)i6]aW]3{WaRA&_FO:[gVHHHYs5TRPB-');
define('SECURE_AUTH_KEY',  '9$Sd<`B!1Z~,4BBId|Z?a{L7Q>R HAZI1w_uW1d:&K2[#Nh^-K#7q]ZyNJ]Foa9|');
define('LOGGED_IN_KEY',    'F+vCm@ypKX-;sC!]Q*+Jw2:4FS,<.ss0g6I$RQXe+2=PA`Ok|55#e9Fb+ .QnpTY');
define('NONCE_KEY',        'E+@@>I|jP[_).-{eyX@D!D]AnbI_0PPM&;h1T<|m<U Q+8t#Gz@b#/;B2f.,HmD8');
define('AUTH_SALT',        'YOl+sU]0OC#@le):g]{7&QCiVs3|57ax,v+4nS[U+l]y+C:+?TLMK~uuhrc>jk~9');
define('SECURE_AUTH_SALT', 'kQ&2pO[RHPO!N,|FwiWm=PYk9StyP!>nc-#3t~0T8dTVYI<7%+[aDp9r-q)?eS|[');
define('LOGGED_IN_SALT',   'G:55.==O|Y9l(G(Ln0rNxi68+r1Jw`nara]6+0|Zv)[G[c9kq87P/-|lhO.4ih^t');
define('NONCE_SALT',       ':h~D!x>Bi@0Qd`u|z40 H,~D.T3^3X*T:KMs89BJa_aBur1*~G}+-)IE{m998Wo8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');