<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\event;
use App\eventCategory;
use App\eventphoto;

class categories extends Model
{
        public function events(){
        return $this ->hasManyThrough(
            event::class,//model to access to
            eventCategory::class,//Intermediate model
            'category_id',// Foreign key on intermediate table
            'id',//Local key on rerefence table
            'categoryid',//Local key on this table
            'event_id',// Foreign key on intermediate table
        );
    }
        public function eventphoto(){
        return $this ->hasManyThrough(
            eventphoto::class,
            eventCategory::class,
            'category_id',
            'event_id',
            'categoryid',
            'event_id',
        ); 
        }
}
