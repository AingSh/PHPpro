<?php


require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

use Hillel\Models\Category;


if (!isset($_GET['id'])) {
    throw  new Error('not found id category');
}

$category = Category::find($_GET['id']);
$category->delete();
header('location: /category');


