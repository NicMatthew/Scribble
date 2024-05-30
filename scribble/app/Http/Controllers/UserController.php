<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile()
    {
        // Mengambil pengguna yang sedang login
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }

    public function editProfile()
    {
        return view("edit-profile");
    }
}
