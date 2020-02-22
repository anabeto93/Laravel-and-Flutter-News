<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Repositories\User\UserInterface;

class AuthenticateUserController extends Controller
{
    /** @var UserInterface $user */
    public $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('MyApp')->accessToken;
            return response()->json(['user' => new UserResource(\App\Models\User::find(auth()->user()->id)), 'access_token' => $token], 200);
        } else {
            return response()->json(['error' => 'Invalid credentials.'], 401);
        }
    }
}
