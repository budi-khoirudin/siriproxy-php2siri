
PHP 2 Siri communication plugin
--------------------------------------

This plugin allows users to configure the plugin to their own taste and character.

'A plugin that allows siri to communitcate with a php file to run certain commands.'


Php file included
-------------------

How to install:

install prerequisites:
		"sudo apt-get apache2 apache2-mpm-prefork apache2-utils apache2.2-common libapache2-mod-php5 libapr1 libaprutil1 libdbd-mysql-perl libdbi-perl libmysqlclient15off libnet-daemon-perl libplrpc-perl libpq5 mysql-client-5.0 mysql-common mysql-server mysql-server-5.0 php5-common php5-mysql"

restart apache
		"sudo /etc/init.d/apache2 restart"

Test

Add in PHP:

install php:
		"libapache2-mod-php5"

enable PHP:
		"sudo a2enmod php5"

relaunch apache
		"sudo /etc/init.d/apache2 restart"

Congrats, everything should work now..

Note: make sure to keep the siri.php named exactly like that otherwise it may cause errors.