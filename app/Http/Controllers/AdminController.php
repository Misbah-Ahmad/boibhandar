<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function welcome()
    {
        $admin = auth()->user();

        return view('admins.dash', compact([
            'admin',
        ]));
    }

}
