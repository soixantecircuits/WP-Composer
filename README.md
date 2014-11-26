# Composer WP

## Installation

Require composer and wp-cli installed.

To download Wordpress:

-	Under the root folder, tape: 

	`composer install`

-	Under the wp folder, tape: 

	`wp core config --dbname=”$dbname” --dbuser="$dbuser" --dbpass="$dbpass" --dbhost="$dbhost" --dbprefix="$dbprefix"`
	
-	`wp db create "$dbname"`  	
-	`wp core install --url="$url" --title="$title" --admin_name="$admin" --admin_password="$pass" --admin_email="$email"`
-	Open the database with a database tools and change the field "siteurl" in the "wp-options" table by adding "/wp" at the end of the url
-	change wp-sample-config.php to wp-config.php with the information of the database