<?php
require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/database.php';
require_once __DIR__.'/../../config/blade.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = new \Dz\Models\Category();
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location:/../../public/category.php');
}else{

    $category = new \Dz\Models\Category();
    /** @var $blade */
    echo $blade->make('add_category', [
            'category' => $category
        ]
    )->render();
}
