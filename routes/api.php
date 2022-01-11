<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Destination;
use App\Models\Category;
use App\Models\Business;
use App\Models\Event;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\DestinationController;
use App\Http\Controllers\Api\V1\BusinessController;
use App\Http\Controllers\Api\V1\PhotoController;
use App\Http\Controllers\Api\V1\ReviewController;
use App\Http\Controllers\Api\V1\PromotionController;
use App\Http\Controllers\Api\V1\EventController;
use App\Http\Controllers\Api\V1\WishlistController;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/** php artisn route:list */

Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search']);

Route::get('/businesses/search', [BusinessController::class, 'search']);
Route::get('/businesses/{id}', [BusinessController::class, 'show']);
Route::get('/businesses/{business_id}/photos', [PhotoController::class, 'index']);
Route::get('/businesses/{business_id}/reviews', [ReviewController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/destinations', [DestinationController::class, 'index']);
Route::get('/destinations/{id}', [DestinationController::class, 'show']);

Route::get('/promotions', [PromotionController::class, 'index']);
Route::get('/promotions/search', [PromotionController::class, 'search']);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/search', [EventController::class, 'search']);

Route::post('/wishlist/create', [WishlistController::class, 'create']);
Route::delete('/wishlist/destroy', [WishlistController::class, 'destroy']);
Route::get('/wishlist/{user_id}', [WishlistController::class, 'show']);

Route::post('/reviews/create', [ReviewController::class, 'create']);
Route::delete('/reviews/destroy', [ReviewController::class, 'destroy']);


/** Section - Following up with bravetrasery */
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/logout', [AuthController::class, 'logout']);
});
/** End section */


/** Section - Following up with Abdulaziz */
// Route::post('/sanctum/token', function (Request $request) {
//     $request->validate([
//         'email' => 'required|email',
//         'password' => 'required',
//         'device_name' => 'required',
//     ]);

//     $user = User::where('email', $request->email)->first();

//     if (! $user || ! Hash::check($request->password, $user->password)) {
//         throw ValidationException::withMessages([
//             'email' => ['The provided credentials are incorrect.'],
//         ]);
//     }

//     return $user->createToken($request->device_name)->plainTextToken;
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/user/revoke', function (Request $request) {
//     $user = $request->user();
//     $user->tokens()->delete();
//     return ["message" => "Token were deleted successfully!"];
// });
/** End Section */
