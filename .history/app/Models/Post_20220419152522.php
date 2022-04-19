<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'content'];

    public static $rules = array(
        'user_id' => 'integer',
        'content' => 'required|max:120',
    );

        public function user(){ 
        return $this->belongsTo('App\Models\user');
    }

            public function comments(){ 
        return $this->hasMany('App\Models\Comment');
    }

                public function Like(){ 
        return $this->belongsTo(Like::class);
    }

}