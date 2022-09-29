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

/**  @var $blade */


$tags = Tag::all();

echo $blade->make('tag/index',compact('tags') )->render();