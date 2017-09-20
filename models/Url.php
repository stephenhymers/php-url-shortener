<?php


class Url extends Illuminate\Database\Eloquent\Model
{
    /**
     * @var string
     */
    protected $table = 'urls';


    /**
     * @var array
     */
    protected $fillable = ['long_url', 'short_url'];


    public function matchUrl($url)
    {
        return $this->get();

        $compareUrl = $this::where('long_url', $slug)->first();

    }

}