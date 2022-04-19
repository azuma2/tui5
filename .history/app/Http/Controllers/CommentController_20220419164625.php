<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{


    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'content' => $request->content,
            'post_id' => $request->post_id,];
        $this->validate($request, Comment::$rules);

        DB::insert('insert into posts (name,content,user_id) values (:name,:content,user_id)', $param);
        return redirect('/');
    }



  }