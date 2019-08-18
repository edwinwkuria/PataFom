<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\event;
use App\eventphoto;

class eventCategory extends Model
{
         protected $fillable = [
        'event_id', 'category_id',];


    public function events(){
    	return $this ->hasMany('App\event','id','event_id');//->hasOne('App\eventphoto','event_id');
    }
    public function eventphoto(){
    	return $this-> hasManyThrough(
    		eventphoto::class,//model to access to
            event::class,//Intermediate model
            'id',// Foreign key on intermediate table
            'Photoid',//Local key on rerefence table
            'event_id',//Local key on this table
            'photo_id',// Foreign key on intermediate table
    	);
    }

}