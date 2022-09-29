<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/blade.php';

use Hillel\Models\Tag;

if (!isset($_GET['id'])) {
    throw  new Error('not found id tag');
}

$tag = Tag::find($_GET['id']);
$tag->delete();
header('location: /tag');


