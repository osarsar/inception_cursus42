#!/bin/bash

mysql_install_db
mysqld_safe &
sleep 5

db_name="osarsar"
db_user="osarsar"
db_pwd="osarsar"

echo "CREATE DATABASE IF NOT EXISTS $db_name; \
      GRANT ALL ON $db_name.* TO '$db_user'@'%' IDENTIFIED BY '$db_pwd'; \
      ALTER USER 'root'@'localhost' IDENTIFIED BY '$db_pwd'; \
      FLUSH PRIVILEGES;" | mysql -u root -p$db_pwd

mysqladmin shutdown -p${db_pwd} 
mysqld_safe