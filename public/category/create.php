<?php


require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

use Hillel\Models\Category;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = new Category();
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('location: /category');
}


/**  @var $blade */


echo $blade->make('category/create')->render();