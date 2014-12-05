# WP Composer 

## Installation

Require composer and wp-cli installed.

To download Wordpress:

1.`composer install`
2.`rename wp-sample-config.php to wp-config.php`
2.`wp core config --dbname=$dbname --dbuser=$dbuser --dbpass=$dbpass --dbhost=$dbhost --extra-php <<PHP
define('WP_ENV', 'development');
define('WP_DEFAULT_THEME', 'roots' );
PHP`
3.`wp db create $dbname`
4.`wp core install --url=$url --title=$title --admin_name=$admin --admin_password=$pass --admin_email=$email`

