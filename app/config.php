<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 02/11/17
 * Time: 17:42
 */

return [
    'common' => [
        'debug' => true,
        'monolog.logfile' => __DIR__ . '/../app/logs/development.log',
        'asset.path' => __DIR__ . '/../public/assets',
        'dokumen.path' => __DIR__ . '/../public/documents',
        'foto.path' => __DIR__ . '/../public/photo'
    ],
    'db' => [
        'db.options' => [
            'driver' => 'pdo_mysql',
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => 'faster',
            'dbname' => 'yap'
        ],
    ],
    'twig' => [
        'twig.path' => __DIR__ . '/../src/Templates',
        'twig.options' => [
            'cache' => __DIR__ . '/cache/app_template',
            'auto_reload' => true
        ]
    ],
    'profiler' => [
        'profiler.cache_dir' => __DIR__ . '/cache/profiler'
    ],
    'orm' => [
        'orm.em.options' => [
            'mappings' => [
                [
                    'type' => 'annotation',
                    'namespace' => 'Jimmy\Yap\Domain\Entity',
                    'path' => __DIR__ . '/../src/Domain/Entity',
                ]
            ],
        ],
        'orm.proxies_dir' => __DIR__ . '/proxies',
    ],
];