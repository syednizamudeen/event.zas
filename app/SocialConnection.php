<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialConnection extends Model
{
    /**
     * Get the usersocialconnection for the SocialConnection.
     */
    public function usersocialconnection()
    {
        return $this->hasMany('App\UserSocialConnection', 'id', 'social_connection_id');
    }
}
