<?php

/**
 * Rabbit Developer Toolbar (http://mateuszsitek.com/projects/rabbit-developer-toolbar)
 *
 * @copyright Copyright (c) 2017 DIGITAL WOLVES LTD (http://digitalwolves.ltd) All rights reserved.
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

return [
    'service_manager' => [
        'invokables' => [
            'rabbit.toolbar' => Aist\Developer\Toolbar\Rabbit\Collector\RabbitCollector::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'template_map' => [
            'zend-developer-tools/toolbar/rabbit-data' => __DIR__ . '/../view/zend-developer-tools/toolbar/rabbit-data.phtml',
        ],
    ],
    'zenddevelopertools' => [
        'profiler' => [
            'collectors' => [
                'rabbit.toolbar' => 'rabbit.toolbar',
            ],
        ],
        'toolbar' => [
            'entries' => [
                'rabbit.toolbar' => 'zend-developer-tools/toolbar/rabbit-data',
            ],
        ],
    ],
];
