<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Adldap\Laravel\Facades\Adldap;
use App\Models\Asset;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Traits\HasRoles;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class UserRegistrationController extends Controller
{
    use HasRoles;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        $user = User::orderBy('id','DESC')->paginate(5);
        return view('orm.users.index', compact('user'))->with('i', ($request->input('page', 1) - 1) * 5);;
    }

    public function mytest(){

        $user = Adldap::search()->users()->find('arun');
        echo "<pre>"; print_r($user);die;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asset = Asset::all();
        $roles = Role::all();
        return view('orm.users.create', compact('asset', 'roles'));
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
            'password' => 'required',
            //'Location_ID' => 'required',
            //'authorised' => 'required',
            
            //'Location_ID' => 'required',
        ]);

        $user = new User;
        $user->CPF_NO           = $request->cpf_no;
        $user->name             = $request->name;
        $user->DESIGNATION      = $request->degination;
        $user->SECTION          = $request->section;
        $user->ASSET            = $request->asset;
        $user->ROLE             = json_encode($request->role);
        $user->email            = $request->email;
        $user->password         = Hash::make($request->password);
        
        //$user->LOCATION_ID      = '123';//$request->Location_ID;
        $user->WEF_DATE         = 'test';//$request->cpf_no;
        $user->AUTHORISED       = 'Y';//$request->Authorised;
        $user->AUTHORISED_BY    = 'DFD';//$request->authorised;
        $user->DELETED_BY       = 'del';//$request->cpf_no;

        $user->save();
        $user->assignRole($request->role);
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

        $roles = Role::pluck('name','name')->all();
        $userRole = $update->roles->pluck('name','name')->all();

         $role = Role::all();
        $asset = Asset::all();
        return view('orm.users.update', compact('update', 'role', 'asset','roles','userRole'));
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
            //'Location_ID' => 'required',
            //'authorised' => 'required',
            
            //'Location_ID' => 'required',
        ]);

        $updateuser = User::find($id);
        $updateuser->CPF_NO           = $request->cpf_no;
        $updateuser->name             = $request->name;
        $updateuser->DESIGNATION      = $request->degination;
        $updateuser->SECTION          = $request->section;
        //$updateuser->LOCATION_ID      = $request->Location_ID;
        $updateuser->ASSET            = $request->asset;
        $updateuser->ROLE             = $request->role;
        $updateuser->email            = $request->email;

        $updateuser->WEF_DATE         = 'test';//$request->cpf_no;
        $updateuser->AUTHORISED       = 'Y';//$request->Authorised;
        $updateuser->AUTHORISED_BY    = 'DFDS';//$request->authorised;
        $updateuser->DELETED_BY       = 'del';//$request->cpf_no;
        $updateuser->save();

        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $updateuser->assignRole($request->role);

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
        User::find($id)->delete();
        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
    }
}
