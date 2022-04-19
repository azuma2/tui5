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


public function store(Request $request)
  {
    $item = Contact::create($request->all());
    return response()->json([
      'data' => $item
    ], 201);
}


public function destroy(Contact $contact)
{
    $item = Contact::where('id', $contact->id)->delete();
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



}