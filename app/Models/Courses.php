<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
   protected $fillable=[
    'title',
    'image',
    'price',
    'description',
    'category_id',
    'sub_category_id',
   ];
}
