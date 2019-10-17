<?php

return [
    '__name' => 'profile',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/profile.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/profile' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-model' => NULL
            ],
            [
                'lib-enum' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Profile\\Model' => [
                'type' => 'file',
                'base' => 'modules/profile/model'
            ]
        ],
        'files' => []
    ],
    'libEnum' => [
        'enums' => [
            'profile.gender' => ['Unknown', 'Male', 'Female']
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'profile' => [
                'id' => [
                    'type'=>'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'fullname' => [
                    'type' => 'text'
                ],
                'email' => [
                    'type' => 'text'
                ],
                'phone' => [
                    'type' => 'text'
                ],
                'bdate' => [
                    'type' => 'date'
                ],
                'bplace' => [
                    'type' => 'text'
                ],
                'gender' => [
                    'type' => 'enum',
                    'enum' => 'profile.gender'
                ],
                'height' => [
                    'type' => 'number'
                ],
                'weight' => [
                    'type' => 'number'
                ],
                'skin' => [
                    'type' => 'text'
                ],
                'biography' => [
                    'type' => 'text'
                ],
                'educations' => [
                    'type' => 'json'
                ],
                'profession' => [
                    'type' => 'json'
                ],
                'contact' => [
                    'type' => 'json'
                ],
                'socials' => [
                    'type' => 'json'
                ],
                'addr_country' => [
                    'type' => 'text'
                ],
                'addr_state' => [
                    'type' => 'text'
                ],
                'addr_city' => [
                    'type' => 'text'
                ],
                'addr_street' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];