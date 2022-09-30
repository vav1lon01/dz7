<?php
require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/database.php';
require_once __DIR__.'/../../config/blade.php';
require_once __DIR__.'/../Models/Category.php';

if (empty($_GET['id'])){
    header('Location:/../../public/tag.php');
}
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tag = \Dz\Models\Tag::find($id);
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->save();
    header('Location:/../../public/tag.php');
}else{

    $tag = \Dz\Models\Tag::find($id);
    /** @var $blade */
    echo $blade->make('update_tag', [
            'tag' => $tag,
            'id' => $id
        ]
    )->render();
}
