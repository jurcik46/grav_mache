<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/mache/user/config/plugins/email.yaml',
    'modified' => 1532538866,
    'data' => [
        'enabled' => true,
        'from' => 'nmsiklub@davidpida.eu',
        'from_name' => 'jurcik46@gmail.com',
        'to' => 'jurcik46@gmail.com',
        'to_name' => 'Ján Jurč',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.davidpida.eu',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'nmsiklub@davidpida.eu',
                'password' => 'Jurco4646'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html'
    ]
];
