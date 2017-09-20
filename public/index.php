<?php

use NoahBuscher\Macaw\Macaw as Router;

require '../vendor/autoload.php';
require '../config/database.php';
/// Uncomment to create database and add data
//require '../start.php';

require_once '../routes.php';


// Start the routing
Router::dispatch();