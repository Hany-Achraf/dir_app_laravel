<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class WishlistController extends Controller {
    public function show($user_id) {
        $businesses = User::findOrFail($user_id, ['id'])->businesses;
        $response = [
            'next_page_url' => null,
            'data' => $businesses,
        ];
        return $response;
    }

    public function create(Request $request) {
        DB::table('wishlist')->insert([
            'business_id' => $request['business_id'],
            'user_id' => $request['user_id'],
            'created_at' => Carbon::now(),
        ]);
    }

    public function destroy(Request $request) {
        DB::table('wishlist')
            ->where('business_id', '=', $request['business_id'])
            ->where('user_id', '=', $request['user_id'])
            ->delete();
    }
}
