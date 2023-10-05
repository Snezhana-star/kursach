<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        return view('user.show', [
            'user'=>$user
        ]);
    }
}
