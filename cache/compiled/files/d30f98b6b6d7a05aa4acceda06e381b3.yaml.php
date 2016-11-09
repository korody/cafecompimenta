<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/cafecompimenta/user/config/plugins/email.yaml',
    'modified' => 1478624266,
    'data' => [
        'enabled' => true,
        'from' => 'ko@aerogami.com.br',
        'from_name' => 'Café com Pimenta website',
        'to' => 'kalina@kaju.ink',
        'to_name' => 'Ricardo',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'ko@aerogami.com.br',
                'password' => 'ActAhead#7'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
