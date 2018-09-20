<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/mache/user/themes/mache/blueprints/modular/services.yaml',
    'modified' => 1529029562,
    'data' => [
        'title' => 'Services',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'services' => [
                            'type' => 'tab',
                            'title' => 'THEME_MACHE.SERVICES',
                            'fields' => [
                                'header.services' => [
                                    'type' => 'list',
                                    'label' => 'THEME_MACHE.SERVICES',
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.icon' => [
                                            'type' => 'filepicker',
                                            'folder' => '@self',
                                            'preview_images' => true,
                                            'label' => 'THEME_MACHE.ICON',
                                            'accept' => [
                                                0 => '.png',
                                                1 => '.jpg'
                                            ]
                                        ],
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'THEME_MACHE.TITLE'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
