<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database');

/** MySQL database username */
define('DB_USER', 'username');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'hostname');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '| I|Sqx3?`QUq{S&dG)Bmiqv^q=GG8_/+/e5S|Bah4IzWN-NmyXT 5?$jEaBnTXq');
define('SECURE_AUTH_KEY',  '$gR:IMPJ(5f+Qmy$OGKxt[fZBMBz?OV!DE1$(x!YA3!IKvGpbtU{=j.-N%EWc478');
define('LOGGED_IN_KEY',    'Li au-I$wP%FC/j=aY-44v-r*CYoe863]YFNle-s00ZtIU*S|#JqcLY%P#P/uZAn');
define('NONCE_KEY',        '|T6&LtN6Q]wx2+Z3./fDKm`RzGwulL_<N*>r0&av`$}y|pu9k]S{;kC7PfuAT8ft');
define('AUTH_SALT',        '`ShH&}Pk>Wz/$BA:nQ^vR]rv^VwsV]CuD%zZfR7_pocf-y7cEov!so|$!G5iRJ7F');
define('SECURE_AUTH_SALT', '#lm[`|nZP)lwKVs%Vt$~q=vKQmCJGh;su}p)KcQ(O|WuP{4j^f=GcwUf+vn9]L%*');
define('LOGGED_IN_SALT',   'sj_]MV@b:3Jiyk|d1W`|%:aJy1Uuye7,d:f*7:u^lO~1:reybb5vt9tzzm7~Ciwg');
define('NONCE_SALT',       '%(:&cU4!TiF.Lr69AYP$_,E|a`o~`TthP3tDRl}z{H8pIiFV Ilvl;f2I&Xv@ioC');


$table_prefix = 'wp_';

define('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', '/wp-content');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

