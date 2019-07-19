#!/bin/sh

curl -u mibexx:mBx.123 -X PUT http://env-rabbitmq:15672/api/vhosts/%2FDE_development_zed
curl -u mibexx:mBx.123 -X PUT http://env-rabbitmq:15672/api/vhosts/%2FAT_development_zed
curl -u mibexx:mBx.123 -X PUT http://env-rabbitmq:15672/api/vhosts/%2FUS_development_zed

git clone $REPOSITORY $SPRYKER_DIR
cp -rfp /srv/configs/* $SPRYKER_DIR/config/Shared/

composer install --prefer-dist
/usr/bin/php -d memory_limit=-1 vendor/bin/install

chown -Rf nginx:nginx $SPRYKER_DIR/data

exec "$@"
