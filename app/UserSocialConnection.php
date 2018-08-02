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
}
