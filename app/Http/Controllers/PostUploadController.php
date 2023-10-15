<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class PostUploadController extends Controller
{
    // function uploadGet() {
    //     return Socialite::driver('facebook')->redirect();
    //     // return Socialite::driver('facebook')->redirect();
    //     return view('upload.form');
    // }

    // public function uploadPost(Request $request)
    // {
    //     $postData = [
    //         'message' => $request->input('message'),
    //         'image' => $request->file('image'),
    //     ];

    //     $facebook = Socialite::driver('facebook')->user();
    //     // $instagram = Socialite::driver('instagram')->user();
    //     return $facebook;
    //     try {
    //         $facebook->post('/me/feed', $postData);
    //         // $instagram->post('/me/media', $postData);

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Post uploaded successfully',
    //         ]);
    //     } catch (Socialite\Exceptions\InvalidCredentialsException $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => $e->getMessage(),
    //         ]);
    //     }
    // }

    // function callback(Request $request) {

    //     try {
    //         $user = Socialite::driver('facebook')->user();
            
    //         session()->put('facebook_access_token', $user);
    //     } catch (\Throwable $th) {
    //         throw $th;
    //     }
    //     return session()->get('facebook_access_token');
    // }

}
