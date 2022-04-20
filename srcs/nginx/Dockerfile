
FROM debian:buster

EXPOSE 443

RUN mkdir -p myWork

COPY ./srcs/setup.sh ./myWork/
COPY ./srcs/start.sh ./myWork/
COPY ./srcs/hosts /etc/                                                                                                                                                                  

WORKDIR ./myWork/
RUN sh setup.sh

WORKDIR /

COPY ./srcs/default /etc/nginx/sites-available/
COPY ./srcs/nginx-selfsigned.key /etc/ssl/private/
COPY ./srcs/nginx-selfsigned.crt /etc/ssl/certs/

WORKDIR ./myWork/

CMD sh start.sh