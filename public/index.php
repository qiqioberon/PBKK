<?php

use Illuminate\Http\Request;

// Check if APP_KEY is missing and generate it if necessary
if (empty(getenv('APP_KEY')) || getenv('APP_KEY') === '') {
    echo shell_exec('php artisan key:generate --ansi');
}


define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__ . '/../bootstrap/app.php')
    ->handleRequest(Request::capture());
