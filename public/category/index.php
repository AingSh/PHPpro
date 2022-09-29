<?php


require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

use Hillel\Models\Category;


/**  @var $blade */

$categories = Category::all();

echo $blade->make('category/index', compact('categories'))->render();