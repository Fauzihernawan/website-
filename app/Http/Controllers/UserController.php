<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('admin.user.index', compact('user'));
    }

    public function tambah()
    {
        return view('admin.user.form');
    }

    public function simpan(Request $request)
    {
        $data =  [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ];

        User::create($data);
        return redirect()->route('user');
    }
    
    public function edit($id)
    {
        $user = User::find($id)->first();
        if(!$user){
            return redirect()->route('user')->with('error', 'User tidak ditemukan');
        }
        return view('admin.user.form');

    }

    public function update(Request $request, $id)
    {
        $validData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);

        $data = [
            'name' => $validData['name'],
            'email' => $validData['email'],
            'role' => $validData['role'],
            
        ];

        if ($request->has('password')) {
            $data['password'] = bcrypt($validData['password']);
        }
        User::find($id)->update($data);
        return redirect()->route('user');
    }

    public function hapus($id)
    {
        User::find($id)->delete();
        return redirect()->route('user');
    }

}
