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
         "likes_id" => $request->likes_id,
         "shop_id" => $request->shop_id,
         "user_id" => $request->user_id,
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
