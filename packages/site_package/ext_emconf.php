<?php

/**
 * Extension Manager/Repository config file for ext "site_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Site package',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Kotech\\SitePackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Adama',
    'author_email' => 'adamako34@gmail.com',
    'author_company' => 'kotech',
    'version' => '1.0.0',
];
