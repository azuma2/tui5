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
            'comment' => $request->comment,];
        $this->validate($request, Post::$rules);

        DB::insert('insert into posts (name,comment) values (:name,:content)', $param);
        return redirect('/');
    }



  }