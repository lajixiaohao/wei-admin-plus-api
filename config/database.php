<?php
/**
 * 数据库连接管理
 * author:lajixiaohao
 * github:https://github.com/lajixiaohao/wei-admin-plus-api
 * date:2022.6.20
 */
return [
    // redis
    'redis' => [
        'client' => env('REDIS_CLIENT', 'predis'),
        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
            'read_write_timeout' => 60
        ]
    ]
];
