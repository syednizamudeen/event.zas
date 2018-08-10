<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSocialConnection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'social_connection_id', 'link',
    ];

    /**
     * Get the SocialConnection that relates UserSocialConnection.
     */
    public function socialconnection()
    {
        return $this->belongsTo('App\SocialConnection', 'social_connection_id', 'id');
    }
}
