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
        $items = Tui2::all();
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
        $this->validate($request, Tui2::$rules);

        DB::insert('insert into tui2s (name,content) values (:name,:content)', $param);
        return  response()->json([
        redirect('/')
        ], 202);
    }


    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from tui2s where id =:id', $param);
        
        return redirect('/');
    }

  }