<?php

use Carbon\Carbon;
use Illuminate\Database\Capsule\Manager as Capsule;


$schema = Capsule::schema();

/**
 * Create table for URL's
 */
if (!Capsule::schema()->hasTable('urls')) {

    Capsule::schema()->create('urls', function ($table) {

        $table->increments('id');
        $table->string('long_url');
        $table->string('short_url');
        $table->nullableTimestamps();

    });

}
else {
    Slug::create(
        [
            'long_url' => 'this/is/the/long/test/url/1',
            'short_url' => 'short-url-1',
            'created_at' => Carbon::now()
        ]
    );
    Slug::create(
        [
            'long_url' => 'this/is/the/long/test/url/2',
            'short_url' => 'short-url-2',
            'created_at' => Carbon::now()
        ]
    );
}
