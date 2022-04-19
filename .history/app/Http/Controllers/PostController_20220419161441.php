<?php

namespace App\Http\Controllers;

use App\Models\Tui2;
use App\Models\Come2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Tui2Controller extends Controller
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

    public function update(Request $request)
    {
         $param = [
            'id' => $request->id,
            'name' => $request->name,
            'content' => $request->content,
            
        ];
        $this->validate($request, Tui2::$rules);
        DB::update('update tui2s set name =:name, content =:content where id =:id', $param);
        return response()->json([
        redirect('/')
        ], 203);
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from tui2s where id =:id', $param);
        return response()->json([
        redirect('/')
        ], 204);
    }

