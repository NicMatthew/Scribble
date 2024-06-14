<?php

namespace App\Http\Controllers;
use App\Models\Address;

use Illuminate\Http\Request;


class AddressController extends Controller
{
    public function addAddress(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'address_name' => 'required',
            'recipient_name' => 'required',
            'phone_number' => 'required',
            'full_address' => 'required',
            'post_code' => 'required',
        ]);

        // Create a new address record
        $address = new Address();
        $address->AddressName = $validatedData['address_name'];
        $address->RecipientName = $validatedData['recipient_name'];
        $address->PhoneNumber = $validatedData['phone_number'];
        $address->FullAddress = $validatedData['full_address'];
        $address->PostCode = $validatedData['post_code'];

        $address->UserID = auth()->id();
        $address->save();

        // Redirect back to the page where the form was submitted
        return back();
    }

    public function editAddress()
    {
        // $addressId = $request->addressID;
        Address::where('AddressID', request()->addressID)
        ->update([
            "AddressName" => request()->address_name,
            "RecipientName" => request()->recipient_name,
            "PostCode" => request()->post_code,
            "FullAddress" => request()->full_address,
            "PhoneNumber" => request()->phone_number
        ]);

         // Redirect back to the page where the form was submitted
         return back();
    }

    public function deleteAddress(Request $request)
    {
        $addressId = $request->addressID;
        $address = Address::where('AddressID', $addressId)->firstOrFail();
        $address->delete();
        return back();
    }
}
