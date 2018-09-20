<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/mache/user/themes/mache/blueprints/modular/map.yaml',
    'modified' => 1529029562,
    'data' => [
        'title' => 'Google Maps',
        '@extends' => [
            'type' => 'default'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'google_maps' => [
                            'type' => 'tab',
                            'title' => 'THEME_MACHE.GOOGLE_MAPS',
                            'fields' => [
                                'header.latitude' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.LATITUDE'
                                ],
                                'header.longitude' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.LONGITUDE'
                                ],
                                'header.google_maps_api_key' => [
                                    'type' => 'text',
                                    'label' => 'THEME_MACHE.GOOGLE_MAPS_API_KEY'
                                ],
                                'header.zoom' => [
                                    'type' => 'number',
                                    'label' => 'THEME_MACHE.ZOOM',
                                    'default' => 12,
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 19
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
