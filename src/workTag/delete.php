<?php
require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/database.php';
require_once __DIR__.'/../../config/blade.php';
require_once __DIR__.'/../Models/Category.php';

if (empty($_GET['id'])){
    header('Location:/../../public/tag.php');
}

$id = $_GET['id'];
$tag = \Dz\Models\Tag::find($id);
$tag->delete();
header('Location:/../../public/tag.php');
