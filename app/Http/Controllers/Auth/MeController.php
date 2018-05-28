<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class MeController extends Controller
{
    public function me(Request $request)
    {
        if (!$request->user()) {
          return response(404);
        }
        return new UserResource($request->user());
    }

    public function test()
    {
        return [
            'id' => 'this->id',
            'name' => 'this->name',
            'email' => 'this->email',
        ];
    }
}
