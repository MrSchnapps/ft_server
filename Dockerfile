FROM debian:buster

RUN apt-get update \
&& apt-get upgrade -y \
&& apt-get install -y wget \
&& apt-get install -y curl \
&& apt-get install -y nginx \
&& apt-get install -y mariadb-server \
&& apt-get install -y php \
&& apt-get install -y php-fpm php-mysql \
&& apt-get install -y php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip \
&& apt-get install -y openssl

RUN mkdir -p /var/www/myserv
COPY srcs/nginx.conf /etc/nginx/sites-available/nginx.conf
RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/
RUN unlink /etc/nginx/sites-enabled/default

RUN mv /var/www/html /var/www/myserv/

RUN mkdir /ssl
RUN wget https://github.com/FiloSottile/mkcert/releases/download/v1.1.2/mkcert-v1.1.2-linux-amd64
RUN mv mkcert-v1.1.2-linux-amd64 /ssl/mkcert
RUN chmod +x /ssl/mkcert
RUN ./ssl/mkcert -install
RUN ./ssl/mkcert localhost
RUN mv localhost-key.pem /ssl/
RUN mv localhost.pem /ssl/

RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-english.tar.gz
RUN tar xvf phpMyAdmin-4.9.0.1-english.tar.gz
RUN mkdir /var/www/myserv/phpmyadmin
RUN cp -R phpMyAdmin-4.9.0.1-english/* /var/www/myserv/phpmyadmin/

COPY srcs/sqlconfig.sql /var/www/

RUN service mysql start \
&& mysql < /var/www/sqlconfig.sql 

COPY  srcs/wordpress /var/www/myserv/wordpress
COPY srcs/wp-config.php /var/www/myserv//wordpress

COPY srcs/init.sh ./

CMD bash /init.sh && tail -f /dev/null