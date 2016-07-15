<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_/12_4_2/www/grav/user/plugins/metadata_extended/blueprints.yaml',
    'modified' => 1460326206,
    'data' => [
        'name' => 'Metadata Extended',
        'version' => '1.0.1',
        'description' => 'This plugin extended the metadata with twig variables.',
        'icon' => 'sign-in',
        'author' => [
            'name' => 'NunoPress LLC',
            'email' => 'hello@nunopress.com',
            'url' => 'http://nunopress.com'
        ],
        'homepage' => 'https://github.com/nunopress/grav-plugin-metadata_extended',
        'keywords' => 'metadata, opengraph, facebook, plugin',
        'bugs' => 'https://github.com/nunopress/grav-plugin-metadata_extended/issues',
        'docs' => 'https://github.com/nunopress/grav-plugin-metadata_extended/blob/develop/README.md',
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
