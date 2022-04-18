<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'content'];

    public static $rules = array(
        'user_id' => 'integer|min:0|max:150',
        'content' => 'required'|max:20',
    );
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->age .  '才'.') '.$this->nationality;
        return $txt;
    }
}