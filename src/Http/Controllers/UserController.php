<?php

namespace Nitseditor\Application\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Nitseditor\Application\Models\Page;
use Nitseditor\Application\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user_data['email'] = $request->username;
        $user_data['password'] = $request->password;

        if(auth()->attempt($user_data)) {
            $params = [
                'client_id' => $request->client_id,
                'client_secret' => $request->client_secret,
                'grant_type' => $request->grant_type,
                'password' => $request->password,
                'username' => $request->username,
                'scope' => '*'
            ];

            $req = Request::create(
                '/oauth/token',
                'POST', $params
            );

            $res = app()->handle($req);

            $token = json_decode($res->getContent());

            $user = User::where('email', $request->username)->first();

            $pages = Page::whereHas('roles', function ($q) use($user) {
                $q->whereIn('roles.id', [$user->role_id, '1']); //Guest ID to be set...
            })->get();

            return response()->json([
                'access_token' => $token ? $token->access_token : null,
                'refresh_token' => $token ? $token->refresh_token : null,
                'user_id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'role_id' => $user->role_id,
                'role' => $user->role->name,
                'permissible_pages' => $pages
            ], 200);
        }

        else {
            return response()->json(['message' => 'Invlid credentials'], 400);
        }
    }
}
