<?php

namespace UserFlowApi\connection;

use Predis\Client;

class RedisService
{
    private static ?Client $redis = null;

    public static function getRedis(): Client
    {
        if (!self::$redis) {
            $config = require __DIR__ . '/../config/redis.php';

            self::$redis = new Client($config);
        }

        return self::$redis;
    }
}