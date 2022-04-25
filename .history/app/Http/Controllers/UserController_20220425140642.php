<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{

public function store(Request $request)
{
    $item = Comment::create($request->all());
    return response()->json([
    'data' => $item
    ], 201);
}



public function show(Comment $comment)
{
    $item = Comment::find($comment);
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