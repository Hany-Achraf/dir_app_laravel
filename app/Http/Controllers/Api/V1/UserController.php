<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller {
    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');

        if ($request->image != NULL) {
            if(File::exists($user->img_path)) {
                File::delete($user->img_path);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('storage/images/avatars/', $filename);
            $user->avatar_img_path = 'storage/images/avatars/'. $filename;
        }

        $user->update();
        return ['user' => $user];
    }
}
