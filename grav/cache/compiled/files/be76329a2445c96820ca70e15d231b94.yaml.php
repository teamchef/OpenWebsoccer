<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_/12_4_2/www/grav/user/plugins/read_later/blueprints.yaml',
    'modified' => 1460326210,
    'data' => [
        'name' => 'Read Later',
        'version' => '1.1.3',
        'description' => 'This plugin add the abilty to share the page to read later webservices.',
        'icon' => 'thumb-tack',
        'author' => [
            'name' => 'NunoPress LLC',
            'email' => 'hello@nunopress.com',
            'url' => 'http://nunopress.com'
        ],
        'homepage' => 'https://github.com/nunopress/grav-plugin-read_later',
        'keywords' => 'readlater, plugin, twig',
        'bugs' => 'https://github.com/nunopress/grav-plugin-read_later/issues',
        'docs' => 'https://github.com/nunopress/grav-plugin-read_later/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
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
                ]
            ]
        ]
    ]
];
