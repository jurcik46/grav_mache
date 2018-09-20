<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/mache/user/themes/mache/blueprints/modular/sponsors.yaml',
    'modified' => 1535844719,
    'data' => [
        'title' => 'Sponsors',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'sponsors' => [
                            'type' => 'tab',
                            'title' => 'THEME_MACHE.SPONSORS_TITLE',
                            'fields' => [
                                'contact' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.CONTACT_EMAIL'
                                ],
                                'header.sponsors' => [
                                    'type' => 'list',
                                    'label' => 'THEME_MACHE.SPONSORS_TITLE',
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.icon' => [
                                            'type' => 'filepicker',
                                            'folder' => '@self',
                                            'preview_images' => true,
                                            'label' => 'THEME_MACHE.SPONSORS_BANNER',
                                            'accept' => [
                                                0 => '.png',
                                                1 => '.jpg'
                                            ]
                                        ],
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'THEME_MACHE.SPONSORS_NAME'
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
