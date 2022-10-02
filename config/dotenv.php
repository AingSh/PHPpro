<?php


$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
    ->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
    ->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
    ->immutable()
    ->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__ . '/../');
$dotenv->load();
$dotenv->required('DATABASE_DB')->notEmpty();

//echo '<pre>';
//print_r(getenv('DATABASE_PASSWORD'));
//echo '<pre>';