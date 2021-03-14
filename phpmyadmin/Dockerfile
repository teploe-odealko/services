# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: bashleig <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/15 20:08:27 by bashleig          #+#    #+#              #
#    Updated: 2021/03/14 16:02:19 by bashleig         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.8

EXPOSE 5000

RUN apk update && apk upgrade && \
	apk add nginx && \
	apk add openrc && \
	apk add supervisor && \ 
	apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session

COPY ./default.conf /etc/nginx/conf.d/
COPY ./init_script.sh ./tmp
COPY ./visord_php.conf ./tmp

#RUN chown -R www-data /var/www/* && chmod -R 755 /var/www/*
RUN mkdir -p /run/nginx

RUN mkdir /var/www/phpmyadmin && \
	wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz && \
	tar -xvf phpMyAdmin-5.0.4-english.tar.gz --strip-components 1 -C /var/www/phpmyadmin && \
	rm phpMyAdmin-5.0.4-english.tar.gz

COPY ./config.inc.php /var/www/phpmyadmin

CMD ["sh", "tmp/init_script.sh"]
