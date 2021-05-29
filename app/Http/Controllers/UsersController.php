<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;



class UsersController extends Controller
{
  public function index()
  {
      $items = User::all();
      return response()->json([
          'message' => 'OK',
          'data' => $items
      ],200);
  }

  public function store(Request $request)
  {
      $item = new User;
      $item->user_name = $request->user_name;
      $item->password = $request->password;
      $item->save();
      return response()->json([
            'message' => 'Created successfully',
            'data' => $item
      ],200);
  }
}
