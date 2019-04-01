<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Faker',
    'description' => 'Generate faked data',
    'category' => 'backend',
    'author' => 'Georg Ringer',
    'author_email' => 'georg.ringer@gmail.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' =>
        [
            'depends' => [
                'typo3' => '7.6.0-9.5.99'
            ],
            'conflicts' => [],
            'suggests' => [],
        ]
];
