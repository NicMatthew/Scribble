<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Address;
use App\User;

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
        $user = Auth::user();
        return view('edit-profile', ['user' => $user]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // $user->update([
        //     'NameUser' => $request->name,
        //     'DOBUser' => $request->dob,
        //     'PhoneNumberUser' => $request->phoneNumber,
        //     'EmailUser' => $request->email,
        //     'password' => bcrypt($request->password),
        // ]);

        if($request->password == "••••••••"){
            $userData = [
            'NameUser' => $request->name,
            'DOBUser' => $request->dob,
            'PhoneNumberUser' => $request->phoneNumber,
            'EmailUser' => $request->email
            ];

        }
        else{
            $userData = [
            'NameUser' => $request->name,
            'DOBUser' => $request->dob,
            'PhoneNumberUser' => $request->phoneNumber,
            'EmailUser' => $request->email,
            'password' => Hash::make($request->password)
            ];
        }


        // dd($userData);

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Ambil file gambar yang diunggah
            $image = $request->file('image');

            // Konversi gambar ke dalam base64
            $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
            // $imageBase64 = base64_encode(file_get_contents($image));

            // Simpan data gambar ke dalam kolom profil
            $userData['ImageUser'] = 'data:'.$image->getClientMimeType().';base64,'.$imageBase64;
        }

        // // Lakukan pembaruan profil
        // $user->update($userData);

        if (!empty($userData)) {
            $user->update($userData);
        }

        return redirect('/profile');
    }

    public function showAddresses($userId)
    {
        $addresses = Address::where('UserID', $userId)->get();
        // dd($addresses);
        return view('address', ['addresses' => $addresses]);
    }
}
