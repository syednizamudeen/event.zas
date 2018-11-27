<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use App\VerifyUser;
use App\Mail\VerifyMail;
use Mail;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $http = new \GuzzleHttp\Client;

        try
        {
            $response = $http->post(config('services.passport.login_endpoint'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => config('services.passport.client_id'),
                    'client_secret' => config('services.passport.client_secret'),
                    'username' => $request->username,
                    'password' => $request->password,
                ],
            ]);
        
            // return json_decode((string) $response->getBody(), true);
            return $response->getBody();
        }
        catch (\GuzzleHttp\Exception\BadResponseException $e)
        {
            if($e->getCode() == 400)
            {
                return response()->json('Invalid Request. Please enter a username or a password.', $e->getCode());
            }
            elseif($e->getCode() == 401)
            {
                return response()->json('Your credentials are incorrect. Please try again!', $e->getCode());
            }
            return response()->json('Something went wrong on the Server...', $e->getCode());
        }
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $newuser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user = User::find($newuser->id);
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);
        Mail::to($user->email)->send(new VerifyMail($user));
        $user->assignRole('visitor');
        return $newuser;
    }

    public function logout()
    {
        auth()->user()->tokens()->each(function($token, $key){
            $token->delete();
        });

        return response()->json('Logged out successfully', 200);
    }
}
