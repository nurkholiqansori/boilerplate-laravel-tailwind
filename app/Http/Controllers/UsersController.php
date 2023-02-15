<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        return redirect('/users')->with('success', 'User berhasil dibuat.');
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'username' => 'required|string|max:255|unique:users,username,' . $id,
        ]);

        $user = User::find($id);
        $data = $request->all();
        $user->update($data);

        return redirect('/users')->with('success', 'User berhasil diubah.');
    }

    public function editpassword($id)
    {
        $user = User::find($id);
        return view('users.editpassword', compact('user'));
    }

    public function updatepassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::find($id);
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user->update($data);

        return redirect('/users')->with('success', 'Password berhasil diubah.');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'User berhasil dihapus.');
    }
}
