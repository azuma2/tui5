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

public function store(Request $request)
  {
    $item = Contact::create($request->all());
    return response()->json([
      'data' => $item
    ], 201);
  }



  }