<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post6;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','post_id'];

    public static $rules = array(
        'user_id' => 'integer',
        'post_id' => 'integer',
    );

        public function user(){ 
        return $this->belongsTo('App\Models\user');
    }

    
      public function post()
  {
    return $this->belongsTo(Post::class);
  }

}