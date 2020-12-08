<?php

namespace App;

use App\Model;
use Exception;
use Illuminate\Http\Request;

class DeliveryVendor extends Model
{

    public function orders()
    {
        return $this->hasMany(Order::class, 'delivery_vendor_id', 'id');
    }

    public static function saveNewVendor(Request $request)
    {

        try {
            return DeliveryVendor::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'location' => $request->location,
                'extras' => $request->extras,
            ]);
        } catch (Exception $e) {
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return null;
        }
    }

}