FROM debian:buster

RUN apt-get update; apt-get install -y redis

# RUN rm -rf /etc/redis/redis.conf
# COPY ./conf/redis.conf /etc/redis/

CMD ["redis-server", "--protected-mode no"]