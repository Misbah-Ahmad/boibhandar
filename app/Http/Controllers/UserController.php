<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'fname' => ['required', 'string', 'min:1', 'max:255'],
            'sname' => ['required', 'string', 'min:1', 'max:255'],
            'phone' => ['required', 'string', 'regex:/^(01)[3-9]{1,1}[0-9]{8,8}$/i'], // needs to check unique phone later if different from current

        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $user = auth()->user();

        $phone = $request->phone;

        if($phone != $user->phone && User::where('phone', $phone)->count() > 0)
        {
            $validator->getMessageBag()->add('phone', 'New phone number is not unique!');
            return back()->withErrors($validator); 
        }




        $user->fname = request('fname');
        $user->sname = request('sname');
        $user->phone = $phone;


        $user->save();

        return back()->with('message', 'Profile is updated successfully!');


        

    }

    public function changePassword(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'current_password' => ['required', 'string', 'min:6'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);

        if($validator->fails()) 
        {
            return back()->withErrors($validator);
        }


        $user = auth()->user();
        $old = $request->current_password;
        $new = $request->password;

        if (!(Hash::check($old, $user->password)))
        {
            $validator->getMessageBag()->add('current_password', 'Incorrect Password!');
            return back()->withErrors($validator);
        }

        if($old == $new)
        {
            $validator->getMessageBag()->add('password', 'New password cannot be same as old password!');
            return back()->withErrors($validator);
        }


        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('message', 'Password is changed successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
