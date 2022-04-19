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

        return response()->json([
        'items' => $items
        ], 200);
    }


    public function create(Request $request)
    {
        $this->validate($request, Post::$rules);
        $form = $request->all();
        Post::create($form);
        return response()->json([
        redirect('/')
        ], 200);
    }



public function remove(Request $request)
    {
        Post::find($request->id)->delete();
        return response()->json([
        redirect('/')
        ], 200);
    }


  public function show(Contact $contact)
  {
    $item = Contact::find($contact);
    if ($item) {
      return response()->json([
        'data' => $item
      ], 200);
    } else {
      return response()->json([
        'message' => 'Not found',
      ], 404);
    }
  }



  }