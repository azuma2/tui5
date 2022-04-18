<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','user_id', 'content'];

    public static $rules = array(
        'user_id' => 'integer',
        'content' => 'required|max:120',
    );

}