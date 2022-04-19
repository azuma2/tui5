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

public function store(Request $request)
  {
    $item = Contact::create($request->all());
    return response()->json([
      'data' => $item
    ], 201);
  }



  public function destroy(Request $reques)
  {
    $item = Post::where('id', $contact->id)->delete();
    if ($item) {
      return response()->json([
        'message' => 'Deleted successfully',
      ], 200);
    } else {
      return response()->json([
        'message' => 'Not found',
      ], 404);
    }
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