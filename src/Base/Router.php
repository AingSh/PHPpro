<?php

namespace Hillel\Base;

class Router
{
    public function route(): callable
    {
        if ($_SERVER['REQUEST_URI'] == '/contact') {
            $controller = new \Hillel\Controllers\PageController();
            return [$controller, 'contact'];
        }
        throw new \Exception('Not found');
    }
}