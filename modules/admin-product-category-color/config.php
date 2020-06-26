<?php

return [
    '__name' => 'admin-product-category-color',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-product-category-color.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-product-category-color' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product-category-color' => NULL
            ],
            [
                'admin-product-category' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.product-category.edit' => [
                'color' => [
                    'label' => 'Color',
                    'type' => 'color',
                    'rules' => [],
                    'xpos' => 'left-bottom-right'
                ]
            ]
        ]
    ]
];