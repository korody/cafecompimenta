<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/cafecompimenta/user/config/system.yaml',
    'modified' => 1478729795,
    'data' => [
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'boxify-child',
            'markdown_extra' => true,
            'process' => [
                'markdown' => true,
                'twig' => false
            ]
        ],
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];
