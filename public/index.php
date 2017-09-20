<?php

use NoahBuscher\Macaw\Macaw as Router;

require '../vendor/autoload.php';
require '../config/database.php';
/// Uncomment to create database
//require '../start.php';

require_once '../routes.php';

// Start the routing
Router::dispatch();