<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Destination;
use App\Models\Category;
use App\Models\Business;
use App\Models\Event;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Controllers\Api\V1\BusinessController;

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

Route::get('/businesses/{id}', [BusinessController::class, 'show']);

Route::get('/destinations', function() {
    return Destination::all(['id', 'name', 'img_path']);
});

Route::get('/categories', function() {
    return Category::where('parent_id', NULL)
                    ->with('subcategories')
                    ->get(['id', 'name', 'img_path']);

    // return Category::where('parent_id', NULL)
    //             ->with('subcategories', function($query) {
    //                 $query->get(['id', 'name']);
    //             })
    //             ->get(['id', 'name', 'img_path']);
});

Route::get('/events', function() {
    return Event::all(['id', 'name', 'description', 'organizer', 'img_path', 'date_time']);
});

Route::post('/businesses', function() {
    return Business::create([
        'name' => 'Al-Ikhsan Sports',
        'description' => 'Welcome to a sport lover’s paradise! Al-Ikhsan Sports, award winning sports retailer and one of the largest in Malaysia, progressively aims high to be THE largest sports retailer in SouthEast Asia in the near future. From footwear to accessories and international or national team jerseys to lifestyle pieces. Authorised dealer of all your favorite sports brands like Nike, Reebok, Adidas, Asics and Puma, at competitive prices direct from the manufacturers. You will find it all here, at THE sports destination store.',
        'contact' => '019-7066523',
        'address' => 'LG-018 (The Mall, Mid Valley Southkey)',
        'time' => 'Sun – Wed (10:00 – 22:00)',
        'website_link' => ' http://www.al-ikhsan.com',
        'facebook_link' => 'http://www.facebook.com/alikhsansports',
        'instagram_link' => null,
        'featured' => 1,
        'category_id' => 1,
        'area_id' => 1,
    ]);
});

// Route::get('/businesses', function() {
//     return Business::all();
// });


/** Section - Following up with bravetrasery */
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function() {
    // Route::get('/businesses', [BusinessController::class, 'index']);

    // Route::get('/businesses/{id}', [BusinessController::class, 'show']);

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
