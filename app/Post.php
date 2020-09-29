<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // protected $table = "recensioni";
  protected $fillable = [
                        'title',
                        'text',
                        'category',
                        'like',
                        'dislike'
                      ];
}
