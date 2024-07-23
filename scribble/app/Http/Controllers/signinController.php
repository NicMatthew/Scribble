<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SigninController extends Controller
{
    public function signin() {
        $users = User::all();
        return view("sign-in", compact("users"));
    }

    public function createUser(Request $request) {
        $defaultProfilePicture = "/icons/profile-pink.svg";

        $validated = $request->all();

        $user = new User();
        $user->NameUser = $validated["name"];
        $user->EmailUser = $validated["email"];
        $user->password = Hash::make($validated["password"]);
        $user->DOBUser = $validated["DOB"];
        $user->RoleUser = 1;
        $user->ImageUser = $defaultProfilePicture;
        $user->PhoneNumberUser = $validated["phoneNumber"];
        $user->save();

        return redirect()->route("log-in");
    }

    public function login() {
        return view("log-in");
    }

    public function logout() {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route("home");
    }

    public function authenticate() {
        $validated = request()->all();
        $validated["EmailUser"] = $validated["email"];
        unset($validated["_token"]);
        unset($validated["email"]);

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();

            if (auth()->user()->RoleUser == 1) {
                // dd("user");
                return redirect()->route("home");
            } else {
                // dd("admin");
                return redirect()->route("admin-dashboard");
            }
        }
        return redirect()->route("log-in")->withErrors([
            "message" => "No matching email with the password!"
        ]);
    }
}
