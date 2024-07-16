FROM debian:latest

RUN     apt update && apt upgrade
RUN     apt install -y openssl
RUN     apt install -y nginx


RUN     openssl genrsa -out server.key 4096
RUN     openssl req -new -key server.key -subj "/C=KR/ST=Seoul/O=42Seoul/OU=GAM" -out server.csr
RUN     openssl req -x509 -in server.csr -key server.key -out server.crt
RUN     mv server.crt /etc/ssl/certs/
RUN     mv server.csr server.key /etc/ssl/private
COPY    default.conf /etc/nginx/conf.d/default.conf

CMD     ["nginx", "-g", "daemon off;"]

EXPOSE 443