<?php

namespace App\Http\Controllers\API\Auth;

use App\DTO\UserData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Repositories\User\UserInterface;
use App\Http\Requests\RegisterUserRequest;

class RegisterUserController extends Controller
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
    public function __invoke(RegisterUserRequest $request)
    {
        $userData = UserData::fromRequest($request);
        $user = $this->user->create($userData);
        $token = $user->createToken('MyApp')->accessToken;

        return response()->json(['user' => new UserResource($user), 'access_token' => $token], 201);
    }
}
