<?php

namespace App;

use App\categories;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','userType','password','phoneNumber',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function events(){
        return $this ->hasManyThrough(
            event::class,
            eventUser::class,
            'user_id',
            'id',
            'id',
            'event_id',
        );
    }
    public function categories(){
        return $this ->hasManyThrough(
            categories::class,
            userCategories::class,
            'user_id',
            'categoryid',
            'id',
            'category_id',
        );
    }
}
