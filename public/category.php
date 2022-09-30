<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/blade.php';

$categories = \Dz\Models\Category::all();

/** @var $blade */
echo $blade->make('category',[
    'categories' => $categories
])->render();