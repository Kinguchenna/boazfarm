<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
    'name','user_id','slug',
     ];
    protected $table='categories';

    public function user(){
      return  $this->belongsTo(User::class);
    }
        public function posts()
      {
  //        return $this->hasMany('App\Product');
          return $this->hasMany(Post::class);
      }

      public function users()
    {
//        return $this->hasMany('App\Product');
        return $this->hasMany(User::class);
    }
}
