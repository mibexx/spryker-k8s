<?php declare(strict_types=1);

/**
 * Here go your local configs which should not be version controlled (tokens, passwords, keys, ...)
 */

use Pyz\Shared\Scheduler\SchedulerConfig;
use Spryker\Shared\Propel\PropelConstants;
use Spryker\Shared\RabbitMq\RabbitMqEnv;
use Spryker\Shared\Search\SearchConstants;
use Spryker\Shared\Session\SessionConstants;
use Spryker\Shared\SessionRedis\SessionRedisConstants;
use Spryker\Shared\Setup\SetupConstants;
use Spryker\Shared\Storage\StorageConstants;
use Spryker\Shared\StorageRedis\StorageRedisConstants;
use Spryker\Shared\ZedRequest\ZedRequestConstants;
use Spryker\Shared\Scheduler\SchedulerConstants;
use Spryker\Shared\SchedulerJenkins\SchedulerJenkinsConfig;
use Spryker\Shared\SchedulerJenkins\SchedulerJenkinsConstants;

// ---------- Postgres
$config[PropelConstants::ZED_DB_USERNAME] = 'mibexx';
$config[PropelConstants::ZED_DB_PASSWORD] = 'mBx.123';
$config[PropelConstants::ZED_DB_HOST] = 'env-postgres';
$config[PropelConstants::ZED_DB_PORT] = 5432;

$config[PropelConstants::USE_SUDO_TO_MANAGE_DATABASE] = false;

// ---------- REDIS
$config[StorageRedisConstants::STORAGE_REDIS_HOST] = 'env-redis';
$config[StorageRedisConstants::STORAGE_REDIS_PORT] = 6379;
$config[StorageConstants::STORAGE_REDIS_HOST] = 'env-redis';
$config[StorageConstants::STORAGE_REDIS_PORT] = '6379';

$config[SessionConstants::YVES_SESSION_REDIS_HOST] = $config[StorageConstants::STORAGE_REDIS_HOST];
$config[SessionConstants::YVES_SESSION_REDIS_PORT] = $config[StorageConstants::STORAGE_REDIS_PORT];
$config[SessionRedisConstants::YVES_SESSION_REDIS_HOST] = $config[StorageRedisConstants::STORAGE_REDIS_HOST];
$config[SessionRedisConstants::YVES_SESSION_REDIS_PORT] = $config[StorageRedisConstants::STORAGE_REDIS_PORT];
$config[SessionConstants::ZED_SESSION_REDIS_HOST] = $config[SessionConstants::YVES_SESSION_REDIS_HOST];
$config[SessionConstants::ZED_SESSION_REDIS_PORT] = $config[SessionConstants::YVES_SESSION_REDIS_PORT];
$config[SessionRedisConstants::ZED_SESSION_REDIS_HOST] = $config[StorageRedisConstants::STORAGE_REDIS_HOST];
$config[SessionRedisConstants::ZED_SESSION_REDIS_PORT] = $config[StorageRedisConstants::STORAGE_REDIS_PORT];

// ---------- RabbitMQ
$config[RabbitMqEnv::RABBITMQ_API_HOST] = 'env-rabbitmq';
$config[RabbitMqEnv::RABBITMQ_API_PORT] = '15672';
$config[RabbitMqEnv::RABBITMQ_API_USERNAME] = 'mibexx';
$config[RabbitMqEnv::RABBITMQ_API_PASSWORD] = 'mBx.123';

$config[RabbitMqEnv::RABBITMQ_CONNECTIONS] = [
    'DE' => [
        RabbitMqEnv::RABBITMQ_CONNECTION_NAME => 'DE-connection',
        RabbitMqEnv::RABBITMQ_HOST => 'env-rabbitmq',
        RabbitMqEnv::RABBITMQ_PORT => '5672',
        RabbitMqEnv::RABBITMQ_PASSWORD => 'mBx.123',
        RabbitMqEnv::RABBITMQ_USERNAME => 'mibexx',
        RabbitMqEnv::RABBITMQ_VIRTUAL_HOST => '/DE_development_zed',
        RabbitMqEnv::RABBITMQ_STORE_NAMES => ['DE']
    ],
    'AT' => [
        RabbitMqEnv::RABBITMQ_CONNECTION_NAME => 'AT-connection',
        RabbitMqEnv::RABBITMQ_HOST => 'env-rabbitmq',
        RabbitMqEnv::RABBITMQ_PORT => '5672',
        RabbitMqEnv::RABBITMQ_PASSWORD => 'mBx.123',
        RabbitMqEnv::RABBITMQ_USERNAME => 'mibexx',
        RabbitMqEnv::RABBITMQ_VIRTUAL_HOST => '/AT_development_zed',
        RabbitMqEnv::RABBITMQ_STORE_NAMES => ['AT']
    ],
    'US' => [
        RabbitMqEnv::RABBITMQ_CONNECTION_NAME => 'US-connection',
        RabbitMqEnv::RABBITMQ_HOST => 'env-rabbitmq',
        RabbitMqEnv::RABBITMQ_PORT => '5672',
        RabbitMqEnv::RABBITMQ_PASSWORD => 'mBx.123',
        RabbitMqEnv::RABBITMQ_USERNAME => 'mibexx',
        RabbitMqEnv::RABBITMQ_VIRTUAL_HOST => '/US_development_zed',
        RabbitMqEnv::RABBITMQ_STORE_NAMES => ['US']
    ]
];


// ---------- Elasticsearch
$config[SearchConstants::ELASTICA_PARAMETER__HOST] = 'env-elasticsearch';
$config[SearchConstants::ELASTICA_PARAMETER__PORT] = '9200';


// ---------- Scheduler
$config[SchedulerConstants::ENABLED_SCHEDULERS] = [
    SchedulerConfig::SCHEDULER_JENKINS,
];
$config[SchedulerJenkinsConstants::JENKINS_CONFIGURATION] = [
    SchedulerConfig::SCHEDULER_JENKINS => [
        SchedulerJenkinsConfig::SCHEDULER_JENKINS_BASE_URL => 'http://env-jenkins:8080/',
    ],
];

// ---------- Zed
$config[ZedRequestConstants::HOST_ZED_API] = 'app-zed';
$config[ZedRequestConstants::BASE_URL_ZED_API] = 'http://app-zed';
$config[ZedRequestConstants::BASE_URL_SSL_ZED_API] = 'https://app-zed';
