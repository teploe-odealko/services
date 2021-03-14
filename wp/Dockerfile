# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: bashleig <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/15 20:08:27 by bashleig          #+#    #+#              #
#    Updated: 2021/03/13 15:03:25 by bashleig         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.8

EXPOSE 5050

RUN apk update && apk upgrade && \
	apk add nginx && \
	apk add wget && \
	apk add supervisor &&\
	apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session

COPY ./default.conf /etc/nginx/conf.d/
COPY ./init_script.sh ./tmp
COPY ./visord_wp.conf ./tmp

RUN wget https://wordpress.org/latest.tar.gz
RUN	tar -xzvf latest.tar.gz
RUN	rm -rf latest.tar.gz
RUN	mv wordpress /var/www/

COPY ./wp-config.php /var/www/wordpress

#RUN chown -R www-data /var/www/* && chmod -R 755 /var/www/*
RUN mkdir -p /run/nginx

ENTRYPOINT ["sh", "tmp/init_script.sh"]
