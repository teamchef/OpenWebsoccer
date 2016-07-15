<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_/12_4_2/www/grav/user/plugins/tidyhtml/blueprints.yaml',
    'modified' => 1468608718,
    'data' => [
        'name' => 'Tidyhtml',
        'version' => '1.0.3',
        'description' => 'TidyPHP integration for Grav.',
        'icon' => 'code',
        'author' => [
            'name' => 'Clemens Queissner',
            'email' => 'clemens.queissner@cq-design.de',
            'url' => 'https://cq-design.de'
        ],
        'homepage' => 'https://github.com/sourcesoldier/grav-plugin-tidyhtml',
        'demo' => 'https://cq-design.de',
        'keywords' => 'html tidy beautiful',
        'bugs' => 'https://github.com/sourcesoldier/grav-plugin-tidyhtml/issues',
        'license' => 'GPL v3',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'basic_section' => [
                    'type' => 'section',
                    'title' => 'Basic configurtion',
                    'underline' => false
                ],
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'indent' => [
                    'type' => 'toggle',
                    'label' => 'Ident rendered HTML code',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'wrap' => [
                    'type' => 'text',
                    'label' => 'Line-wrap (0 = no wrapping, 68 = standard)',
                    'default' => 0,
                    'size' => 'x-small',
                    'validate' => [
                        'type' => 'int',
                        'min' => 1
                    ]
                ],
                'indent_spaces' => [
                    'type' => 'text',
                    'label' => 'Spaces to use for indents',
                    'size' => 'x-small',
                    'default' => 4,
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'hide_comments' => [
                    'type' => 'toggle',
                    'label' => 'Hide HTML comments in rendered HTML',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'tag_section' => [
                    'type' => 'section',
                    'title' => 'HTML tag configuration',
                    'underline' => false
                ],
                'blocklevel_tags' => [
                    'type' => 'array',
                    'label' => 'New block-level tags',
                    'default' => [
                        0 => 'article',
                        1 => 'aside',
                        2 => 'audio',
                        3 => 'bdi',
                        4 => 'canvas',
                        5 => 'details',
                        6 => 'dialog',
                        7 => 'figcaption',
                        8 => 'figure',
                        9 => 'footer',
                        10 => 'header',
                        11 => 'hgroup',
                        12 => 'main',
                        13 => 'menu',
                        14 => 'menuitem',
                        15 => 'nav',
                        16 => 'section',
                        17 => 'source',
                        18 => 'summary',
                        19 => 'template',
                        20 => 'track',
                        21 => 'video'
                    ],
                    'size' => 'medium',
                    'value_only' => true
                ],
                'inline_tags' => [
                    'type' => 'array',
                    'label' => 'New inline-level tags',
                    'default' => [
                        0 => 'audio',
                        1 => 'command',
                        2 => 'datalist',
                        3 => 'embed',
                        4 => 'keygen',
                        5 => 'mark',
                        6 => 'menuitem',
                        7 => 'meter',
                        8 => 'output',
                        9 => 'progress',
                        10 => 'source',
                        11 => 'time',
                        12 => 'video',
                        13 => 'wbr',
                        14 => 'data'
                    ],
                    'size' => 'medium',
                    'value_only' => true
                ],
                'empty_tags' => [
                    'type' => 'array',
                    'label' => 'This option specifies new empty inline tags',
                    'default' => [
                        0 => 'command',
                        1 => 'embed',
                        2 => 'keygen',
                        3 => 'source',
                        4 => 'track',
                        5 => 'wbr'
                    ],
                    'size' => 'medium',
                    'value_only' => true
                ],
                'ignore_pages' => [
                    'type' => 'array',
                    'label' => 'Pages to be ignored by tidy processing.',
                    'default' => [
                        0 => 'sitemap'
                    ],
                    'size' => 'medium',
                    'value_only' => true
                ]
            ]
        ]
    ]
];
