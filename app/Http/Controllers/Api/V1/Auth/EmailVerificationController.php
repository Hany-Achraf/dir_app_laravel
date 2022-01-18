<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;

class EmailVerificationController extends Controller
{

    public function sendVerificationEmail(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return [
                'message' => 'Already Verified'
            ];
        }

        $request->user()->sendEmailVerificationNotification();

        return ['status' => 'verification-link-sent'];
    }

    // EmailVerificationRequest is replaced with Request to avoid auth problems
    public function verify(Request $request)
    {
        $user = User::find($request->route('id'));

        if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification())))
        {
            return('ERROR: Authorization issues');
        }

        if ($user->hasVerifiedEmail()) {
            return('Email already verified');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return('Hi, '. $user->firstname.' '.$user->lastname.'<br>'.
               'Your email has been verified successfully.'.'<br>'.
               'Enjoy Everything in Southkey :)');
    }
}
