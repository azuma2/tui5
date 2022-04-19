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


    public function iine(Request $request)
    {
        $param = [
            'name' => $request->name,
            'iine' => $request->iine,
            'user_id' => $request->user_id,];
        $this->validate($request, Like::$rules);

        DB::insert('insert into likes (name,iine,user_id) values (:name,:iine,user_id)', $param);
        return redirect('/');
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