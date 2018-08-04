<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorService extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vendor_id', 'service_id',
    ];

    /**
     * Get the service that provided by the vendor.
     */
    public function service()
    {
        return $this->belongsTo('App\Service', 'service_id', 'id');
    }
}
