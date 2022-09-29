<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

use Hillel\Models\Category;
use Hillel\Models\Post;
use Hillel\Models\Tag;
use Hillel\Models\Order;
use Hillel\Models\Product;
use Hillel\Models\User;

if (!isset($_GET['id'])) {
    throw  new Error('not found id tag');
}

$tag = Tag::find($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->save();
    header('location: /tag');
}

/**  @var $blade */
echo $blade->make('tag/update-tag', compact('tag'))->render();