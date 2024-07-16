FROM debian:latest


RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install -y php
RUN apt-get install -y php-mysql
RUN apt-get install -y mariadb-server
RUN apt-get install -y tar
RUN apt-get install -y php-fpm
RUN apt-get install -y wget

RUN wget https://wordpress.org/latest.tar.gz
RUN tar xzvf latest.tar.gz
RUN rm latest.tar.gz
RUN mv -f wordpress /var/www/
RUN chown -R www-data:www-data /var/www/wordpress

RUN     rm -rf /var/www/wordpress/wp-config-sample.php
COPY    wp-config.php /var/www/wordpress
COPY    www.conf /etc/php/7.3/fpm/pool.d/www.conf
RUN     mkdir -p /run/php/

ENV MARIA_DATABASE osarsar
ENV MARIA_USER osarsar
ENV MARIA_PASSWORD osarsar


# WORKDIR /usr/sbin/
# CMD     ["echo", "WORDPRESS: CONTAINER RUN SECCESSFULLY"]

ENTRYPOINT ["/usr/sbin/php-fpm7.3", "-F"]

EXPOSE 9000
