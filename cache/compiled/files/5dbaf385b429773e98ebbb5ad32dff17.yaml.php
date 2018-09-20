<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/mache/user/themes/mache/blueprints/modular/banner.yaml',
    'modified' => 1535931504,
    'data' => [
        'title' => 'Banner',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.heading' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.HEADING'
                                ],
                                'header.background_image' => [
                                    'type' => 'filepicker',
                                    'folder' => '@self',
                                    'preview_images' => true,
                                    'label' => 'THEME_MACHE.BACKGROUND_IMAGE',
                                    'accept' => [
                                        0 => '.png',
                                        1 => '.jpg'
                                    ]
                                ],
                                'header.button_label' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.BUTTON_LABEL'
                                ],
                                'header.button_url' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.BUTTON_URL'
                                ],
                                'header.header_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'THEME_MACHE.HEADER_COLOR'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
