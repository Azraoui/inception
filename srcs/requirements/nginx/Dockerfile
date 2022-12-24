
FROM debian:buster

EXPOSE 443

COPY ./tools/setup.sh .
COPY ./tools/start.sh .                                                                                                                                                            

RUN apt-get update ; apt-get install -y openssl ; sh setup.sh
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out \
	/etc/ssl/certs/nginx-selfsigned.crt -subj "/C=MA/ST=Benguerir/L=Benguerir/O=mine/CN=abdellah"

COPY ./conf/default /etc/nginx/sites-available/
# COPY ./conf/nginx-selfsigned.key /etc/ssl/private/
# COPY ./conf/nginx-selfsigned.crt /etc/ssl/certs/

CMD sh start.sh