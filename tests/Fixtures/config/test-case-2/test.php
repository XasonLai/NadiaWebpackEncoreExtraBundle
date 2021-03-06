<?php

$container->loadFromExtension(
    'nadia_webpack_encore_extra',
    [
        'default_build' => [
            'entry_name_prefix' => 'foo',
            'package_name' => 'bar',
            'controller_class_name_prefixes' => [
                'App\Controller\ClassNamePrefix1',
                'App\Admin\Controller\ClassNamePrefix2',
            ],
            'file_tree_depths' => [
                'App\Controller\ClassNamePrefix1\SubFolder1' => 2,
                'App\Controller\ClassNamePrefix1\SubFolder2\SubFolder3' => 3,
            ],
        ],
    ]
);
