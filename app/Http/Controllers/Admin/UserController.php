<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }

    public function create()
    {
        $role = DB::table('roles')->get();
        return view('admin.user.create',compact('role'));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole($request->role);
        Alert::success('Berhasil Ditambahkan');
        return redirect()->route('users.index');
    }

    public function store_user(Request $request)
    {
        $request->request->add(['password' => bcrypt($request->password),
            'user'       => 'required',
            'emal'          => 'required', 
        ]);

        User::create($request->all());
        return redirect()->route('admin.user.index')->with('success','Data berhasil ditambah');
    }

    public function edit($user)
    {
        $user = User::find($user);
        return view('admin.user.edit',compact('user'));   
    }

    public function update(Request $request, User $user)
    {
        $request->request->add(['password' => $request->password ? bcrypt($request->password) : $request->old_password]);
        $user->update($request->all());
        return redirect()->route('admin.user.index')->with('success','Data berhasil diupdate');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('success','Data berhasil dihapus');
    }

    public function updateprofile (Request $request, User $user)
    {
        if($request->password){
            $password = Hash::make($request->password);
        }else{
            $password = $request->old_password;
        }

        $request->request->add(['password' => $password]);
        $user->update($request->all());
        return back()->with('success', 'Profile Berhasil diUpdate');
    }
}
