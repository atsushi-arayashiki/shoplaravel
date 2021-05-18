<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LikesController extends Controller
{
    public function post(Request $request)
    {
        $now = Carbon::now();
        $param = [
         "shop_id" => $request->shop_id,
         "shop_name" => $request->shop_name,
         "shop_address" => $request->shop_address,
         "shop_genre" => $request->shop_genre,
         "shop_like" => $request->shop_like,
         "created_at" => $now,
         "updated_at" => $now,
        ];
        DB::table('Likes')->insert($param);
    }
    public function delete(Request $request)
    {
        DB::table('likes')->where('shop_like', $request->shop_like)->delete();
    }
}
