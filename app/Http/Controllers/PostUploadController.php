<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class PostUploadController extends Controller
{
    function uploadGet() {
        return Socialite::driver('facebook')->redirect();
        // return Socialite::driver('facebook')->redirect();
        return view('upload.form');
    }

    public function uploadPost(Request $request)
    {
        $postData = [
            'message' => $request->input('message'),
            'image' => $request->file('image'),
        ];

        $facebook = Socialite::driver('facebook')->user();
        // $instagram = Socialite::driver('instagram')->user();
        return $facebook;
        try {
            $facebook->post('/me/feed', $postData);
            // $instagram->post('/me/media', $postData);

            return response()->json([
                'success' => true,
                'message' => 'Post uploaded successfully',
            ]);
        } catch (Socialite\Exceptions\InvalidCredentialsException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }

    function callback(Request $request) {

        try {
            $user = Socialite::driver('facebook')->user();
            
            session()->put('facebook_access_token', $user);
        } catch (\Throwable $th) {
            throw $th;
        }
        return session()->get('facebook_access_token');
        // return view('callback.fb-callback');
    //     $code = $request->get('code');
    //     // return $code;
    //     $user = Socialite::driver('facebook')->user();
    //     return $user;
    // // Get the access token from Facebook.
    //     $accessToken = Socialite::driver('facebook')->userFromCode($code);

    //     // Save the access token to the user's session.
    //     session()->put('facebook_access_token', $accessToken);
    //     return $accessToken;
    //     return view('callback.fb-callback');
    }

}
