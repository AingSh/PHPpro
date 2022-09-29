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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tag = new Tag();
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->save();
    header('location: /tag');
}

/**  @var $blade */

echo $blade->make('tag/create-tag')->render();