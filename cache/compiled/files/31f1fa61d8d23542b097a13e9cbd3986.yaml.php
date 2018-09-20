<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/mache/user/themes/mache/blueprints/modular/slider.yaml',
    'modified' => 1535834966,
    'data' => [
        'title' => 'Slider',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'slider' => [
                            'type' => 'tab',
                            'title' => 'THEME_MACHE.SLIDER',
                            'fields' => [
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
                                'header.slider' => [
                                    'type' => 'list',
                                    'label' => 'THEME_MACHE.SLIDER',
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.person_photo' => [
                                            'type' => 'filepicker',
                                            'folder' => '@self',
                                            'preview_images' => true,
                                            'label' => 'THEME_MACHE.PHOTO',
                                            'accept' => [
                                                0 => '.png',
                                                1 => '.jpg'
                                            ]
                                        ],
                                        '.person_name' => [
                                            'type' => 'text',
                                            'label' => 'THEME_MACHE.SLIDE_NAME'
                                        ],
                                        '.person_description' => [
                                            'type' => 'textarea',
                                            'rows' => 3,
                                            'label' => 'THEME_MACHE.SLIDE_DESCRIPTION'
                                        ],
                                        '.person_facebook' => [
                                            'type' => 'text',
                                            'label' => 'THEME_MACHE.SLIDER_PERSON_FACEOOBK'
                                        ],
                                        '.person_youtube' => [
                                            'type' => 'text',
                                            'label' => 'THEME_MACHE.SLIDER_PERSON_YOUTUBE'
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
