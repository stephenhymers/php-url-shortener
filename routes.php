<?php

use Carbon\Carbon;
use NoahBuscher\Macaw\Macaw as Router;

//Router::get('/shorten/(:any)', function($slug) {
//    if (strlen($slug) <= 8) {
//        throw new Exception('The URL must be longer than 8 characters to be shortened');
//    }
//
//    $url = new Url();
//
//    if ($compareUrl === null) {
//        $url->fill([
//            'long_url' => $slug,
//            'short_url' => bin2hex(openssl_random_pseudo_bytes(8)),
//            'created_at' => Carbon::now()
//        ]);
//        $url->save();
//        echo '<a href="'. $url->short_url .'">';
//    }
//    else {
//        echo 'That URL has already been converted, here is the link <a href="/'. $compareUrl->short_url .'">'. $compareUrl->short_url .'</a>';
//    }
//});



Router::get('/(:any)', function($slug) {

    $short = new ShortenUrl($slug);

    dd($short);

//    // See if the url is already in the DB
//    $compareUrl = Url::where('short_url', $slug)->first();
//
//    if ($compareUrl !== null) {
//        header('Location: '. $compareUrl->long_url);
//        exit();
//    }

});