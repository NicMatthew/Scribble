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
        // dd(request()->all());
        $address = Address::find(request()->addressID);
        // dd($address);

        $address->AddressName = request()->address_name;
        $address->RecipientName = request()->recipient_name;
        $address->PostCode = request()->post_code;
        $address->FullAddress = request()->full_address;
        $address->PhoneNumber = request()->phone_number;

        $address->update();

         // Redirect back to the page where the form was submitted
         return redirect()->to(request()->url);
    }

    public function deleteAddress(Request $request)
    {
        $addressId = $request->addressID;
        $address = Address::where('AddressID', $addressId)->firstOrFail();
        $address->delete();
        return back();
    }

    public function findAddress()
    {
        // dd('test');
        $addressID = request()->addressID;
        $userID = request()->userID;
        $addresses = Address::where('UserID', $userID)->get();
        $address_edit = null;

        if($addressID !=null){
            $address_edit = Address::where('AddressID', $addressID)->get()->first();
        }

        // dd($address_edit);
        return view('address',
        [
            "url" => request()->url,
            'addresses' => $addresses,
            "address_edit" => $address_edit
        ]);
    }
}
