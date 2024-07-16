From    debian:buster

RUN apt-get update -y && apt-get upgrade -y

RUN apt-get install -y mariadb-server mariadb-client

RUN mkdir -p var/run/mysqld && chown -R mysql var/run/mysqld && chmod -R 777 var/run/mysqld 

# RUN sed -i 's/bind-address\s*=\s*127.0.0.1/bind-address = 0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

COPY script.sh /
RUN chmod +x script.sh

EXPOSE 3306

CMD ["/script.sh"]