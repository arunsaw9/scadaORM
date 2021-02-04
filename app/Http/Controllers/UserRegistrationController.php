<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Adldap\Laravel\Facades\Adldap;
use App\Models\Asset;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
         //$user = Adldap::search()->users()->find('shree');
         //echo "<pre>";print_r($user);die;
        $user = User::all();
        return view('orm.users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asset = Asset::all();
        return view('orm.users.create', compact('asset'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'email:rfc,dns',
            'cpf_no' => 'required|numeric',
            'degination' => 'required',
            'section' => 'required',
            'role' => 'required',
            'asset' => 'required',
            'Location_ID' => 'required',
            'authorised' => 'required',
            'password' => 'required',
            'asset' => 'required',
            'Location_ID' => 'required',
        ]);

        $user = new User;
        $user->CPF_NO           = $request->cpf_no;
        $user->name             = $request->name;
        $user->DESIGNATION      = $request->degination;
        $user->SECTION          = $request->section;
        $user->LOCATION_ID      = $request->Location_ID;
        $user->ASSET            = $request->asset;
        $user->ROLE             = $request->role;
        $user->email            = $request->email;
        $user->password         = Hash::make($request->newPassword);
        $user->WEF_DATE         = 'test';//$request->cpf_no;
        $user->AUTHORISED       = 'Y';//$request->Authorised;
        $user->AUTHORISED_BY    = $request->authorised;
        $user->DELETED_BY       = 'del';//$request->cpf_no;
        $user->email            = $request->email;

        $user->save();
        return redirect('/user')->with('status', 'Profile Created!');
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
        $update = User::findOrFail($id);
        $asset = Asset::all();
        return view('orm.users.update', compact('update', 'asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email:rfc,dns',
            'cpf_no' => 'required|numeric',
            'degination' => 'required',
            'section' => 'required',
            'role' => 'required',
            'asset' => 'required',
            'Location_ID' => 'required',
            'authorised' => 'required',
            'asset' => 'required',
            'Location_ID' => 'required',
        ]);

        $updateuser = User::find($id);
        $updateuser->CPF_NO           = $request->cpf_no;
        $updateuser->name             = $request->name;
        $updateuser->DESIGNATION      = $request->degination;
        $updateuser->SECTION          = $request->section;
        $updateuser->LOCATION_ID      = $request->Location_ID;
        $updateuser->ASSET            = $request->asset;
        $updateuser->ROLE             = $request->role;
        $updateuser->email            = $request->email;
        $updateuser->WEF_DATE         = 'test';//$request->cpf_no;
        $updateuser->AUTHORISED       = 'Y';//$request->Authorised;
        $updateuser->AUTHORISED_BY    = $request->authorised;
        $updateuser->DELETED_BY       = 'del';//$request->cpf_no;
        $updateuser->email            = $request->email;

        $updateuser->save();
        return redirect('/user')->with('success', 'User Updated successfully !');
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
