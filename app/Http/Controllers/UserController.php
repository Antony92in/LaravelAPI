<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    // 

	public function login(Request $request)
	{
		$user = User::where('email', $request->email)->first();
        
		if (!$user || !Hash::check($request->password, $user->password)) {

			return response([
				'message' => ['These credentials do not match our records.']
			], 404);
		}

		$token = $user->createToken('my-app-token')->plainTextToken;

		$response = [
			'user' => $user,
			'token' => $token
		];

		return response($response, 201);
	}

	public function register(Request $request) 
	{ 
		$validator = Validator::make($request->all(), [ 
			'name' => 'required', 
			'email' => 'required|unique:users', 
			'password' => 'required', 
		]);

		if ($validator->fails()) { 
			return response('fail', 401);            
		}

		$user = new User;

		$user->name = $request->name;

		$user->password = bcrypt($request->password);

		$user->email = $request->email;

		$user->save();

		return response('ok', 200);
	}
}