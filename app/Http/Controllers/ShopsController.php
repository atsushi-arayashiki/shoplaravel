<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Shop;


class ShopsController extends Controller
{
public function get(Request $request)
  {
      $items = DB::table('shops')->get();
      return response()->json([
          'message' => 'User got successfully',
          'data' => $items
            ], 200);
}
public function getDetail(Request $request)
{
        $items = DB::table('shops')->get();
        return response()->json([
            'message' => 'User got successfully',
            'data' => $items
        ], 200);
}
public function show(Shop $shop)
{
        $items = Shop::where(select * from 'shops' where 'shop_id' = '{shop_id}')->first();
        if ($items) {
            return response()->json([
                'message' => 'OK',
                'data' => $items
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
}
}
