FROM mibexx/k8s-spryker:b2b-core
MAINTAINER Mike Bertram <contact@mibexx.de>

ENV SPRYKER_DIR "/srv/spryker"
ENV APPLICATION_ENV "development"
ENV REPOSITORY "https://github.com/spryker-shop/b2b-demo-shop.git"

ADD entrypoint.sh /entrypoint.sh
ADD conf/spryker /srv/configs

RUN chmod +x /entrypoint.sh
