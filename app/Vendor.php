<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'companyregno', 'address', 'country_id', 'postalcode', 'contactno', 'website',
    ];

    /**
     * Get the user record associated with the vendor.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the country record associated with the vendor.
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    /**
     * Get the services for the vendor.
     */
    public function vendorservice()
    {
        return $this->hasMany('App\VendorService', 'vendor_id', 'id');
    }
}
