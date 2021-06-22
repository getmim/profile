<?php

return [
    'Profile\\Model\\Profile' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE
                ],
                'index' => 2000
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => FALSE,
                    'unique' => TRUE
                ],
                'index' => 3000
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => FALSE
                ],
                'index' => 4000
            ],
            'email' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => FALSE,
                    'unique' => TRUE
                ],
                'index' => 5000
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'length' => 50,
                'attrs' => [
                    'null' => FALSE,
                    'unique' => TRUE
                ],
                'index' => 6000
            ],
            'avatar' => [
                'type' => 'VARCHAR',
                'length' => 250,
                'index' => 7000
            ],
            'cover' => [
                'type' => 'VARCHAR',
                'length' => 250,
                'index' => 8000
            ],
            'bdate' => [
                'type' => 'DATE',
                'attrs' => [
                    'null' => TRUE
                ],
                'index' => 9000
            ],
            'bplace' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'index' => 10000
            ],
            'gender' => [
                'comment' => '0 Unknown, 1 Male, 2 Female',
                'type' => 'TINYINT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 11000
            ],
            'height' => [
                'comment' => 'In cm',
                'type' => 'SMALLINT',
                'attrs' => [
                    'unsigned' => TRUE
                ],
                'index' => 12000
            ],
            'weight' => [
                'comment' => 'In kg',
                'type' => 'SMALLINT',
                'attrs' => [
                    'unsigned' => TRUE
                ],
                'index' => 13000
            ],
            'skin' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'index' => 14000
            ],
            'biography' => [
                'type' => 'TEXT',
                'index' => 15000
            ],
            'educations' => [
                'comment' => '[{"level":"S1","year":YYYY,"place":"..."},...]',
                'type' => 'TEXT',
                'index' => 16000
            ],
            'profession' => [
                'comment' => '[{"type":"...","since":YYYY},...]',
                'type' => 'TEXT',
                'index' => 17000
            ],
            'contact' => [
                'comment' => '{"phone":"...","email":"...",...}',
                'type' => 'TEXT',
                'index' => 18000
            ],
            'socials' => [
                'comment' => '[{"type":"facebook","url":"..."},...]',
                'type' => 'TEXT',
                'index' => 19000
            ],

            'addr_country' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'index' => 20000
            ],
            'addr_state' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'index' => 21000
            ],
            'addr_city' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'index' => 22000
            ],
            'addr_street' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'index' => 23000
            ],

            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 24000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 25000
            ]
        ]
    ]
];
