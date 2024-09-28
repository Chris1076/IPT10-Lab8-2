<?php

namespace App;

require "vendor/autoload.php";
require "init.php";
require "src/ProfileHandler.php";

use Klein\Klein as Route;
use Exception;

try {

    $route = new Route();

    $route->get('/founder/[s:format]', ['App\ProfileHandler', 'display']);

    $route->dispatch();

 } catch (Exception $e) { 

     err('ERROR ' . $e->getMessage());
     echo json_encode([
         'error' => $e->getMessage()
     ]);

 }
