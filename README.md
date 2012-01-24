
PHP 2 Siri communication plugin
--------------------------------------

This plugin allows users to configure the plugin to their own taste and character.

'A plugin that allows siri to communitcate with a php file to run certain commands.'


# How to install:


1. Install prerequisites:
		`sudo apt-get apache2 apache2-mpm-prefork apache2-utils apache2.2-common libapache2-mod-php5 libapr1 libaprutil1 libdbd-mysql-perl libdbi-perl libmysqlclient15off libnet-daemon-perl libplrpc-perl libpq5 mysql-client-5.0 mysql-common mysql-server mysql-server-5.0 php5-common php5-mysql`

2. restart apache
		`sudo /etc/init.d/apache2 restart`

3. Test by going to http://localhost/

# Add in PHP:

1. install php:
		`libapache2-mod-php5`

2. enable PHP:
		`sudo a2enmod php5`

3. relaunch apache:
		`sudo /etc/init.d/apache2 restart`

Congrats, everything should work now..

Note: make sure to keep the siri.php named exactly like that otherwise it may cause errors.