<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/mache/user/themes/mache/blueprints/modular/cta1.yaml',
    'modified' => 1529029562,
    'data' => [
        'title' => 'CTA 1',
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
                                'header.button_label' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.BUTTON_LABEL'
                                ],
                                'header.button_url' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.BUTTON_URL'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
