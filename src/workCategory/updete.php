<?php
require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/database.php';
require_once __DIR__.'/../../config/blade.php';
require_once __DIR__.'/../Models/Category.php';

if (empty($_GET['id'])){
    header('Location:/../../public/category.php');
}
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = \Dz\Models\Category::find($id);
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location:/../../public/category.php');
}else{

    $category = \Dz\Models\Category::find($id);
    /** @var $blade */
    echo $blade->make('update_category', [
            'category' => $category,
            'id' => $id
        ]
    )->render();
}
