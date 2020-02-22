<?php

namespace App\DTO;

use Illuminate\Support\Facades\Hash;
use Spatie\DataTransferObject\DataTransferObject;

class UserData extends DataTransferObject
{
    /** @var string $first_name */
    public $first_name;

    /** @var string $last_name */
    public $last_name;

    /** @var string $email */
    public $email;

    /** @var string $password */
    public $password;

    /** @var string|null $api_token */
    public $api_token;

    /** @var string|null $user_type */
    public $user_type;

    /** @var array|null $liked_posts */
    public $liked_posts;

    /** @var array|null disliked_posts */
    public $disliked_posts;

    /** @var array|null $favorite_posts */
    public $favorite_posts;

    /** @var array|null $favorite_categories */
    public $favorite_categories;

    /** @var array|null $preferences */
    public $preferences;

    /** @var string $avatar */
    public $avatar;


    public static function fromRequest(\Illuminate\Http\Request $request): self
    {
        return new self([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'api_token' => $request->input('api_token'),
            'user_type' => $request->input('user_type'),
            'liked_posts' => $request->input('liked_posts'),
            'disliked_posts' => $request->input('disliked_posts'),
            'favorite_posts' => $request->input('favorite_posts'),
            'favorite_categories' => $request->input('favorite_categories'),
            'preferences' => $request->input('preferences'),
            'avatar' => $request->input('avatar'),
        ]);
    }
}
