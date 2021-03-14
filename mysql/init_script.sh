#!/bin/sh
mysql_install_db --user=mysql --datadir="/var/lib/mysql"
openrc default
rc-service mariadb start
mysql -e "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
mysql -e "CREATE USER 'wpuser'@'%' IDENTIFIED BY 'pass';"
mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'wpuser'@'%';"
mysql -e "FLUSH PRIVILEGES;"
rc-service mariadb stop
mysqld_safe --datadir="/var/lib/mysql"
