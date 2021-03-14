# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: bashleig <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/15 20:08:27 by bashleig          #+#    #+#              #
#    Updated: 2021/03/13 15:55:54 by bashleig         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.8

EXPOSE 80 443 22

RUN apk update && apk upgrade && \
	apk add mariadb mariadb-client openrc 

COPY ./init_script.sh ./tmp
COPY ./visord_mysql.conf ./tmp

#RUN /usr/bin/mysqld_safe --datadir="/var/lib/mysql" 
#RUN cat /tmp/create_db_user | mysql

ENTRYPOINT ["sh", "tmp/init_script.sh"]
#CMD ["sh"]
