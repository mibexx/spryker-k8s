FROM mibexx/k8s-app:7.3
MAINTAINER Mike Bertram <contact@mibexx.de>

ENV SPRYKER_DIR "/srv/spryker"
ENV APPLICATION_ENV "development"

ADD conf/nginx/default.conf /etc/nginx/conf.d/default.conf

RUN mkdir -p $SPRYKER_DIR

WORKDIR $SPRYKER_DIR
