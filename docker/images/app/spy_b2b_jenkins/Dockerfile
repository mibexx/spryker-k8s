FROM mibexx/k8s-spryker:b2b-core
MAINTAINER Mike Bertram <bertram@nexus-netsoft.com>

RUN apk del nginx \
 && rm -f /etc/supervisor/conf.d/nginx.conf \
 && apk add jenkins

COPY conf/supervisor/conf.d /etc/supervisor/conf.d

EXPOSE 8080
