<?php

namespace models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Url extends Eloquent
{
    /**
     * @var string
     */
    protected $table = 'urls';


    /**
     * @var array
     */
    protected $fillable = ['long_url', 'short_url'];


}

