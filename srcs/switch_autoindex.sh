#!/bin/bash
STR=$(cat /etc/nginx/sites-available/nginx.conf)
SUB='autoindex on'
if [[ "$STR" == *"$SUB"* ]]
then
	sed -i 's/autoindex on/autoindex off/' /etc/nginx/sites-available/nginx.conf	
else
	sed -i 's/autoindex off/autoindex on/' /etc/nginx/sites-available/nginx.conf
fi
service nginx restart
