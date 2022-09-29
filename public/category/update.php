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
    throw  new Error('not found id category');
}

$category = Category::find($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('location: /category');
}

/**  @var $blade */
echo $blade->make('category/update-category', compact('category'))->render();