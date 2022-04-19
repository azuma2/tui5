<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','post_id', 'content'];

    public static $rules = array(
        'user_id' => 'integer',
        'post_id' => 'integer',
        'content' => 'required|max:120',
    );

        public function user(){ 
        return $this->belongsTo('App\Models\user');
    }

      public function reply()
  {
    return $this->belongsTo(Tui2::class);
  }

}