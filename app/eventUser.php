<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventUser extends Model
{
        protected $fillable = [
        'event_id', 'user_id'
    ];
}
