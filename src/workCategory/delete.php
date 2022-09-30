<?php
require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/database.php';
require_once __DIR__.'/../../config/blade.php';


if (empty($_GET['id'])){
    header('Location:/../../public/category.php');
}

$id = $_GET['id'];
$category = \Dz\Models\Category::find($id);
$category->delete();
header('Location:/../../public/category.php');
