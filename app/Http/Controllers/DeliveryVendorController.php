<?php

namespace App\Http\Controllers;

use App\DeliveryVendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DeliveryVendorController extends Controller
{


    public function index()
    {
        $vendors = DeliveryVendor::all();
        return view('admins.creators.delivery_vendors', 
        compact([
            'vendors'
        ]));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:6'],
            'name' => ['required', 'string', 'min:2', 'max:100', 'unique:delivery_vendors'],
            'phone' => ['nullable', 'required', 'string', 'regex:/^(01)[3-9]{1,1}[0-9]{8,8}$/i'],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'location' => ['nullable', 'string', 'min:5', 'max:60'],
            'extras' => ['nullable', 'string', 'min:3', 'max:180'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = auth()->user();

        if (Hash::check($request->password, $user->password) == false) {
            return back()->withErrors(['password' => 'Admin password doesn\'t match'])->withInput();
        }

        $newVendor = DeliveryVendor::saveNewVendor($request);

        if ($newVendor instanceof DeliveryVendor) {
            return back()->with('vendor_saved', 'New Vendor Created Successfully!');
        } else {
            return back()->with('vendor_saved', 'Something went wrong! Could not create New Vendor.')->withInput();
        }
    }

    public function delete(DeliveryVendor $vendor)
    {
        if ($vendor->delete()) {
            return back()->with('vendor_delete', 'Vendor Deleted Successfully!');
        } else {
            return back()->with('vendor_delete', 'Could not delete the vendor!');
        }
    }

}
