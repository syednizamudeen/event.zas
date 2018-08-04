<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['activationdate', 'expirydate'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vendor_id', 'plan_id', 'activationdate', 'expirydate',
    ];

    /**
     * Get the vendor that has the subscription.
     */
    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }

    /**
     * Get the plan that has the subscription.
     */
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
}
