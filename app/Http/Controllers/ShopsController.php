<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ShopsController extends Controller
{
  public function index(Request $request)
  {
     $now = Carbon::now();
     $param = [
         "shop_image" => $request->shop_image,
         "shop_name" => $request->shop_name,
         "shop_area" => $request->shop_area,
         "shop_genre" => $request->shop_genre,
     ];
     DB::table('shops')->get($param);
     return response()->json([
         'message' => 'User created successfully',
         'data' => $param
     ], 200);
  }
}
