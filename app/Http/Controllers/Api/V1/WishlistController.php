<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Carbon\Carbon;

class WishlistController extends Controller {
    public function show($user_id) {
        return User::findOrFail($user_id, ['id'])->businesses;
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
