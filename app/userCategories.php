<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userCategories extends Model
{
     protected $fillable = [
        'user_id', 'category_id',];
}
