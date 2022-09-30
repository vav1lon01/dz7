<?php
require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/database.php';
require_once __DIR__.'/../../config/blade.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tag = new \Dz\Models\Tag();
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->save();
    header('Location:/../../public/tag.php');
}else{

    $tag = new \Dz\Models\Tag();
    /** @var $blade */
    echo $blade->make('add_tag', [
            'tag' => $tag
        ]
    )->render();
}
