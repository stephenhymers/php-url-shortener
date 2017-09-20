<?php

use Illuminate\Database\Capsule\Manager as Capsule;


$schema = Capsule::schema();

/**
 * Create table for URL's
 */

Capsule::schema()->create('urls', function ($table) {

    $table->increments('id');
    $table->string('long_url');
    $table->string('short_url');
    $table->nullableTimestamps();

});
