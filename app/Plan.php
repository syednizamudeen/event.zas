<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{    

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function duration()
    {
        return $this->belongsTo('App\Duration');
    }

}
