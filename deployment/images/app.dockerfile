FROM webdevops/php:8.2-alpine
MAINTAINER mail@nikitakiselev.ru

RUN apk add --update supervisor \
    && rm  -rf /tmp/* /var/cache/apk/* \
    && mkdir -p /etc/supervisor.d/

COPY deployment/configs/supervisord.ini /etc/supervisord.conf
COPY deployment/configs/laravel-queue-default.ini /etc/supervisor.d/laravel-queue-default.ini

CMD ["/usr/bin/supervisord", "--nodaemon"]
