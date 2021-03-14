# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: bashleig <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/15 20:08:27 by bashleig          #+#    #+#              #
#    Updated: 2021/03/09 22:53:27 by bashleig         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.8

EXPOSE 80 443 22

RUN apk update && apk upgrade && \
	apk add nginx && \
	apk add openssh && \
	apk add supervisor

COPY ./default.conf /etc/nginx/conf.d/
COPY ./ssl /etc/nginx/ssl
COPY ./init_script.sh ./tmp
COPY ./visord_nginx.conf ./tmp
# RUN chmod +x tmp/init_script.sh

#RUN chown -R www-data /var/www/* && chmod -R 755 /var/www/*
RUN ssh-keygen -A && \
	adduser -D user && \
	echo "user:pass" | chpasswd
RUN mkdir -p /run/nginx

ENTRYPOINT ["sh", "tmp/init_script.sh"]
