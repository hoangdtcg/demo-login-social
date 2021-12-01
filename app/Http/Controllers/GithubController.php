<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator, Illuminate\Support\Facades\Redirect, Illuminate\Support\Facades\Response, Illuminate\Support\Facades\File;


class GithubController extends Controller
{
    public function redirectGitHub($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callbackGitHub($provider)
    {

        $getInfo = Socialite::driver($provider)->user();
//        dd($getInfo);
        $user = $this->createUser($getInfo,$provider);

        auth()->login($user);

        return redirect()->to('/home');

    }
    function createUser($getInfo,$provider){

        $user = User::where('provider_id', $getInfo->id)->first();

        if (!$user) {
            $user = User::create([
                'name'     => $getInfo->nickname,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}

