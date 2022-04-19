<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $items = Post::all();
        $comments = Come2::all();
        return response()->json([
        view('index', ['items' => $items,'comments' => $comments])
        ], 201);
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'content' => $request->content,

            
    
                ];
        $this->validate($request, Post::$rules);

        DB::insert('insert into posts (name,content) values (:name,:content)', $param);
        return redirect('/');
    }


    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from post2s where id =:id', $param);
        return redirect('/');
    }

  }