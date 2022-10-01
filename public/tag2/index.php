<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

use Hillel\Models\Tag;


/**  @var $blade */


$tags = Tag::all();

echo $blade->make('tag/index', compact('tags'))->render();