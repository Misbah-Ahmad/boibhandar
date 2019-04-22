<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;
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
         // The passwords matches
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        //Current password and new password are same
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validator = Validator::make($request->all(),[
            'current-password' => ['required'],
            'new-password' => ['required','string', 'min:6', 'confirmed'],
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt(request('new-password'));
        $user->save();

        return back();


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
