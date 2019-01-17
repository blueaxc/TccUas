FROM phpapachemysql_apache 

RUN apk --no-cache update \
    && apk --no-cache upgrade \
    && apk add --no-cache php7-mysqli
