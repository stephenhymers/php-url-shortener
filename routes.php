<?php

use Carbon\Carbon;
use models\Url;
use NoahBuscher\Macaw\Macaw as Router;


Router::get('/shorten/(:any)', function($slug) {

    $dbUrl = Url::where('long_url', $slug)->first();

    if ($dbUrl === null) {
        $url = new Url();
        $url->fill([
            'long_url' => $slug,
            'short_url' =>  bin2hex(openssl_random_pseudo_bytes(8)),
            'created_at' => Carbon::now()
        ]);
        $url->save();

        echo 'Your shortened link is: <a href="/'. $url->short_url .'">'. $url->short_url .'</a>';
    }
    else {

        echo 'We have already processed this URL here is the shortened link: <a href="/'. $dbUrl->short_url .'">'. $dbUrl->short_url .'</a>';
    }
});

Router::get('/(:any)', function($slug) {

    // See if the url is already in the DB
    $url = Url::where('short_url', $slug)->orWhere('long_url', $slug)->first();

    if ($url === null ) {
        echo 'This URL has not been processed yet, please click <a href="/shorten/'. $slug .'">here</a> thing link to shorten it:';
    }
    else {
        // If the URL has been converted
        if ($url->short_url === $slug) {
            // Redirect to long url
            header('Location:' . $url->long_url);
        }
        elseif ($url->long_url) {

            // Show you have been redirected message
            echo 'You have been redirected to this url from this short URL:  ' . $url->short_url;
        }
    }

});