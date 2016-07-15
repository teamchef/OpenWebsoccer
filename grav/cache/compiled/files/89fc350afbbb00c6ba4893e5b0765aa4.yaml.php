<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_/12_4_2/www/grav/user/plugins/textformatter/textformatter.yaml',
    'modified' => 1460326218,
    'data' => [
        'enabled' => true,
        'process' => false,
        'autoemail' => true,
        'autoimage' => true,
        'autolink' => [
            'enabled' => true,
            'www' => false,
            'schemes' => [
                0 => 'http',
                1 => 'https'
            ]
        ],
        'bbcodes' => [
            'enabled' => true,
            'bbcodes' => [
                0 => 'b',
                1 => 'c',
                2 => 'center',
                3 => 'code',
                4 => 'color',
                5 => 'email',
                6 => 'float',
                7 => 'hr',
                8 => 'i',
                9 => 'img',
                10 => 'list',
                11 => '*',
                12 => 'quote',
                13 => 's',
                14 => 'size',
                15 => 'spoiler',
                16 => 'u',
                17 => 'url'
            ],
            'custom' => NULL
        ],
        'censor' => [
            'enabled' => true,
            'words' => NULL
        ],
        'emoji' => '',
        'emoticons' => [
            'enabled' => true,
            'path' => '',
            'icons' => NULL
        ],
        'escaper' => [
            'enabled' => true,
            'escape_all' => false,
            'regex' => ''
        ],
        'fancypants' => true,
        'html' => [
            'comments' => true,
            'entities' => true,
            'elements' => [
                'enabled' => true,
                'allowed' => [
                    'safe' => [
                        'a' => 'href, *title',
                        'abbr' => '*title',
                        'b' => '',
                        'br' => '',
                        'code' => '',
                        'dd' => '',
                        'del' => '',
                        'div' => '*class',
                        'dl' => '',
                        'dt' => '',
                        'i' => '',
                        'img' => 'src, *alt, *height, *title, *width',
                        'ins' => '',
                        'li' => '',
                        'ol' => '',
                        'pre' => '',
                        'rb' => '',
                        'rp' => '',
                        'rt' => '',
                        'rtc' => '',
                        'ruby' => '',
                        'span' => '*class',
                        'strong' => '',
                        'sub' => '',
                        'sup' => '',
                        'table' => '',
                        'tbody' => '',
                        'td' => '*colspan, *rowspan',
                        'tfoot' => '',
                        'th' => '*colspan, *rowspan, *scope',
                        'thead' => '',
                        'tr' => '',
                        'u' => '',
                        'ul' => ''
                    ],
                    'unsafe' => NULL
                ]
            ]
        ],
        'keywords' => [
            'enabled' => true,
            'case_sensitive' => true,
            'template' => '',
            'keywords' => NULL
        ],
        'mediaembed' => [
            'enabled' => true,
            'create_individiual_bbcodes' => true,
            'sites' => [
                0 => 'dailymotion',
                1 => 'facebook',
                2 => 'flickr',
                3 => 'imgur',
                4 => 'instagram',
                5 => 'slideshare',
                6 => 'soundcloud',
                7 => 'spotify',
                8 => 'tumblr',
                9 => 'twitch',
                10 => 'twitter',
                11 => 'vimeo',
                12 => 'vine',
                13 => 'youtube'
            ]
        ],
        'preg' => [
            'enabled' => true,
            'replace' => NULL,
            'match' => NULL
        ]
    ]
];
