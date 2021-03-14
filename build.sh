#!/bin/bash
cd nginx
docker build -t nginx_image .
cd ..
cd wp
docker build -t wordpress_image .
cd ..
cd mysql
docker build -t mysql_image .
cd ..
cd phpmyadmin
docker build -t php-image .
cd ..
