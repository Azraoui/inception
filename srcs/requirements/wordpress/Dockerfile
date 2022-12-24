FROM debian:buster

EXPOSE 9000

COPY  ./srcs/setup.sh .
COPY  ./srcs/start.sh .
COPY ./srcs/wp-config.php .
RUN apt-get update
RUN sh setup.sh; apt-get install -y wget

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar -O /usr/local/bin/wp
RUN chmod +x /usr/local/bin/wp
RUN service php7.3-fpm start
CMD sh start.sh