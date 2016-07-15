<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_/12_4_2/www/grav/user/plugins/dropcaps/blueprints.yaml',
    'modified' => 1460326190,
    'data' => [
        'name' => 'DropCaps',
        'version' => '1.3.4',
        'description' => 'This plugin places a decorative dropped initial capital letter to the start of the first paragraph of a text.',
        'icon' => 'paw',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-dropcaps',
        'keywords' => [
            0 => 'drop caps',
            1 => 'filter',
            2 => 'formatter',
            3 => 'letter',
            4 => 'pages',
            5 => 'posts',
            6 => 'typography',
            7 => 'plugin'
        ],
        'docs' => 'https://github.com/sommerregen/grav-plugin-dropcaps/blob/master/README.md',
        'bugs' => 'https://github.com/sommerregen/grav-plugin-dropcaps/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.DROPCAPS.GLOBAL_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.DROPCAPS.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'built_in_css' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.DROPCAPS.BUILTIN_CSS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'weight' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.DROPCAPS.WEIGHT',
                            'default' => -5,
                            'help' => 'PLUGINS.DROPCAPS.WEIGHT_HELP',
                            'validate' => [
                                'type' => 'int',
                                'min' => -100,
                                'max' => 100
                            ]
                        ]
                    ]
                ],
                'default' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.DROPCAPS.SPECIFIC_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'process' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.DROPCAPS.PROCESS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'titling.enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.DROPCAPS.TITLING',
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'titling.first_line' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.DROPCAPS.FIRST_LINE',
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'titling.breakpoints' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.DROPCAPS.BREAKPOINTS',
                            'help' => 'PLUGINS.DROPCAPS.BREAKPOINTS_HELP',
                            'default' => '.:;!?\'"-'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
