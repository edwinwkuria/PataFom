<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class eventOrganizer extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'organizerName','organizerEmail', 'organizerEmail2','organizerPhone','organizerPhone2','password',];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}