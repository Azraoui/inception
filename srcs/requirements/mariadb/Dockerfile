FROM debian:buster

EXPOSE 3306

COPY ./tools/setup.sh .
COPY ./tools/start.sh .
COPY ./conf/wp_db.sql .

RUN sh ./setup.sh

CMD sh ./start.sh